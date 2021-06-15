<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

//config
$bigData = [];
$html_use = '0';
$html_id = '0';
$html_code = '0';
$js_use = '0';
$js_code = '0';

//code
// prepare add media content gen
function prepareAddMediaFactory($data) {
    if ($data['facts']) unset($data['facts']);
    if ($data['seasons']) unset($data['seasons']);
    
    return $data;
}

// watch
function getDataRecoms($uid) {

}

function addView($uid, $kpid) {
    if ($uid == 48) return true;
    // получаем последний просмотр, отнимаем время просмотра от текущего, больше двух часов (7200) - добавляем
    $dateNow = appDateGetInt(appDateGetStr());
    $dateRegarding = 7200;
    $flagAddView = false;

    $query_last_view = "SELECT * FROM media_views WHERE kpid = :kpid and uid = :uid ORDER BY date DESC";
    $var_last_view = [
        ':kpid' => $kpid,
        ':uid' => $uid
    ];
    $last_view = dbGetOne($query_last_view, $var_last_view);

    if ($last_view['id']) {
        if (($dateNow - $last_view['date']) >= $dateRegarding) $flagAddView = true;
    } else $flagAddView = true;

    if ($flagAddView) {
        // добавляем
        $query_view_add = "INSERT INTO `media_views` (`id`, `kpid`, `uid`, `date`) VALUES (NULL, :kpid, :uid, :date_now)";
        $var_view_add = [
            ':kpid' => $kpid,
            ':uid' => $uid,
            ':date_now' => $dateNow
        ];
        $view_add = dbAddOne($query_view_add, $var_view_add);
        return true;
    } else return false;
}

// Api powered on https://kinopoiskapiunofficial.tech
$jwt = $_GET['jwt'];
if (jwt_is_valid($jwt)) {
    $jwt = jwt_decode($jwt);
    $user_uid = $jwt['data']['uid'];
} else die('{"error":"404"}');

$kpid = $_GET['kpid'];
if ($kpid) {
    $ch = curl_init();
    $headers = array('accept: application/json', 'x-api-key: 91d00358-6586-40e6-9d4e-9d9070547812');

    curl_setopt($ch, CURLOPT_URL, 'https://kinopoiskapiunofficial.tech/api/v2.1/films/'.$kpid.'?append_to_response=REVIEW'); # URL to post to
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); # return into a variable
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); # custom headers, see above
    $data = curl_exec($ch); # run!
    curl_close($ch);
    $content = json_decode($data, true);

    for ($i = 0; $i < count($content['data']['countries']); $i++) {
        $tmp_countries[] = $content['data']['countries'][$i]['country'];
    }
    $content['data']['countries'] = $tmp_countries;

    for ($i = 0; $i < count($content['data']['genres']); $i++) {
        $tmp_genres[] = '<a itemprop="genre" class="theme-text" onclick="return false;" href="#">'.$content['data']['genres'][$i]['genre'].'</a>';
    }
    $content['data']['genres'] = $tmp_genres;

    function facts($data) {
        $html = '';
        if (count($data) >= 1) {
            for($i = 0; $i < count($data);$i++) {
                $html .= '
                <div class="col-12 col-md-10 offset-md-1 text-left py-1 mb-3">
                    <h5 class="theme-text my-0 px-2 px-md-0"><span class="theme-title">#'.($i+1).'</span> '.$data[$i].'</h5>
                </div>
                ';
            }
        } else $html = '<div class="col-12 text-center py-1 mb-3"><h5 class="theme-title">К данному фильму факты еще не подобраны</h5></div>';
        return $html;
    }

    /* reviews */
    function renderReviews() {
        global $kpid;

        $chReviews = curl_init();
        $headersReviews = array('accept: application/json', 'x-api-key: 91d00358-6586-40e6-9d4e-9d9070547812');

        curl_setopt($chReviews, CURLOPT_URL, 'https://kinopoiskapiunofficial.tech/api/v1/reviews?filmId='.$kpid); # URL to post to
        curl_setopt($chReviews, CURLOPT_RETURNTRANSFER, 1); # return into a variable
        curl_setopt($chReviews, CURLOPT_HTTPHEADER, $headersReviews); # custom headers, see above
        $dataReviews = curl_exec($chReviews); # run!
        curl_close($chReviews);
        $data = json_decode($dataReviews, true);

        $obj = [0 => [], 1 => [], 2 => []];

        $reviews = $data['reviews'];
        if (count($reviews) >= 1) {
            $obj = [
                0 => [
                    'title' => $reviews[0]['reviewTitle'],
                    'content' => $reviews[0]['reviewDescription']
                ],
                1 => [
                    'title' => $reviews[1]['reviewTitle'],
                    'content' => $reviews[1]['reviewDescription']
                ],
                2 => [
                    'title' => $reviews[2]['reviewTitle'],
                    'content' => $reviews[2]['reviewDescription']
                ]
            ];
        }
        
        return $obj;
    }
    
    $reviewsData = renderReviews();
} else $bigData['redirect'] = '/main';

if ($content['data']['filmId']) {
    // init new media_content
    $query_select = "SELECT * FROM media_content WHERE kpid = :kpid";
    $var_select = [
        ':kpid' => $content['data']['filmId']
    ];
    $select = dbGetOne($query_select, $var_select);

    if (!$select['kpid']) {
        $query_add = "INSERT INTO `media_content` (`kpid`, `json`) VALUES (:kpid, :json)";
        $var_add = [
            ':kpid' => $content['data']['filmId'],
            ':json' => json_encode(prepareAddMediaFactory($content['data']), JSON_UNESCAPED_UNICODE)
        ];
        dbAddOne($query_add, $var_add);
    }

    // Есть ли подписка
    $query_subscription = "SELECT * FROM media_subs WHERE uid = :uid and kpid = :kpid";
    $var_subscription = [
        ':uid' => $user_uid,
        ':kpid' => $kpid
    ];
    $isSubscription = dbGetOne($query_subscription, $var_subscription);
    if ($isSubscription['id']) $isSubscription = $isSubscription['status'];
    else $isSubscription = 'unsubscribe';

    // кол-во подписчиков
    $query_subscriptionCount = "SELECT COUNT(id) FROM media_subs WHERE kpid = :kpid and status = :status";
    $var_subscriptionCount = [
        ':kpid' => $content['data']['filmId'],
        ':status' => 'subscribe'
    ];
    $subscriptionCount = dbGetOne($query_subscriptionCount, $var_subscriptionCount)['COUNT(id)'];
    $subscriptionCount = $subscriptionCount.' '.RusEnding($subscriptionCount, 'подписчик', 'подписчика', 'подписчиков');

    // Добавляем просмотр
    addView($user_uid, $kpid);

} else $bigData['redirect'] = '/main';

// $watchDataRecoms = json_encode(json_decode(file_get_contents('https://media.iny.su/api/0.1/media/mediaWatchRecoms.json')), JSON_UNESCAPED_UNICODE);
// $bigData['watchDataRecoms'] = json_decode($watchDataRecoms, true);

$bigData['watchData'] = json_decode($data, true);
$bigData['is_subscription'] = $isSubscription;
$bigData['subscriptionCount'] = $subscriptionCount;

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>
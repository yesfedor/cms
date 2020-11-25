<?php
$ui = false;
$warp = "warp";

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
    /*
    $ch = curl_init();
    $headers = array('accept: application/json', 'x-api-key: 91d00358-6586-40e6-9d4e-9d9070547812');

    curl_setopt($ch, CURLOPT_URL, 'https://kinopoiskapiunofficial.tech/api/v1/reviews?filmId='.$kpid); # URL to post to
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); # return into a variable
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); # custom headers, see above
    $data = curl_exec($ch); # run!
    curl_close($ch);
    $reviews = json_decode($data, true);

    function renderReviews($data) {
        $html = '';
        $reviews = $data['reviews'];
        if (count($reviews) >= 1) {
            for($i = 0; $i < count($reviews); $i++) {
                $reviewData = $reviews[$i];
                $review = '
                
                ';
            }
        }
        return $html;
    }
    */

    $watchDataRecoms = json_encode(array_slice(json_decode(file_get_contents('https://media.iny.su/api/0.1/media/mediaWatchRecoms.json')), 0, 7), JSON_UNESCAPED_UNICODE);
} else $redirect = '/main';

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
        ':uid' => $_SESSION['user']['uid'],
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
    addView($_SESSION['user']['uid'], $kpid);

} else $redirect = '/main';
?>
<style>
.list-group-item {
    background-color: #00000000 !important;
    border: none;
}
.md-accordion .card {
    border-bottom: 1px solid #333333 !important;
}
.theme-background {
    background: #181818 !important;
}
</style>
<div class="d-none d-lg-block bg-poster-image animated fadeIn" style="background-image: url(https://kinopoiskapiunofficial.tech/images/posters/kp/<?= $kpid ?>.jpg);"></div>
<div class="container-fluid">
    <div class="row animated fadeIn">
        <div class="col-12 col-md-10 offset-md-1">
            <!-- Wrapper -->
            <div class="row my-3">
                <div class="col-12 col-xl-9">
                    <div class="row">
                        <!-- Player -->
                        <div class="col-12 theme-panel embed-responsive embed-responsive-16by9">
                            <iframe id="watch_player" class="embed-responsive-item" src="" allowfullscreen=""></iframe>
                        </div>

                        <!-- Title -->
                        <div class="col-12 px-0">
                            <h4 id="watch_title" class="w-50 text-left theme-title text-capitalize mt-3 mb-0 float-left"></h4>
                            <h4 class="w-50 text-right text-muted mt-3 mb-0 float-left">16+</h4>
                            <h4 id="watch_date" class="w-50 text-right text-muted my-0 float-left d-none"></h4>
                        </div>

                        <hr class="w-100 theme-border-primary mt-2 mb-3">
                        <!-- Description -->
                        <div class="col-12 col-lg-6 px-0 text-center text-lg-left">
                            <h4 class="theme-text my-2">Информация к <span id="watch_desc_item" class="theme-text"></span></h4>
                        </div>
                        <div class="col-12 col-lg-6 px-0 text-center text-lg-right mt-3 mt-lg-0">
                            <a id="mediaWatchAuthorSupportMsg" data-toggle="tooltip" title="Поддержать разработчика" onclick="return nav.cc(this);" href="https://go.iny.su/donate" class="btn btn-outline-blue btn-rounded my-0">Донат</a>
                            <a id="watch_subs" data-toggle="tooltip" title="<?= $subscriptionCount ?>" data-status="<?= $isSubscription ?>" onclick="watchSubscription.toggle(this); return false;" href="#" class="btn btn-outline-red btn-rounded theme-duration my-0 mr-lg-0">Подписаться</a>
                        </div>

                        <div class="col-12 px-0 mt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item theme-panel theme-text">
                                    <span class="float-left w-50 text-left theme-title">Год производства</span> 
                                    <span itemprop="dateCreated" class="float-left w-50 text-left"><?= $content['data']['year'] ?></span>
                                </li>
                                <li class="list-group-item theme-panel theme-text">
                                    <span class="float-left w-50 text-left theme-title">Страна</span> 
                                    <span class="float-left w-50 text-left"><?= implode(', ', $content['data']['countries']) ?></span>
                                </li>
                                <li class="list-group-item theme-panel theme-text">
                                    <span class="float-left w-50 text-left theme-title">Жанр</span> 
                                    <span id="watch_genre" class="float-left w-50 text-left"><?= implode(', ', $content['data']['genres']) ?></span>
                                </li>
                                <li  class="list-group-item theme-panel theme-text">
                                    <span class="float-left w-50 text-left theme-title">Слоган</span> 
                                    <span class="float-left w-50 text-left"><?= ($content['data']['slogan'] != '' ? $content['data']['slogan'] : '-') ?></span>
                                </li>
                                <li class="list-group-item theme-panel theme-text">
                                    <span class="float-left w-50 text-left theme-title">Время</span> 
                                    <span itemprop="duration" class="float-left w-50 text-left"><?= $content['data']['filmLength'] ?></span>
                                </li>
                                <li class="list-group-item theme-panel theme-text">
                                    <span itemprop="description" class="float-left text-left theme-title">Описание:<br><?= $content['data']['description'] ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 accordion md-accordion my-3 px-0" id="reviewsPanel" role="tablist" aria-multiselectable="true">
                            <!-- Accordion card -->
                            <div class="card">
                                <div class="card-header theme-background" role="tab" id="reviewsPanelGreen">
                                    <a data-toggle="collapse" data-parent="#reviewsPanel" href="#reviewsPanelGreenContent" aria-expanded="true" aria-controls="reviewsPanelGreenContent">
                                        <h5 class="mb-0 theme-title">Рецензия №1<i class="fas fa-angle-down rotate-icon theme-icon"></i></h5>
                                    </a>
                                </div>
                                <div id="reviewsPanelGreenContent" class="collapse show" role="tabpanel" aria-labelledby="reviewsPanelGreen" data-parent="#reviewsPanel">
                                    <div class="card-body theme-background">
                                        <h5 class="theme-text my-0">reviewsPanelGreen</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card -->

                            <!-- Accordion card -->
                            <div class="card">
                                <div class="card-header theme-background" role="tab" id="reviewsPanelRed">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#reviewsPanel" href="#reviewsPanelRedContent" aria-expanded="false" aria-controls="reviewsPanelRedContent">
                                        <h5 class="mb-0 theme-title">Рецензия №2<i class="fas fa-angle-down rotate-icon theme-icon"></i></h5>
                                    </a>
                                </div>
                                <div id="reviewsPanelRedContent" class="collapse" role="tabpanel" aria-labelledby="reviewsPanelRed" data-parent="#reviewsPanel">
                                    <div class="card-body theme-background theme-text">
                                        <h5 class="theme-text my-0">reviewsPanelRed</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 theme-panel rounded text-center py-3 my-3">
                            <h4 class="text-center text-center theme-title py-3 mb-3">Факты</h4>
                            <div class="row">
                                <?= facts($content['data']['facts']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-3">
                    <div class="row px-xl-5">
                        <!-- Recoms -->
                        <div class="col-12 text-center mt-5 mt-xl-0 px-0">
                            <h4 class="theme-title mb-2">Рекомендации</h4>
                        </div>
                        <hr class="w-100 w-xl-75 border-white text-center my-3">

                        <div class="col-12 text-center px-0">
                            <h6 class="theme-text my-0"><?= $content['data']['slogan'] ?></h6>
                        </div>
                        <hr class="w-100 w-xl-75 border-white text-center my-3">
                        <div class="col-12">
                            <div id="mediaWrapper" class="row"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
watchData = <?= $data ?>

watchDataRecoms = <?= $watchDataRecoms ?>

if (!fn.isMobile()) init.css.add('media-watch', 'media.watch.css', 7)
init.css.add('AppMediaCardWithPoster', 'AppMediaCardWithPoster.css', 512)
init.js.add('AppMediaCardWithPoster', 'wc:AppMediaCardWithPoster', 16384)
if (typeof watch == 'object') {
    watch.data = {}
    watch.content = {}
    watch.data = watchData
    watch.init()
    watchSubscription.init()
} else init.js.add('media-watch', 'module/media.watch.js', 4104)
appMediaRender('mediaWrapper', watchDataRecoms, {fill: 'max-content', type: false})
</script>
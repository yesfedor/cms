<?php
$ui = false;
$warp = "warp";

// Api powered on https://kinopoiskapiunofficial.tech
$kpid = $_GET['kpid'];
if ($kpid) {
    $ch = curl_init();
    $headers = array('accept: application/json', 'x-api-key: 91d00358-6586-40e6-9d4e-9d9070547812');

    curl_setopt($ch, CURLOPT_URL, 'https://kinopoiskapiunofficial.tech/api/v2.1/films/'.$kpid); # URL to post to
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); # return into a variable
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); # custom headers, see above
    $data = curl_exec($ch); # run!
    curl_close($ch);
    $content = json_decode($data, true);

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
        $query_add = "INSERT INTO `media_content` (`kpid`, `json`, `views`) VALUES (:kpid, :json, :views)";
        $var_add = [
            ':kpid' => $content['data']['filmId'],
            ':json' => json_encode($content['data'], JSON_UNESCAPED_UNICODE),
            ':views' => 1
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
    function addView($kpid) {
        $query = "UPDATE media_content SET views = views + 1 WHERE kpid = :kpid";
        $var = [
            ':kpid' => $kpid
        ];

        return dbAddOne($query, $var);
    }
    $watchViewsLastTime = $_SESSION['product']['media']['watch'][$kpid];
    if (appDateGetInt(appDateGetStr()) - $watchViewsLastTime > 3600) {
        addView($kpid);
        $_SESSION['product']['media']['watch'][$kpid] = appDateGetInt(appDateGetStr());
    } else {
        $_SESSION['product']['media']['watch'][$kpid] = appDateGetInt(appDateGetStr());
    }

} else $redirect = '/main';
?>
<div class="d-none d-lg-block bg-poster-image" style="background-image: url(https://kinopoiskapiunofficial.tech/images/posters/kp/<?= $kpid ?>.jpg);"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1">
            <!-- Wrapper -->
            <div class="row my-3">
                <div class="col-12 col-xl-9">
                    <div class="row">
                        <!-- Player -->
                        <div class="col-12 theme-panel embed-responsive embed-responsive-16by9">
                            <iframe id="watch_player" class="embed-responsive-item" src="https://67lm8g55vgghj78890.8432109.xyz/n1xnK05iU8an?kp_id=<?= $kpid ?>" allowfullscreen=""></iframe>
                        </div>

                        <!-- Title -->
                        <div class="col-12 px-0">
                            <h6 id="watch_genre" class="mt-2"></h6>
                            <h4 id="watch_title" class="w-50 text-left theme-title text-capitalize my-0 float-left"></h4>
                            <h4 id="watch_date" class="w-50 text-right text-muted my-0 float-left"></h4>
                        </div>

                        <hr class="w-100 theme-border-primary mt-2 mb-3">
                        <!-- Description -->
                        <div class="col-12 col-lg-6 px-0 text-center text-lg-left">
                            <h4 class="theme-text my-2">Описание к <span id="watch_desc_item" class="theme-text"></span></h4>
                        </div>
                        <div class="col-12 col-lg-6 px-0 text-center text-lg-right mt-3 mt-lg-0">
                            <a id="mediaWatchAuthorSupportMsg" data-toggle="tooltip" title="Поддержать разработчика" onclick="return nav.cc(this);" href="https://go.iny.su/donate" class="btn btn-outline-blue btn-rounded my-0">Донат</a>
                            <a id="watch_subs" data-toggle="tooltip" title="<?= $subscriptionCount ?>" data-status="<?= $isSubscription ?>" onclick="watchSubscription.toggle(this); return false;" href="#" class="btn btn-outline-red btn-rounded theme-duration my-0">Подписаться</a>
                        </div>

                        <div class="col-12 px-0 mt-3">
                            <h5 id="watch_desc" class="theme-text"></h5>
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

if (!fn.isMobile()) init.css.add('media-watch', 'media.watch.css', 1)
init.css.add('AppMediaCardWithPoster', 'AppMediaCardWithPoster.css', 256)
init.js.add('AppMediaCardWithPoster', 'wc:AppMediaCardWithPoster', 16384)
if (typeof watch == 'object') {
    watch.data = {}
    watch.content = {}
    watch.data = watchData
    watch.init()
    watchSubscription.init()
} else init.js.add('media-watch', 'module/media.watch.js', 4098)
appMediaRender('mediaWrapper', watchDataRecoms, {fill: 'max-content', type: false})
</script>
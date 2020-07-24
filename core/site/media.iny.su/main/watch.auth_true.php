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

    $watchDataRecoms = json_encode(array_slice(json_decode(file_get_contents('https://media.iny.su/api/0.1/media/mediaWatchRecoms.json')), 0, 5), JSON_UNESCAPED_UNICODE);
} else $redirect = '/main';
?>
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

                        <hr class="w-100 theme-border-primary my-2">
                        <!-- Description -->
                        <div class="col-12 px-0">
                            <h4 class="theme-text">Описание к <span id="watch_desc_item" class="theme-text"></span></h4>
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
                        <hr class="w-100 w-xl-75 theme-border-primary text-center my-3">

                        <div class="col-12 text-center mt-5 mt-xl-0 px-0">
                            <h6 class="theme-text my-0"><?= $content['data']['slogan'] ?></h6>
                        </div>
                        <hr class="w-100 w-xl-75 theme-border-primary text-center my-3">
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

init.css.add('AppMediaCardWithPoster', 'AppMediaCardWithPoster.css', 256)
init.js.add('AppMediaCardWithPoster', 'wc:AppMediaCardWithPoster', 8192)
if (typeof watch == 'object') {
    watch.data = {}
    watch.content = {}
    watch.data = watchData
    watch.init()
} else init.js.add('media-watch', 'module/media.watch.js', 128)
appMediaRender('mediaWrapper', watchDataRecoms, {fill: 'max-content', type: false})
</script>
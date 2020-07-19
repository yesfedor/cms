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
} else $redirect = '/main';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1">
            <!-- Wrapper -->
            <div class="row my-3">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <!-- Player -->
                        <div class="col-12 theme-panel embed-responsive embed-responsive-16by9">
                            <iframe id="watch_player" class="embed-responsive-item" src="" allowfullscreen=""></iframe>
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
                <div class="col-12 col-lg-3">
                    <div class="row px-lg-5">
                        <!-- Recoms -->
                        <div class="col-12 text-center mt-5 mt-lg-0">
                            <h4 class="theme-title">Рекомендации</h4>
                        </div>
                        <hr class="w-100 w-lg-75 theme-border-primary text-center my-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
watchData = <?= $data ?>

if (typeof watch == 'object') {
    watch.data = {}
    watch.content = {}
    watch.data = watchData
    watch.init()
}
else init.js.add('media-watch', 'module/media.watch.js', 7)
</script>
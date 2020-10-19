<?php

/* https://iny.su/auth?to=media.iny.su&_origin=false&api=true&kpid=<?= $kpid ?> */

$ui = false;
$warp = "warp";

$kpid = $_GET['kpid'];
if (!$kpid) $redirect = '/main';
else {
    $_SESSION['url-redirect'] = 'https://media.iny.su/watch?kpid='.$kpid;

    $ch = curl_init();
    $headers = array('accept: application/json', 'x-api-key: 91d00358-6586-40e6-9d4e-9d9070547812');

    curl_setopt($ch, CURLOPT_URL, 'https://kinopoiskapiunofficial.tech/api/v2.1/films/'.$kpid); # URL to post to
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
        $tmp_genres[] = $content['data']['genres'][$i]['genre'];
    }
    $content['data']['genres'] = $tmp_genres;
    //debug($content);
}
?>
<style>
.list-group-item {
    border: 1px solid rgba(255,255,255,.125)!important;
}
</style>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-12 col-md-10 offset-md-1">
            <!-- Wrapper -->
            <div class="row my-3 animated fadeInDown">
                <div class="col-12 col-md-3">
                    <div class="row">
                        <!-- Image -->
                        <div class="col-12">
                            <img src="https://kinopoiskapiunofficial.tech/images/posters/kp/<?= $kpid ?>.jpg" alt="thumbnail" class="img-thumbnail" style="width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <!-- Base Info -->
                    <div class="col-12 px-0">
                        <h1 class="text-center text-left theme-panel rounded theme-title font-weight-bold py-3 mb-3 z-depth-1"><?= $content['data']['nameRu'] ?></h1>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item theme-panel theme-title">Информация:</li>
                            <li class="list-group-item theme-panel theme-text">
                                <span class="float-left w-50 text-left theme-title">Год производства</span> 
                                <span class="float-left w-50 text-left"><?= $content['data']['year'] ?></span>
                            </li>
                            <li class="list-group-item theme-panel theme-text">
                                <span class="float-left w-50 text-left theme-title">Страна</span> 
                                <span class="float-left w-50 text-left"><?= implode(', ', $content['data']['countries']) ?></span>
                            </li>
                            <li class="list-group-item theme-panel theme-text">
                                <span class="float-left w-50 text-left theme-title">Жанр</span> 
                                <span class="float-left w-50 text-left"><?= implode(', ', $content['data']['genres']) ?></span>
                            </li>
                            <li class="list-group-item theme-panel theme-text">
                                <span class="float-left w-50 text-left theme-title">Слоган</span> 
                                <span class="float-left w-50 text-left"><?= ($content['data']['slogan'] != '' ? $content['data']['slogan'] : '-') ?></span>
                            </li>
                            <li class="list-group-item theme-panel theme-text">
                                <span class="float-left w-50 text-left theme-title">Время</span> 
                                <span class="float-left w-50 text-left"><?= $content['data']['filmLength'] ?></span>
                            </li>
                            <li class="list-group-item theme-panel theme-text">
                                <span class="float-left text-left theme-title">Описание:<br><?= $content['data']['description'] ?></span>
                            </li>
                        </ul>
                    </div>

                    <!-- Go to auth -->
                    <div class="col-12 theme-panel rounded text-center py-3 my-3">
                        <a class="h3 theme-title py-3" onclick="return nav.go(this);" href="https://iny.su/auth?to=media.iny.su&_origin=false&api=true&kpid=<?= $kpid ?>">Авторизоваться, что бы начать просмотр</a>
                    </div>

                    <!-- More Info -->
                    <div class="col-12">
                    
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
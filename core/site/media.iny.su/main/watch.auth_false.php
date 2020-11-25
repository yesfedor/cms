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
        $tmp_genres[] = '<a itemprop="genre" class="theme-text" onclick="return false;" href="#">'.$content['data']['genres'][$i]['genre'].'</a>';
    }
    $content['data']['genres'] = $tmp_genres;

    /*  */
    $ch = curl_init();
    $headers = array('accept: application/json', 'x-api-key: 91d00358-6586-40e6-9d4e-9d9070547812');

    curl_setopt($ch, CURLOPT_URL, 'https://kinopoiskapiunofficial.tech/api/v2.1/films/'.$kpid.'/videos'); # URL to post to
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); # return into a variable
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); # custom headers, see above
    $data = curl_exec($ch); # run!
    curl_close($ch);
    $videos = json_decode($data, true);
    
    if ($videos['trailers'][0]['url']) {
        $videos_class = 'd-block';
        
        $videos_trailers = str_replace('watch?v=', 'embed/', $videos['trailers'][0]['url']);
    } else {
        $videos_class = 'd-none';
        $videos_trailers = '';
    }
}

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
?>
<style>
.list-group-item {
    border: 1px solid rgba(255,255,255,.125)!important;
}
</style>
<div itemscope itemtype="http://schema.org/Movie" class="container-fluid">
    <meta itemprop="inLanguage" content="ru">
    <meta itemprop="isFamilyFriendly" content="True">
    <div class="row mt-3">
        <div class="col-12 col-md-10 offset-md-1">
            <!-- Wrapper -->
            <div class="row my-3 animated fadeInDown">
                <div class="col-12 col-md-3">
                    <div class="row">
                        <!-- Image -->
                        <div class="col-12">
                            <img itemprop="image" src="https://kinopoiskapiunofficial.tech/images/posters/kp/<?= $kpid ?>.jpg" alt="thumbnail" class="img-thumbnail" style="width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="row">
                        <!-- Base Info -->
                        <div class="col-12 px-0">
                            <h1 itemprop="name" class="text-center text-left theme-panel rounded theme-title font-weight-bold py-3 mb-3 z-depth-1"><?= $content['data']['nameRu'] ?></h1>
                            <div class="row <?= $videos_class ?> px-md-3">
                                <div class="col-12 my-3 theme-panel embed-responsive embed-responsive-16by9">
                                    <iframe id="watch_player" class="embed-responsive-item" src="<?= $videos_trailers ?>" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item theme-panel theme-title">Информация:</li>
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
                                    <span class="float-left w-50 text-left"><?= implode(', ', $content['data']['genres']) ?></span>
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

                        <!-- Go to auth -->
                        <div class="col-12 theme-panel rounded text-center py-3 my-3">
                            <a class="h3 theme-title py-3" onclick="return nav.go(this);" href="https://iny.su/auth?to=media.iny.su&_origin=false&api=true&kpid=<?= $kpid ?>">Авторизоваться, что бы начать просмотр</a>
                        </div>

                        <!-- More Info -->
                        <div class="col-12 theme-panel rounded text-center py-3 my-3">
                            <h1 class="text-center text-center theme-title py-3 mb-3">Факты</h1>
                            <div class="row">
                                <?= facts($content['data']['facts']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
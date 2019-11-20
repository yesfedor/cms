<?php
$warp = 'app';

$watchData = [
    'iframe' => '//69.tvmovies.in/LDSZJq4uCNvY/tv-series/5631',
    'title' => 'Ради всего человечества (2019)',
    'desc' => 'Apple TV+ Анонсировали в 2019 году новый сериал: Ради всего человечества это американский фантастический и драматический сериал. В нём в жанре альтернативной истории будет показано, «что бы случилось, если бы космическая гонка не закончилась»'
];
?>
<style>
:root {
    --theme-background: #212121;
    --theme-text: white;
}
.container-fluid {
    min-height: 100vh;
}
</style>
<div class="container">
    <div class="row my-5 border rounded" style="border-color: #444444 !important;">
        <div class="col-10 offset-1 text-center my-3 py-0">
            <h1 class="h4 white-text my-0"><?= $watchData['title'] ?></h1>
        </div>
        <div class="col-12 col-md-10 offset-md-1 text-center my-3 p-0">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?= $watchData['iframe'] ?>" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-10 offset-1 text-center my-3 py-0">
           <h4 class="h5 white-text my-0"><?= $watchData['desc'] ?></h4>
        </div>
    </div>
</div>
<script>
style.setHeaderAppThemeColor('#212121')
</script>
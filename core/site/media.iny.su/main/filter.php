<?php
$filterConent = false;
if ($query = 'search') {

}
?>
<div class="container-fluid">
    <div class="row animated fadeIn">
        <div class="col-12 text-center mt-5">
            <h1 class="theme-title">Поиск по фильтрам</h1>
        </div>
        <div class="col-10 offset-1 col-md-4 offset-md-4 text-center my-5">
            
        </div>
    </div>
    <div id="mediaWrapper" class="d-flex row align-items-center justify-content-center"></div>
</div>

<script>
init.css.add('AppMediaCardWithPoster', 'AppMediaCardWithPoster.css', 512)
init.js.add('AppMediaCardWithPoster', 'wc:AppMediaCardWithPoster', 16384)
if (!fn.isMobile()) init.css.add('media-watch', 'media.watch.css', 7)

filterConent = <?= $filterConent ?>
if 
</script>
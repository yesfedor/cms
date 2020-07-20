<div class="container-fluid">
    <div id="mediaWrapper" class="row">
        <div class="col-12 text-center">
            <h1 class="theme-title my-5">Поиск фильмов и сериалов</h1>
        </div>
        <div class="col-12 text-center">
            
        </div>
    </div>
</div>
<script>
init.css.add('AppMediaCardWithPoster', 'AppMediaCardWithPoster.css', 16)
init.js.add('AppMediaCardWithPoster', 'wc:AppMediaCardWithPoster', 256)

appMediaRender('mediaWrapper', dataSearch, {fill: 'default', type: false})
</script>
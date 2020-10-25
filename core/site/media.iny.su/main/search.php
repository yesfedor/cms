<div class="container-fluid">
    <div class="row animated fadeIn">
        <div class="col-12 text-center mt-5">
            <h1 class="theme-title">Поиск фильмов и сериалов</h1>
        </div>
        <div class="col-10 offset-1 col-md-4 offset-md-4 text-center md-form md-outline my-5">
            <input type="search" id="search" class="theme-panel theme-title form-control">
            <label for="search" class="theme-panel rounded mx-3">Поиск</label>
        </div>
    </div>
    <div id="mediaWrapper" class="d-flex row align-items-center justify-content-center"></div>
</div>
<script>
init.css.add('AppMediaCardWithPoster', 'AppMediaCardWithPoster.css', 512)
init.js.add('AppMediaCardWithPoster', 'wc:AppMediaCardWithPoster', 16384)

el_search = document.getElementById('search')
nav.onsearch('change', '#search', '/search?query={%query%}', '/search', '{%query%}', () => {
    setTimeout(() => {
        let initQuery = nav.url.query('query')
        if (initQuery != null) {
            $('[for = search]').addClass('active');
            el_search.setAttribute('value', initQuery)
            el_search.dispatchEvent(new Event('change'))
        }
    }, 500);
}, () => {
    let value = encodeURIComponent(el_search.value)
    if (value.length > 2) {
        $.ajax({
            type: "POST",
            url: "/api.php?_action=media.search&v=0.1",
            data: {query: value},
            dataType: "json",
            success: function (obj) {
                $('#mediaWrapper').html('')
                if (obj.code == 404) 
                    $('#mediaWrapper').html('<div class="col-12 text-center animated fadeIn"><h4 class="theme-text my-5">Ничего не найдено</h4></div>')
                if (obj.code == 200) 
                    appMediaRender('mediaWrapper', obj.content, {fill: 'default', type: false})
            }
        });
    }
}, urlState='go')
</script>
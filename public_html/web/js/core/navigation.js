var nav = {
    data: {
        tplLoaderPage: mainTpl.nav.tplLoaderPage,
        tplLoaderModule: mainTpl.nav.tplLoaderModule,
        restart: false
    },
    path: {
        apiModulePath: servers.api + '/api.php?_action=getWarp&v=0.1'
    },
    ui: {
        use: false,
        type: 'main',
        element: '#warp',
        element_conflict: '#warp-page',
        warp_page_helper: false,
        loaderBar: {
            element: '',
            status: false,
            prev_html: ''
        }
    },
    
    scroll (el) {
        var elementClick = $(el).attr("href");
        var destination = $(elementClick).offset().top;
        $('html, body').animate({ scrollTop: destination }, 600);
        return false;
    },
    createLink(href) {
        var url = document.createElement("a")
        url.href = href
        return url
    },
    loadMudule(url, func) {
        nav.changeUrl(url)
        func()
    },
    router(url=false, element=false, module='') {
        if (init.data.modal.status == 'show') $('#'+init.data.modal.id).modal('hide')
        if (url && element) {
            element = 'go'
            link = nav.createLink(url)
            if (link.hostname != window.location.hostname) window.location.href = link.href
        } else {
            link = window.location
        }

        data_pathname = link.pathname
        data_query = link.search
        data_hash = link.hash

        switch(element) {
            case 'start':
                nav.data.restart = true
                history.replaceState({
                    pathname:data_pathname,
                    search: data_query,
                    hash: data_hash
                }, null, link.href)
            break;
            case 'go':
                history.pushState({
                    pathname:data_pathname,
                    search: data_query,
                    hash: data_hash
                }, null, link.href)
            break;
        }
        
        $.ajax({
            type: "POST",
            url: nav.path.apiModulePath,
            data: {
                url_pathname: data_pathname,
                url_query: data_query,
                url_hash: data_hash
            },
            dataType: "json",
            beforeSend: ()=>{
                nav.ui.loaderBar.status = true

                if (nav.ui.use == true) {
                    nav.ui.loaderBar.element = nav.ui.element_conflict
                    nav.ui.loaderBar.prev_html = $(nav.ui.element_conflict).hide().fadeIn(300)

                    $(nav.ui.element_conflict).html(nav.data.tplLoaderModule).hide().fadeIn(300)
                } else {
                    nav.ui.loaderBar.element = '#warp'
                    nav.ui.loaderBar.prev_html = $('#warp').html()
                    $('#warp').html(nav.data.tplLoaderPage)
                }
            },
            success: function (data) {
                if (data.redirect) window.location.href = data.redirect
                if (data.title) document.title = data.title
                $('#header-app-theme-color').attr('content', data['header-app-theme-color'])

                if (data.ui_json) {
                    page_ui = JSON.parse(data.ui_json)

                    nav.ui.use = page_ui.use
                    nav.ui.element = page_ui.element
                } else {
                    nav.ui.use = false
                }
                for(key in data.html) {
                    if (nav.ui.use == false && key != 'warp-page-helper') {
                        $('#'+key).html(data.html[key]).hide().fadeIn(300)
                    } else {
                        if ('#'+key == nav.ui.loaderBar.element && key != 'warp-page-helper') {
                            nav.ui.loaderBar.status = false 
                            $('#'+key).html(data.html[key]).hide().fadeIn(300)
                        }
                        else if ('#'+key == nav.ui.element) {
                            nav.ui.loaderBar.status = false
                            if (nav.ui.type != page_ui.type) $('#'+key).html(data.html[key]).hide().fadeIn(300)
                            nav.ui.type = page_ui.type
                        } else {
                            if (key != 'warp-page-helper') {
                                nav.ui.loaderBar.status = false
                                $('#'+key).html(data.html[key]).hide().fadeIn(300)
                            }
                        }
                    }
                }

                if (nav.ui.warp_page_helper != data["warp-page-helper"]) {
                    $('#warp-page-helper').hide()
                    $('#warp-page-helper').html(data.html['warp-page-helper'])
                    showHelpeInterval = setInterval(()=>{
                        if ($('warp-page').html() != '') {
                            $('#warp-page-helper').fadeIn(300)
                            clearInterval(showHelpeInterval)
                        }
                    }, 100)
                    
                    nav.ui.warp_page_helper = data["warp-page-helper"]
                }
            },
            error: () => {
                console.info('nav.router: Page error #1')
            }
        });

        return false
    },
    changeTitle(newTitle) {
        document.title = newTitle
    },
    changeUrl(url='/', element=false, newTitle=false) {
        if (newTitle) nav.changeTitle(newTitle)
        if (url && element) {
            element = 'go'
            link = nav.createLink(url)
            if (link.hostname != window.location.hostname) window.location.href = link.href
        } else {
            link = window.location
        }

        data_pathname = link.pathname
        data_query = link.search
        data_hash = link.hash

        switch(element) {
            case 'start':
                history.replaceState({
                    pathname:data_pathname,
                    search: data_query,
                    hash: data_hash
                }, null, link.href)
            break;
            case 'go':
                history.pushState({
                    pathname:data_pathname,
                    search: data_query,
                    hash: data_hash
                }, null, link.href)
            break;
        }
    },
    go(element, module='') {
        url = $(element).attr('href')
        nav.router(url, 'go', module)
        return false
    },
    away(element) {
        url = $(element).attr('href')
        window.open(url, '_blank')
        return false
    },
    cc(element) {
        url = $(element).attr('href')
        if (url) {
            $.ajax({
                type: "POST",
                url: "/api.php?_action=go_cc/info&v=0.1",
                data: {url_short: url},
                dataType: "json",
                success: function (data) {
                    info = data.info
                    console.log(info)
                    link = nav.createLink(info.url_to)

                    if (link.host == window.location.host) nav.away(link)
                    else nav.away(link)
                },
                error: function () {
                    toastr.error('INY GO: Error')
                }
            });  
        }
        return false
    },
    onsearch(events, element, urlSearch, urlSearchNull, tpl, initF, changeF, urlState='go') {
        initF()
        $(element).on(events, ()=>{
            query = $(element).val()
            url = '/'

            if (query != '') {
                url = urlSearch.replace(tpl, query)
            } else {
                url = urlSearchNull
            }

            nav.changeUrl(url, urlState, false)
            changeF()
        })
    }
}

window.addEventListener("popstate", function() {
    nav.router(window.location.href, 'start')
}, false);

nav.router(window.location.href, 'start')
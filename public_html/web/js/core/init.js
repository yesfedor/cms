var init = {
    data: {
        css: {},
        js: {},
        header: {},
        footer: {},
        modal: {
            id:'',
            status:'hide'
        }
    },
    path: {
        bootFile: 'boot.json?time=' + (new Date()).getTime(),
        css: servers.cdn + '/web/css/',
        js: servers.cdn + '/web/js/',
        header: servers.api + '/api.php?_action=getHeader&v=0.1',
        footer: servers.api + '/api.php?_action=getFooter&v=0.1',
        jquery: servers.cdn + '/web/vendor/js/jquery.js'
    },

    checkUrl(type, url) {
        tplBaseDir = 'base:'
        tplBaseDomain = 'domain:'
        tplBaseDirLen = tplBaseDir.length
        tplBaseDomainLen = tplBaseDomain.length

        newUrl = ''
        oldUrl = url
        changed = false

        if (oldUrl.substr(0, tplBaseDirLen) == tplBaseDir && changed == false) {
            newUrl = oldUrl.substr(tplBaseDirLen)
            changed = true
        }
        if (oldUrl.substr(0, tplBaseDomainLen) == tplBaseDomain && changed == false) {
            newUrl = oldUrl.substr(tplBaseDomainLen)
            changed = true
        }

        if (type == 'css' && changed == false) {
            newUrl = init.path.css + oldUrl
            changed == true
        }
        if (type == 'js' && changed == false) {
            newUrl = init.path.js + oldUrl
            changed == true
        }

        return newUrl
    },
    checkData(type, id) {
        switch(type) {
            case 'css':
                if ($('#app-css' + id).is('link')) {
                    return false
                } else return true

                break;
            case 'js':
                if ($('#app-css' + id).is('script')) {
                    return false
                } else return true
                break;
        }
    },

    css: {
        add(id, url, version=false) {
            if (init.checkData('css', id)) {
                url = init.checkUrl('css', url)

                $('<link/>', {
                    id: 'app-css-' + id,
                    rel: 'stylesheet',
                    href: url + (version ? '?version=' + version : '')     
                }).appendTo('head')

                init.data.css[id] = {
                    id: id,
                    url: url,
                    version: version
                }
            } 
        },
        remove(id) {
            $('#app-css-' + id).remove()
            init.data.css[id] = false
        }
    },

    js: {
        add(id, url, version=false) {
            if (init.checkData('js', id)) {
                url = init.checkUrl('js', url)

                $('<script/>', {
                    id: 'app-js-' + id,
                    src: url + (version ? '?version=' + version : '')
                }).appendTo('body')

                init.data.js[id] = {
                    id: id,
                    url: url,
                    version: version
                }
            }
        },
        remove(id) {
            $('#app-js-' + id).remove()
            init.data.js[id] = false   
        }
    },

    header(type) {
        $('header')
            .css('display', 'none')
            .load(init.path.header + '&domain=' + window.location.hostname + '&type=' + type)
            .fadeIn()
        
        init.data.header[type] = true
    },

    footer(type) {
        $('footer')
            .css('display', 'none')
            .load(init.path.footer + '&domain=' + window.location.hostname + '&type=' + type)
            .fadeIn()
        
        init.data.footer[type] = true
    },

    boot(data) {
        if (data.setting) init.setSetting(setting)
        if (data.css) {
            for(key in data.css) {
                init.css.add(key, data.css[key].url, data.css[key].version)
            }
        }
        if (data.js) {
            for(key in data.js) {
                init.js.add(key, data.js[key].url, data.js[key].version)
            }
        }
        if (data.header) {
            if (config.user.auth) init.header(data.header.type_auth_true)
            else init.header(data.header.type_auth_false)
        }
        if (data.footer) {
            if (config.user.auth) init.footer(data.footer.type_auth_true)
            else init.footer(data.footer.type_auth_false)
        }
    },

    setSetting(setting=false) {
        if (setting.path.css) init.path.css = setting.path.css
        if (setting.path.js) init.path.js = setting.path.js
        if (setting.path.header) init.path.header = setting.path.header
        if (setting.path.footer) init.path.footer = setting.path.footer
        if (setting.path.jquery) init.path.jquery = setting.path.jquery
    },

    initJquery() {
        // init jquery
        var jquery = document.createElement('script');
        jquery.id = 'jquery'
        jquery.src = init.path.jquery
        document.body.appendChild(jquery)

        interval = setInterval(()=>{
            if (typeof $ !== 'undefined') {
                clearInterval(interval)
                init.start()

                var firstload = localStorage.getItem('app-status')
                if (firstload == 'true' || config.visit == 'robot') {
                    $('body').css('display', 'block')
                }
                else {
                    setTimeout(() => {
                        localStorage.setItem('app-status', 'true')
                        $('body').fadeIn()
                        setTimeout(() => {
                            $('body').css('display', 'block')
                            toastr.info('First download the longest')
                        }, 1000);
                    }, 1500);
                }
            }
        }, 100)
    },

    start(setting=false) {
        // setting
        if (setting) init.setSetting(setting)

        // load default boot json
        var includePath = init.path.js + 'include/' + config.info.appname + '/' + init.path.bootFile
        $.ajax({
            crossDomain: true,
            dataType: 'json',
            type: 'GET',
            url: includePath,
            success: (data) => {
                init.boot(data)
                console.info('init.start: Boot init #2')
            },
            error: () => {
                console.info('init.start: Boot error #1')
            }
        })
    },

    createModal(id, html={title:'', content:'', footer:''}, size='', bgcolor='') {
        // size = small : large : full
        if ($('#' + id).is('div') === false) {
            $.ajax({
                type: "POST",
                url: servers.api + "/api.php?_action=static/createModal&v=0.1" + (bgcolor ? '&bg=' + encodeURIComponent(bgcolor):''),
                data: {
                    crossDomain: true,
                    id: id,
                    title: html.title,
                    content: html.content,
                    footer: html.footer,
                    size: size
                },
                dataType: "html",
                success: function (html) {
                    $('body').append(html)
                    $('#' + id).on('hide.bs.modal', function () {
                        init.data.modal.id = id
                        init.data.modal.status = 'hide'
                    })
                    $('#' + id).on('show.bs.modal', function () {
                        init.data.modal.id = id
                        init.data.modal.status = 'show'
                    })
                }
            });
        }
    }
}

init.initJquery()
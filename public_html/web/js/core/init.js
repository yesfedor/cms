let init = {
    data: {
        css: {},
        js: {},
        header: {},
        footer: {},
        modal: {
            id:'',
            status:'hide'
        },
        appDefaultEl: '#app',
        appDefaultContent: '<header class="sticky-top"></header><main id="warp"></main><footer class="page-footer font-small theme-primary"></footer>'
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
        tplBaseComponents = 'wc:'
        tplBaseDirLen = tplBaseDir.length
        tplBaseDomainLen = tplBaseDomain.length
        tplBaseComponentsLen = tplBaseComponents.length

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
        if (oldUrl.substr(0, tplBaseComponentsLen) == tplBaseComponents && changed == false) {
            newUrl = init.path.js + 'components/' + oldUrl.substr(tplBaseComponentsLen)
            changed = true
        }

        // mask filename.substr(-0)
        if (type == 'css') {
            if (newUrl.substr(-4) != '.css') newUrl += '.css'
        }
        if (type == 'js') {
            if (newUrl.substr(-3) != '.js') newUrl += '.js'
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
                if ($('#app-css-' + id).is('link')) {
                    return false
                } else return true

                break;
            case 'js':
                if ($('#app-js-' + id).is('script')) {
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
    header(type='') {
        if (type == '') {
            if (config.user.auth) type = 'user'
            else type = 'default'
        }
        $('header')
            .css('display', 'none')
            .load(init.path.header + '&domain=' + window.location.hostname + '&type=' + type)
            .fadeIn()
        
        init.data.header[type] = true
    },
    footer(type='') {
        if (type == '') {
            if (config.user.auth) type = 'none'
            else type = 'default'
        }
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

                let firstload = localStorage.getItem('app-status')
                if (firstload == 'true' || config.visit == 'robot') {
                    $('body').css('display', 'block')
                }
                else {
                    $('body').css('display', 'block')
                    setTimeout(() => {
                        localStorage.setItem('app-status', 'true')
                        setTimeout(() => {
                            toastr.info('First download the longest')
                        }, 1000);
                    }, 1500);
                }
            }
        }, 100)
    },
    preload: {
        duration: 2000,
        go(duration=2000) {
            init.preload.duration = duration
            $('application').hide()
            $('common').show()
            setTimeout(() => {
                $('common').hide()
                $('application').show()  
            }, init.preload.duration);
        }
    },
    start(setting=false) {
        // test from
        let fromReload = /(\?|\&)from=([A-Za-z0-9]{0,50})/g
        let fromReloadStatus = fromReload.test(document.location.search)
        if (fromReloadStatus) document.location.href = document.location.href.replace(fromReload, '')

        // setting
        if (setting) init.setSetting(setting)

        // load default boot json
        let includePath = init.path.js + 'include/' + config.info.appname + '/' + init.path.bootFile
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
            let newModalHtml = init.createModalRender(id, html.title, html.content, html.footer, size, bgcolor)
            $('body').append(newModalHtml)
            $('#' + id).on('hide.bs.modal', function () {
                init.data.modal.id = id
                init.data.modal.status = 'hide'
            })
            $('#' + id).on('show.bs.modal', function () {
                init.data.modal.id = id
                init.data.modal.status = 'show'
            })

            userApi.checkerUserApi()
        }
    },
    createModalRender(id, title='', content='', footer='', size='', bgcolor='') {
        let html = ``
        let style = ``
        let titleContent = ``
        let footerContent = ``

        if (title == '' || title.length == 0 || title == 'false') title = ''
        if (footer == '' || footer.length == 0 || footer == 'false') footer = ''
        if (size == '' || size.length == 0 || size == 'false') size = 'large'
        if (bgcolor == '' || bgcolor.length == 0 || bgcolor == 'false') bgcolor = ''

        switch(size) {
            case 'small':
                size = 'modal-sm';
            break;
            case 'large':
                size = 'modal-lg';
            break;
            case 'full':
                size = 'modal-fluid';
            break;
            default:
                size = 'modal-lg';
            break;
        }

        if (title.length != 0) {
            titleContent = `<div class="modal-header border-bottom border-primary"><h4 class="modal-title w-100" id="` + id + `Label">` + title + `</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>`
        }
        if (footer.length != 0) {
            footerContent = `<div class="modal-footer border-primary mt-1 py-1">` + footer + `</div>`
        }


        style = `m` + id.substr(0, 2) + Math.round(Math.random() * 1e9.toString().substr(0, 9))
        html = `
            <style>.` + style + ` {background: ` + (bgcolor != false ? bgcolor : '#000000bb') + `;}</style>
            <div id="` + id + `" class="modal ` + style + ` fade" tabindex="-1" role="dialog" aria-labelledby="` + id + `Label" aria-hidden="true">
                <div class="modal-dialog ` + size + `" role="document">
                    <div class="theme-panel modal-content z-depth-0 border border-primary rounded">
                        ` + titleContent + `
                        <div class="modal-body">
                        ` + content + `
                        </div>
                        ` + footerContent + `
                    </div>
                </div>
            </div>
        `

        return html
    },
    listenTab() {
        window.addEventListener('storage', function (event) {
            // event.key - key
            // event.newValue - newValue
            // event.oldValue - oldValue
            if (event.newValue != event.oldValue) {
                switch(event.key) {
                    default:
                        return;
                    case 'themeType':
                        style.theme.change(event.newValue)
                        style.theme.initToggle()
                    break;
                }
            }
        });
    }
}

init.initJquery()
init.listenTab()
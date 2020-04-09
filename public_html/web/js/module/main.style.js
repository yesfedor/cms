var style = {
    data: {
        headerHeight: 0,
        footerHeight: 0,
        headerAndFooterHeight: 0
    },
    mainWarpSize(block='main') {
        setTimeout(() => {
            style.data.headerHeight = $('header').outerHeight()
            style.data.footerHeight = $('footer').outerHeight()
            style.data.headerAndFooterHeight = style.data.headerHeight + style.data.footerHeight
            mainWarpCss = 'min-height: calc(100vh - ' + Math.abs(style.data.headerAndFooterHeight) + 'px) !important'
            $(block).attr('style', mainWarpCss)
            style.headerTop()
        }, 100);
    },
    setHeaderAppThemeColor(hex) {
        $('#header-app-theme-color').attr('content', hex)
    },
    changeHeaderColor(data) {
        $(window).scroll(() => {
            var scroll = $(window).scrollTop()
            if(scroll < data.height) {
                $(data.block).css('background-color', data.baseColor).addClass(data.baseClass)
            } else{
                $(data.block).css('background-color', data.plusColor).removeClass(data.baseClass)
            }
        });
    },
    headerTop() {
        $('header').removeClass('sticky-top').addClass('fixed-top')
        $('#warp').css('margin-top', style.data.headerHeight+'px');
    },
    common() {
        $(document).ready(() => {
            $('common').hide()
            setTimeout(() => {
                style.mainWarpSize()
            }, 100);
        });
    },
    theme: {
        elToggle: [],
        init() {
            let themeType = localStorage.getItem('themeType')
            let themeName = localStorage.getItem('theme')
            let themeVersion = localStorage.getItem('themeVersion')

            if (themeType == null) {
                localStorage.setItem('themeType', 'light')
            }

            style.theme.change(themeType, '!!! init: themeType')
            style.theme.autoMode()
        },
        autoMode() {
            let t_light = window.matchMedia('(prefers-color-scheme: light)')
            let t_dark = window.matchMedia('(prefers-color-scheme: dark)')

            // base change
            if (t_light.matches) style.theme.change('light', '!!! autoMode: light')
            if (t_dark.matches) style.theme.change('dark', '!!! autoMode: dark')

            // onchange
            t_light.addListener((e) => {
                if (e.matches) style.theme.change('light', '!!! autoMode matches: light')
            })
            t_dark.addListener((e) => {
                if (e.matches) style.theme.change('dark', '!!! autoMode matches: dark')
            })
        },
        change(newTheme, str) {
            console.log(str)
            let newThemeName = ''
            let version = 3
            let iconLight = '<i class="theme-nav-link far fa-sun"></i>'
            let iconDark = '<i class="theme-nav-link far fa-moon"></i>'
            let icon = ''

            switch(newTheme) {
                default:
                case 'light':
                    version = config.themeVersion.light
                    localStorage.setItem('themeType', 'light')
                    newThemeName = config.info.appname
                    style.theme.changeApi('light')
                    icon = iconDark
                break;
                case 'dark':
                    version = config.themeVersion.dark
                    localStorage.setItem('themeType', 'dark')
                    newThemeName = config.info.appname + '-dark'
                    style.theme.changeApi('dark')
                    icon = iconLight
                break;
            }

            localStorage.setItem('theme', newThemeName)
            localStorage.setItem('themeVersion', version)

            $('#app-css-theme-data').attr('href', '/web/css/theme/' + newThemeName + '.css?version=' + version)

            style.theme.elToggle.forEach(el => {
                $(el).html(icon)
            })
        },
        changeApi(type) {
            $.ajax({
                type: "POST",
                url: "/api.php?_action=user/theme&v=0.1",
                data: {themeType: type},
                dataType: "json",
                success: function () {
                    console.log('theme:changeApi:True')
                }
            });
        },
        btnToggle(el='#themeToggle') {
            let iconLight = '<i class="theme-nav-link far fa-sun"></i>'
            let iconDark = '<i class="theme-nav-link far fa-moon"></i>'
            let dataTheme = localStorage.getItem('themeType')
            switch(dataTheme) {
                default:
                case 'light':
                    style.theme.change('dark')
                break;
                case 'dark':
                    style.theme.change('light')
                break;
            }
            return false
        },
        initToggle(el='#themeToggle') {
            style.theme.elToggle.push(el)
            let iconLight = '<i class="theme-nav-link far fa-sun"></i>'
            let iconDark = '<i class="theme-nav-link far fa-moon"></i>'
            let dataTheme = localStorage.getItem('themeType')
            switch(dataTheme) {
                default:
                case 'light':
                    $(el).html(iconDark)
                break;
                case 'dark':
                    $(el).html(iconLight)
                break;
            }
        }
    },
    flashing(config=false, colorFrom='#212121', colorTo=false, animationDuration=1, fixColor=false, fixDuration=0.1) {
        /*
        colorFrom: цвет мигания
        colorTo: восстановленный цвет
        animationDuration: длительность мигания в сек
        */
        if (typeof config == 'object') {
            colorFrom = config.colorFrom
            colorTo = config.colorTo || false
            animationDuration = config.animationDuration || 1
            fixColor = config.fixColor || false
            fixDuration = config.fixDuration || 0.1
        }
        let body = document.getElementsByTagName('body')[0]
        if (colorTo === false) colorTo = window.getComputedStyle(body).backgroundColor
        body.style.backgroundColor = colorFrom
        setTimeout(() => {
            body.style.backgroundColor = colorTo
            if (fixColor === true) setTimeout(() => {
                body.style.backgroundColor = ''
            }, fixDuration*1000);
        }, animationDuration * 1000);
    },
    init() {
        style.common()
        style.theme.init()
    }
}

function styleThemeToggle(id='#themeToggle') {
    style.theme.btnToggle(id)
}

style.init()
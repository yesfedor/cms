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
        init() {
            themeType = localStorage.getItem('themeType')
            themeName = localStorage.getItem('theme')
            themeVersion = localStorage.getItem('themeVersion')
            if (themeName != null) {
                $('#app-css-theme-data').attr('href', '/web/css/theme/' + themeName + '.css?version=' + themeVersion)
            }
            if (themeType == null) {
                localStorage.setItem('themeType', 'light')
            }
        },
        change(newTheme) {
            let newThemeName = ''
            let version = 2

            switch(newTheme) {
                default:
                case 'light':
                    version = config.themeVersion.light
                    localStorage.setItem('themeType', 'light')
                    newThemeName = config.info.appname
                    style.theme.changeApi('light')
                break;
                case 'dark':
                    version = config.themeVersion.dark
                    localStorage.setItem('themeType', 'dark')
                    newThemeName = config.info.appname + '-dark'
                    style.theme.changeApi('dark')
                break;
            }

            localStorage.setItem('theme', newThemeName)
            localStorage.setItem('themeVersion', version)

            $('#app-css-theme-data').attr('href', '/web/css/theme/' + newThemeName + '.css?version=' + version)
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
                    $(el).html(iconLight)
                break;
                case 'dark':
                    style.theme.change('light')
                    $(el).html(iconDark)
                break;
            }
            return false
        },
        initToggle(el='#themeToggle') {
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
    init() {
        style.common()
        style.theme.init()
    }
}

function styleThemeToggle(id='#themeToggle') {
    style.theme.btnToggle(id)
}

style.init()
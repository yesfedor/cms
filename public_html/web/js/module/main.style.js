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
            themeName = localStorage.getItem('theme')
            themeVersion = localStorage.getItem('themeVersion')
            if (themeName != null) {
                $('#app-css-theme-data').attr('href', '/web/css/theme/' + themeName + '.css?version=' + themeVersion)
            }
        },
        change(newTheme, version='51') {
            newThemeName = ''

            switch(newTheme) {
                default:
                case 'light':
                    newThemeName = config.info.appname
                    style.theme.changeApi('light')
                break;
                case 'dark':
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
        }
    },
    init() {
        style.common()
        this.theme.init()
    }
}

style.init()
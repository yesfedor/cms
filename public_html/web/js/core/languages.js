var language = {
    data: {
        apiChenge: servers.api + '/api.php?_action=lang/chenge&v=0.1',
        apiGet: servers.api + '/api.php?_action=lang/get&v=0.1',
        apiAll: servers.api + '/api.php?_action=lang/all&v=0.1',
        all_language: [],
        base_language: 'en',
        language: config.lang,
        locale: {},
        localeStatus: false,
        chenged: true
    },
    define () {
        let l = (navigator.language || navigator.systemLanguage || navigator.userLanguage || 'en').substr(0, 2).toLowerCase()
        return l
    },
    getAllLanguage() {
        $.ajax({
            type: "GET",
            url: language.data.apiAll,
            data: "data",
            dataType: "dataType",
            success: function (data) {
                language.data.all_language = data.locale
            }
        });
    },
    chenge(new_lang) {
        language.data.chenged = false
        init.preload.go(3500)

        $.ajax({
            type: "GET",
            url: language.data.apiChenge,
            data: {language: new_lang},
            dataType: "json",
            success: function (data) {
                config.lang = new_lang
                language.data.language = new_lang
                language.data.localeStatus = true
                language.data.locale = data.locale

                setTimeout(() => {
                    $('[data-lang]').each((i, el)=>{
                        $(el).attr('data-lang-success', 'false')
                    })
                    language.data.chenged = true
                }, 500);
            }
        });
    },
    render() {
        if (language.data.localeStatus == false) {
            $.ajax({
                type: "GET",
                url: language.data.apiGet,
                data: {language: language.data.language},
                dataType: "json",
                success: function (data) {
                    language.data.localeStatus = true
                    language.data.locale = data.locale
                }
            });
        }
        $('[data-lang][data-lang-success != true]').each((i, el)=>{
            let lang_str = $(el).attr('data-lang')
            $(el).attr('data-lang-success', 'true')
            if (language.data.locale[lang_str]) $(el).html(language.data.locale[lang_str])
            else $(el).html(language.data.locale['string_not_found'])
        })

        // code with dateParse include core
        if (typeof dateParse !== 'undefined') {
            dateParse.render()
        }
    },
    init() {
        define_lang = language.define()
        if (define_lang != language.data.language) {
            language.render()
        } else {
            language.render()
        }
    }
}

language.init()

$(document).ready(function () {
    $(document).bind('ajaxSuccess', function() {
        setTimeout(() => {
            language.render()
        }, 100);
    })
})

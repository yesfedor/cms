let watch = {
    data: watchData,
    content: {},
    videocdn: {
        path: 'https://videocdn.tv/api/',
        token: 'dhYHeqruV5o7oint21ggMMIUBaDE0Rm6'
    },
    els: {
        player: null,
        title: null,
        date: null,
        genre: null,
        desc_item: null,
        desc: null
    },
    initPlayer() {
        let kpid = nav.url.query('kpid')

        // Если нет идентификатора
        if (kpid == null) nav.go(nav.createLink('/main'))
        
        // Иначе подгружаем плеер
        let apiUrl = this.videocdn.path + 'short?api_token=' + this.videocdn.token + '&kinopoisk_id=' + kpid
        $.ajax({
            type: 'get',
            url: apiUrl,
            data: '',
            dataType: 'json',
            success: function (obj) {
                watch.content = obj.data[0]

                let title = watch.content.title
                let type = watch.content.type
                if (type == 'movie') type = 'фильм'
                if (type == 'serial') type = 'сериал'

                let genres = ''
                watch.data.genres.forEach((obj)=>{
                    genres = genres + '<span class="theme-link">#' + obj.genre + '</span> '
                })

                watch.els.date.textContent = watch.data.year
                //watch.els.player.setAttribute('src', watch.content.iframe_src)
                watch.els.title.textContent = type + ' ' + title
                nav.changeTitle(title + ', ' + watch.data.year)
                watch.els.genre.innerHTML = genres
                watch.els.desc_item.textContent = type + 'у'
                watch.els.desc.textContent = watch.data.description
            }
        })
    },
    initEls() {
        this.els.player = document.getElementById('watch_player')
        this.els.title = document.getElementById('watch_title')
        this.els.date = document.getElementById('watch_date')
        this.els.genre = document.getElementById('watch_genre')
        this.els.desc_item = document.getElementById('watch_desc_item')
        this.els.desc = document.getElementById('watch_desc')
    },
    authorSupport() {
        let isShow = localStorage.getItem('mediaWatchAuthorSupportMsg')
        if (isShow == null) {
            localStorage.setItem('mediaWatchAuthorSupportMsg', true)
            toastr.info('Теперь вы можете поддержать разработку сайта')
            setTimeout(() => {
                let $el = document.getElementById('mediaWatchAuthorSupportMsg')
                let event = new Event('mouseover')
                $el.dispatchEvent(event)
            }, 1000)
        }
    },
    bgImageSet() {
        if (!fn.isMobile()) {
            let bgDefault = getComputedStyle(document.documentElement).getPropertyValue('--theme-header')
            let bgScreen = bgDefault + '00'
            document.documentElement.style.setProperty('--theme-header', bgScreen)
            nav.onunload = () => {
                document.documentElement.style.setProperty('--theme-header', bgDefault)
            }
        }
    },
    init() {
        watch.data = watch.data.data

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        this.bgImageSet()
        this.initEls()
        this.initPlayer()
        this.authorSupport()
    }
}

watch.init()

watchSubscription = {
    apiPath: '/api.php?_action=media.subscription&v=0.1',
    subscribe(el, kpid, api=true) {
        // подписать
        el.setAttribute('data-status', 'unsubscribe')
        el.classList.remove('btn-outline-red')
        el.classList.add('btn-outline-mdb-color')
        el.textContent = 'Отписаться'
        if (api) this.api('subscribe', kpid)

        return false
    },
    unsubscribe(el, kpid, api=true) {
        // отписать
        el.setAttribute('data-status', 'subscribe')
        el.classList.remove('btn-outline-mdb-color')
        el.classList.add('btn-outline-red')
        el.textContent = 'Подписаться'
        if (api) this.api('unsubscribe', kpid)
        
        return false
    },
    toggle(el) {
        let kpid = nav.url.query('kpid')
        let status = el.getAttribute('data-status')
        
        if (status == 'subscribe') return this.subscribe(el, kpid)
        if (status == 'unsubscribe') return this.unsubscribe(el, kpid)
    },
    init() {
        let el = document.getElementById('watch_subs')
        let kpid = nav.url.query('kpid')
        let status = el.getAttribute('data-status')
        
        if (status == 'subscribe') return this.subscribe(el, kpid, false)
        if (status == 'unsubscribe') return this.unsubscribe(el, kpid, false)
    },
    api(act, kpid) {
        $.ajax({
            type: "POST",
            url: this.apiPath,
            data: {act: act, kpid: kpid},
            dataType: "json",
            success: function (obj) {
                
            }
        })
    }
}
watchSubscription.init()
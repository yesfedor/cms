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
                watch.els.player.setAttribute('src', watch.content.iframe_src)
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
    init() {
        watch.data = watch.data.data

        console.log(watch.data)

        this.initEls()
        this.initPlayer()
    }
}

watch.init()
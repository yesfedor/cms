class AppMediaCard extends HTMLElement {
    constructor() {
        super()
    }
    connectedCallback() {
        this.AppMediaCardNew(this);
    }
    AppMediaCardNew(el) {
        let type = el.getAttribute('data-type')
        let title = el.getAttribute('data-title')
        let kpid = el.getAttribute('data-kpid')
        
        el.setAttribute('onclick', 'return mediaIntro.scene.render(this);')
        el.setAttribute('href', kpid)
        el.classList = 'col-12 text-center mb-2 py-2'

        let html = `
            <h4 class="my-0">` + title + `</h4>
        `;
        el.innerHTML = html;
    }
}
customElements.define('media-card', AppMediaCard);

let mediaIntro = {
    el: {
        test_search: false,
        kpid_search: false,
        mediaNewMovie: false,
        mediaNewSerial: false,
        testSearchResultBox: false
    },
    api: {
        path: 'https://videocdn.tv/api/',
        token: 'dhYHeqruV5o7oint21ggMMIUBaDE0Rm6'
    },
    data: {
        movie: {},
        serial: {},
        search: {}
    },
    init() {
        mediaIntro.el.test_search = document.getElementById('test_search')
        mediaIntro.el.kpid_search = document.getElementById('kpid_search')
        mediaIntro.el.mediaNewMovie = document.getElementById('mediaNewMovie')
        mediaIntro.el.mediaNewSerial = document.getElementById('mediaNewSerial')
        mediaIntro.el.testSearchResultBox = document.getElementById('testSearchResultBox')

        mediaIntro.getData('movies', 1)
        mediaIntro.getData('tv-series', 1)
        mediaIntro.kpid_search()
        mediaIntro.test_search()
    },
    kpid_search() {
        let kpid = nav.url.query('kpid')
        if (kpid != null) {
            $('#kpid_search').attr('data-kpid', kpid)
            mediaIntro.scene.render(mediaIntro.el.kpid_search)
        }
        $('#kpid_search').on('input', () => {
            let kpids = $('#kpid_search').val()
            $('#kpid_search').attr('data-kpid', kpids)
            mediaIntro.scene.render(mediaIntro.el.kpid_search)
        })
    },
    test_search() {
        $('#test_search').on('input', () => {
            let kpids = $('#test_search').val()
            if (kpids !== '') {
                mediaIntro.getData('short', 1, {title: kpids})
                $('#testSearchResult').fadeIn()
            } else $('#testSearchResult').fadeOut()
        })
    },
    movie: {
        page: 1,
        prev() {
            if (mediaIntro.movie.page > 1) mediaIntro.getData('movies', mediaIntro.movie.page - 1)
            return false
        },
        next() {
            if (mediaIntro.movie.page < 50) mediaIntro.getData('movies', mediaIntro.movie.page + 1)
            return false
        }
    },
    serial: {
        page: 1,
        prev() {
            if (mediaIntro.serial.page > 1) mediaIntro.getData('tv-series', mediaIntro.serial.page - 1)
            return false;
        },
        next() {
            if (mediaIntro.serial.page < 50) mediaIntro.getData('tv-series', mediaIntro.serial.page + 1)
            return false;   
        }
    },
    search: {
        page: 1,
        prev() {
            if (mediaIntro.search.page > 1) mediaIntro.getData('short', mediaIntro.search.page - 1, {title: $('#test_search').val()})
            return false;
        },
        next() {
            if (mediaIntro.search.page < 50) mediaIntro.getData('short', mediaIntro.search.page + 1, {title: $('#test_search').val()})
            return false;   
        }
    },
    scene: {
        data: {
            toggle: 'hide'
        },
        toggle(status=false) {
            if (status == 'hide' && mediaIntro.scene.data.toggle != 'hide') {
                $('#scene_box').fadeOut()
                return;
            }
            if (status == 'show' && mediaIntro.scene.data.toggle != 'show') {
                $('#scene_box').fadeIn()
                return;
            }
            if (mediaIntro.scene.data.toggle == 'hide') {
                mediaIntro.scene.data.toggle = 'show'
                $('#scene_box').fadeIn()
                return;
            }
            if (mediaIntro.scene.data.toggle == 'show') {
                mediaIntro.scene.data.toggle = 'hide'
                $('#scene_box').fadeOut()
                return;
            }
        },
        render(el) {
            let kpid = el.getAttribute('data-kpid')
            $.ajax({
                type: "GET",
                url: mediaIntro.api.path + 'short',
                data: {api_token: mediaIntro.api.token, kinopoisk_id: kpid},
                dataType: "json",
                success: function (data) {
                    nav.changeUrl('/media?kpid=' + kpid, 'go')
                    $('#scene_player').attr('src', data.data[0].iframe_src)
                    if (data.data[0].type == 'movie') $('#scene_type').html('Фильм')
                    if (data.data[0].type == 'serial') $('#scene_type').html('Сериал')
                    $('#scene_title').html(data.data[0].title)
                    $('#scene_year').html(data.data[0].year)
                }
            });

            mediaIntro.scene.toggle('show')
            let aScroll = document.createElement('a')
            aScroll.href = '#warp'
            nav.scroll(aScroll)
            return false
        }
    },
    getData(mediaType='movies', page=1, plusData={}) {
        $.ajax({
            type: "GET",
            url: mediaIntro.api.path + mediaType,
            data: Object.assign({api_token: mediaIntro.api.token, page: page, limit: 6, ordering: 'created', direction: 'desc'}, plusData),
            dataType: "json",
            success: function (data) {
                switch(mediaType) {
                    case 'movies':
                        mediaIntro.el.mediaNewMovie.innerHTML = ''
                        mediaIntro.movie.page = page
                        mediaIntro.data.movie = data
                        $('#mediaNewMoviePage').html(page)
                        mediaIntro.data.movie.data.forEach((data) => {
                            let newNode = document.createElement('media-card')
                            newNode.setAttribute('data-type', 'movie')
                            newNode.setAttribute('data-id', data.id)
                            newNode.setAttribute('data-title', data.ru_title)
                            newNode.setAttribute('data-kpid', data.kinopoisk_id)
                            mediaIntro.el.mediaNewMovie.appendChild(newNode)
                        })
                    break;
                    case 'tv-series':
                        mediaIntro.el.mediaNewSerial.innerHTML = ''
                        mediaIntro.serial.page = page
                        mediaIntro.data.serial = data
                        $('#mediaNewSerialPage').html(page)
                        mediaIntro.data.serial.data.forEach((data) => {
                            let newNode = document.createElement('media-card')
                            newNode.setAttribute('data-type', 'serial')
                            newNode.setAttribute('data-title', data.ru_title)
                            newNode.setAttribute('data-kpid', data.kinopoisk_id)
                            mediaIntro.el.mediaNewSerial.appendChild(newNode)
                        })
                    break;
                    case 'short':
                        mediaIntro.el.testSearchResultBox.innerHTML = ''
                        mediaIntro.search.page = page
                        mediaIntro.data.search = data
                        $('#testSearchResultPage').html(page)
                        mediaIntro.data.search.data.forEach((data) => {
                            if (data.kp_id != null) {
                                let newNode = document.createElement('media-card')
                                newNode.setAttribute('data-title', data.title)
                                newNode.setAttribute('data-kpid', data.kp_id)
                                mediaIntro.el.testSearchResultBox.appendChild(newNode)
                            }
                        })
                    break;
                }
            }
        })
    }
}
class AppMediaCardWithPoster extends HTMLElement {
    constructor() {
        super()
    }
    connectedCallback() {
        this.AppMediaRender(this)
    }
    AppMediaRender(el) {
        let fill = el.getAttribute('data-fill')
        let fillClass = ''
            if (fill == 'default') {
                el.className = 'col-12 col-md-6 col-lg-4 col-xl-3 mb-3'
                fillClass = 'card-poster_view-default'
            }
            if (fill == 'max-content') {
                el.className = 'col-12 mb-3'
                fillClass = 'card-poster_view-max-content'
            }
        
        let type = el.getAttribute('data-type')
        if (type == 'movie') type = 'Фильм'
        if (type == 'serial') type = 'Сериал'
        let title = el.getAttribute('data-title')
        let year = el.getAttribute('data-year')
        let kpid = el.getAttribute('data-kpid')
        let html = `
            <div class="row justify-content-center align-items-center card-poster px-1 animated fadeIn ${fillClass}" style="background-image: url(https://kinopoiskapiunofficial.tech/images/posters/kp/${kpid}.jpg);">
                <div class="col-12 text-center">
                    <h5 class="white-text my-2">${type}</h5>
                    <h5 class="white-text my-2">${title}</h5>
                    <h6 class="white-text my-2">${year}</h6>
                </div>
            </div>
        `

        if (fill == 'default') el.className = 'col-12 col-md-6 col-lg-4 col-xl-3 mb-3'
        if (fill == 'max-content') el.className = 'col-12 mb-3'
        el.innerHTML = html

        el.onclick = () => {
            let link = nav.createLink('/watch?kpid=' + kpid)
            nav.go(link)
            return false
        }
    }
}
customElements.define('media-card', AppMediaCardWithPoster);

function appMediaRender(warpId, data, opt = {fill: 'default', type: false}) {
    let fill = opt.fill
    let type = opt.type
    mediaWrapper = document.getElementById(warpId)
    data.forEach((obj)=>{
        if (obj !== null) {
            let guess = obj.year
            if (guess.length == '4') guessType = 'movie'
            if (guess.length > 4) guessType = 'serial'

            let el = document.createElement('media-card')
            el.setAttribute('data-fill', (fill ? fill : 'default'))
            el.setAttribute('data-type', (type ? type : guessType))
            el.setAttribute('data-title', obj.nameRu)
            el.setAttribute('data-year', obj.year)
            el.setAttribute('data-kpid', obj.filmId)
            mediaWrapper.append(el)
        }   
    })
}
class AppMediaCardWithPoster extends HTMLElement {
    constructor() {
        super()
    }
    connectedCallback() {
        this.AppMediaRender(this)
    }
    AppMediaRender(el) {
        let fill = el.getAttribute('data-fill')
        let type = el.getAttribute('data-type')
        if (type == 'movie') type = 'Фильм'
        if (type == 'serial') type = 'Сериал'
        let title = el.getAttribute('data-title')
        let year = el.getAttribute('data-year')
        let kpid = el.getAttribute('data-kpid')
        let html = `
            <div class="row justify-content-center align-items-center card-poster" style="background-image: url(https://kinopoiskapiunofficial.tech/images/posters/kp/${kpid}.jpg);">
                <div class="col-12 text-center">
                    <h5 class="white-text">${type}</h5>
                    <hr class="w-25 card-border">
                    <h5 class="white-text">${title}</h5>
                    <h6 class="white-text">${year}</h6>
                    <a onclick="return nav.go(this);" href="/watch?kpid=${kpid}" class="btn btn-outline-white btn-rounded mt-5">Смотреть</a>
                </div>
            </div>
        `

        if (fill == 'default') el.className = 'col-12 col-md-6 col-lg-4 col-xl-3 mb-3'
        if (fill == 'max-content') el.className = 'col-12 mb-3'
        el.innerHTML = html
    }
}
customElements.define('media-card', AppMediaCardWithPoster);
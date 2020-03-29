class AppBlogPost extends HTMLElement {
    constructor() {
        super()
    }
    connectedCallback() {
        this.AppFeedPostNew(this)
    }
    AppBlogPostRender(el) {
        let id = el.getAttribute('post-id')
        let url = el.getAttribute('url')
        let uid = el.getAttribute('uid')
        let category = el.getAttribute('category')
        let date_create = el.getAttribute('date_create')
        let title = el.getAttribute('title')
        let poster_url = el.getAttribute('poster_url')
        let preview = el.getAttribute('preview')
        
        let action = (url ? url : uid)

        let html = `
<div class="col-12 col-lg-4">
    <div class="card">
        <!-- Card image -->
        <div class="view overlay">
            <img class="card-img-top" src="${poster_url}" alt="Post Card Poster">
            <a><div class="mask rgba-white-slight"></div></a>
        </div>
        <!-- Button -->
        <a onclick="return nav.go(this);" href="/blog/post/${action}" class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3">
            <i class="fas fa-chevron-right pl-1"></i>
        </a>
        <!-- Card content -->
        <div class="card-body">
            <!-- Title -->
            <h4 class="card-title">${title}</h4>
            <hr>
            <!-- Text -->
            <p class="card-text">${preview}</p>
        </div>
        <!-- Card footer -->
        <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
            <ul class="list-unstyled list-inline font-small">
                <li class="list-inline-item pr-2 white-text">
                    <i class="far fa-clock pr-1"></i>
                    ${date_create}
                </li>
            </ul>
        </div>
    </div>
        `
        el.innerHTML = html
    }
}
customElements.define('blog-post', AppBlogPost);
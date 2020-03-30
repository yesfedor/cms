class AppBlogPost extends HTMLElement {
    constructor() {
        super()
    }
    connectedCallback() {
        this.AppBlogPostRender(this)
        blogFirstPost = true
    }
    AppBlogPostRender(el) {
        if (blogFirstPost) el.classList.add('col-12', 'col-lg-6', 'mb-3')
        else el.classList.add('col-12', 'mb-5')

        let id = el.getAttribute('post-id')
        let url = el.getAttribute('url')
        let uid = el.getAttribute('uid')
        let category = el.getAttribute('category')
        let date_create = el.getAttribute('date_create')
        let title = el.getAttribute('title')
        let poster_url = el.getAttribute('poster_url') || 'https://iny.su/web/file/ogimg/main/welcome.png'
        let preview = el.getAttribute('preview')
        let action = (url ? url : uid)
        let categoryObj = blogBoard.getCategory(category)
        let categoryTitle = ''
        if (typeof date_create == 'string') date_create = date_create.substr(0, 9)
        if (typeof categoryObj == 'object') categoryTitle = categoryObj.title 

        let html = `
            <div onclick="return nav.go(nav.createLink('/blog/post/${action}'));" class="card theme-panel">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="${poster_url}" alt="Post Card Poster">
                    <a><div class="mask rgba-white-slight"></div></a>
                </div>
                <!-- Card content -->
                <div class="card-body">
                    <!-- Title -->
                    <a onclick="return nav.go(this);" href="/blog/post/${action}"><h4 class="card-title theme-title">${title}</h4></a>
                    <hr>
                    <!-- Text -->
                    <p class="card-text theme-text">${preview}</p>
                </div>
                <!-- Card footer -->
                <div class="rounded-bottom theme-header text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 theme-nav-link">
                            <i class="far fa-clock pr-1"></i>
                            ${date_create}
                        </li>
                        <li onclick="nav.go(nav.createLink('/blog?category=${category}'));" class="list-inline-item pr-2 theme-nav-link" style="cursor: pointer;">
                            <i class="far fa-arrow-alt-circle-right pr-1"></i>
                            ${categoryTitle}
                        </li>
                    </ul>
                </div>
            </div>
        `

        el.innerHTML = html
    }
}
customElements.define('blog-post', AppBlogPost);
class AppFeedPost extends HTMLElement {
    constructor() {
        super()
    }
    connectedCallback() {
        this.AppFeedPostNew(this);
    }
    AppFeedPostNew(el) {
        let wid = el.getAttribute('data-id');
        let title = AppFeedPostData[wid]['title'];
        let text = AppFeedPostData[wid]['text'];
        let poster781x521 = AppFeedPostData[wid]['poster781x521'];
        let goLink = AppFeedPostData[wid]['go-link'];
        let html = `
        <div class="col-10 offset-1 rounded mt-0 mb-3 px-0">
            <div class="card theme-panel">
                <div class="view overlay">
                    <img class="card-img-top" src="`+poster781x521+`" alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>
                <div class="card-body border-top border-primary">
                    <h4 class="card-title">`+title+`</h4>
                    <p class="card-text">`+text+`</p>
                    ` + (goLink ? `<a href="https://go.iny.su/`+goLink+`" onclick="return nav.go(this);" data-lang="text_open" type="button" class="btn btn-rounded btn-outline-primary z-depth-0"></a>`:``) + `
                </div>
            </div>
        </div>
        `;
        el.innerHTML = html;
    }
}
customElements.define('feed-post', AppFeedPost);
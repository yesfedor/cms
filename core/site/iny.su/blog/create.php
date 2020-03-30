<style>
.pre {
    white-space: pre-wrap;
}
</style>
<div class="container my-3 my-lg-5">
    <div class="row">
        <div class="col-10 offset-1 my-3">
            <h1 class="h1 font-weight-bold my-3 theme-title">Добавить пост</h1>
        </div>
        <div class="col-10 offset-1 my-3">
            <div class="row">
                <div class="col-12 mb-3">
                    <h2 id="blog-title" class="d-block theme-title mb-3 pre" contenteditable>Введите заголовок</h2>
                    <h4 id="blog-preview" class="d-block theme-text mb-3 pre" contenteditable>Короткое описание</h4>
                </div>
                <div id="blog-wrapper" class="col-12 mb-3 pre"></div>
            </div>
        </div>
        <div class="col-10 offset-1 text-center my-3">
            <a class="btn btn-outline-danger btn-rounded px-3" onclick="return nav.go(this);" href="/blog">Отмена</a>
            <button class="btn btn-outline-primary btn-rounded px-3" onclick="blogCreatePost.publish();">Опубликовать</button>
            <div class="dropdown d-inline-block">
                <!--Trigger-->
                <button class="btn btn-outline-primary btn-rounded dropdown-toggle" type="button" id="dropdownCategoriesToggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span id="dropdownCategoriesToggleCurrent" class="theme-title">Категория</span>
                </button>
                <!--Menu-->
                <div id="dropdownCategoriesToggleMenu" class="dropdown-menu dropdown-primary theme-panel"></div>
            </div>
        </div>
    </div>
</div>

<script>
init.js.add('blogBoard', 'module/blogBoard.js', 22)

blogCreatePost = {
    data: {
        url: '',
        uid: config.user.uid,
        category: 1,
        title: '',
        content: '',
        poster_url: '',
        preview: '',
        date_create: ''
    },
    contentCloud: {},
    init() {
        blogCreatePost.categoryRender()
        blogCreatePost.categoryChange(1)
    },
    categoryRender() {
        let categories = blogBoard.getCategories()
        let toggleHTML = ''
        categories.forEach(item => {
            if (item.category != 0) {
                let category = item.category
                let title = item.title
                toggleHTML = toggleHTML + `<a onclick="return blogCreatePost.categoryChange(${category});" class="dropdown-item theme-text" href="#category">${title}</a>`
            }
        })
        $('#dropdownCategoriesToggleMenu').html(toggleHTML)
    },
    categoryChange(category) {
        let categoryObj = blogBoard.getCategory(category)
        let categoryTitle = categoryObj.title
        blogCreatePost.data.category = category
        $('#dropdownCategoriesToggleCurrent').html(categoryTitle)
        return false
    },
    publish() {

    }
}
blogCreatePost.init()
</script>
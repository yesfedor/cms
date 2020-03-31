<style>
.pre {
    white-space: pre-wrap;
}
.click-large:before {
  content: '';
  position: absolute;
  display: block;
  top: -15px;
  left: -15px;
  right: -15px;
  bottom: -15px;
  cursor: pointer;
}
</style>
<div class="container my-3 my-lg-5">
    <div class="row">
        <div class="col-10 offset-1 my-3">
            <h1 class="h1 font-weight-bold my-3 theme-title">Добавить пост</h1>
        </div>
        <div class="col-10 offset-1 my-3">
            <div class="row">
                <div class="col-12">
                    <h2 id="blog-title" class="d-block theme-title mb-3 pre" contenteditable>Введите заголовок</h2>
                    <h4 id="blog-preview" class="d-block theme-text mb-3 pre" contenteditable>Короткое описание</h4>
                    <h4 id="blog-url" class="d-block theme-text mb-3 pre" contenteditable>https://iny.su/blog/post/URL</h4>
                    <h4 id="blog-poster_url" class="d-block theme-text mb-3 pre" contenteditable>https://iny.su/poster_url.png</h4>
                </div>
                <div class="col-12">
                    <hr class="w-100 my-3">
                </div>
                <div id="blog-wrapper" class="col-12 pre"></div>
                <div class="col-12">
                    <hr class="w-100 my-3">
                </div>
            </div>
        </div>
        <div class="col-10 offset-1 text-center">
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
    <div class="row fixed-bottom theme-panel py-3">
        <div id="controlElement-main" class="col-10 offset-1 text-center my-3" style="display:block;">
            <button onclick="blogCreatePost.controlElement('h2');" class="btn btn-outline-primary px-3">H1</button>
            <button onclick="blogCreatePost.controlElement('h4');" class="btn btn-outline-primary px-3">H2</button>
            <button onclick="blogCreatePost.controlElement('h5');" class="btn btn-outline-primary px-3">H3</button>
            <button onclick="blogCreatePost.controlElement('hr', false);" class="btn btn-outline-primary px-3">LINE</button>
        </div>
        <div id="controlElement-element" class="col-10 offset-1 text-center my-3" style="display:none;">
            controlElement-element
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
    contentCloud: [],
    api: {
        path: '/api.php?_action=blog/create&v=0.1'
    },
    init() {
        blogCreatePost.categoryRender()
        blogCreatePost.categoryChange(1)
    },
    deleteElement(el) {
        let el_id = el.getAttribute('data-id')
        blogCreatePost.contentCloud.splice(el_id, 1)
        $(el).remove()
    },
    controlElement(type, fucusBool=true) {
        let _id = blogCreatePost.contentCloud.length
        let wrapper = '#blog-wrapper'
        let objElement = {
            _id: _id,
            $el: document.createElement(type)
        }

        // objElement.$el.setAttribute('id', 'controlElement' + _id)
        objElement.$el.setAttribute('placeholder', 'true')
        objElement.$el.setAttribute('contenteditable', 'true')

        switch(type) {
            case 'h2':
            case 'h4':
            case 'h5':
                objElement.$el.setAttribute('class', 'theme-text my-3')
                break;
            case 'hr':
                objElement.$el.setAttribute('class', 'w-100 my-3 click-large')
                break;
        }
        
        objElement.$el.setAttribute('data-id', _id)
        objElement.$el.oninput = (data) => {
            let el = data.srcElement
            if (data.srcElement.innerHTML == '') {
                blogCreatePost.deleteElement(el)
            }
        }
        objElement.$el.onfocus = (data) => {
            let el = data.srcElement
            $('#controlElement-main').hide()
            $('#controlElement-element').show()
            if (el.tagName == 'HR') blogCreatePost.deleteElement(el)
        }
        objElement.$el.onblur = (data) => {
            let el = data.srcElement
            $('#controlElement-element').hide()
            $('#controlElement-main').show()
        }

        $(wrapper).append(objElement.$el)
        blogCreatePost.contentCloud.push(objElement)

        if (fucusBool) objElement.$el.focus()
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
    toCollect() {
        let tplUrl = `https://${config.domain}/blog/post/`
        let tplUrlLen = tplUrl.length
        let dataUrl = $('#blog-url').html()
        if (tplUrl == dataUrl.substr(0, tplUrlLen)) blogCreatePost.data.url = $('#blog-url').html()
        else blogCreatePost.data.url = tplUrl + $('#blog-url').html()

        blogCreatePost.data.title = $('#blog-title').html() || 'Введите заголовок'
        blogCreatePost.data.preview = $('#blog-preview').html() || 'Короткое описание'
        blogCreatePost.data.poster_url = $('#blog-poster_url').html() || '/web/file/ogimg/main/blog.png'
    },
    publish() {
        blogCreatePost.toCollect()
        $.ajax({
            type: "POST",
            url: blogCreatePost.api.path,
            data: blogCreatePost.data,
            dataType: "json",
            success: function (data) {
                toastr.info('Publishing success')
            }
        });
    }
}
blogCreatePost.init()
</script>
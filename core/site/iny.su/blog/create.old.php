<style>
.pre {
    white-space: pre-wrap;
}
.click-large:before {
    display: block;
    content: '';
    cursor: pointer;
    padding: 0,5em;
}
</style>
<div class="container my-3 my-lg-5">
    <div class="row">
        <div class="col-10 offset-1 my-3">
            <div class="row">
                <div class="col-12">
                    <h2 id="blog-title" class="d-block theme-title mb-3 pre" contenteditable>Введите заголовок</h2>
                    <h4 id="blog-preview" class="d-block theme-text mb-3 pre" contenteditable>Короткое описание</h4>
                    <h4 id="blog-url" class="d-block theme-text mb-3 pre" contenteditable>https://iny.su/blog/post/URL</h4>
                    <h4 id="blog-poster_url" class="d-block theme-text mb-3 pre" contenteditable>https://iny.su/poster_url.png</h4>
                </div>
                <div id="blog-wrapper" class="col-12 pre"><div id="defaultFocusEl" class="d-none"></div></div>
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
            <button onclick="blogCreatePost.controlAttribute('left');" class="btn btn-outline-primary px-3">Left</button>
            <button onclick="blogCreatePost.controlAttribute('center');" class="btn btn-outline-primary px-3">Center</button>
            <button onclick="blogCreatePost.controlAttribute('right');" class="btn btn-outline-primary px-3">Right</button>
            <button onclick="blogCreatePost.controlDelete();" class="btn btn-outline-danger px-3">Delete</button>
        </div>
    </div>
</div>

<script>
init.js.add('blogBoard', 'module/blogBoard.js', 22)

blogCreatePost = {
    defaultFocusEl: document.getElementById('defaultFocusEl'),
    lastFocusEl: false,
    data: {
        url: '',
        uid: config.user.uid,
        category: 1,
        title: '',
        content: [],
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
        blogCreatePost.lastFocusEl = false
    },
    controlDelete() {
        let el = blogCreatePost.lastFocusEl
        let el_id = el.getAttribute('data-id')
        let data = blogCreatePost.contentCloud.find(item => item._id == el_id)
        blogCreatePost.deleteElement(data.$el)
    },
    controlAttribute(attribute) {
        let el = blogCreatePost.lastFocusEl
        let el_id = el.getAttribute('data-id')
        let data = blogCreatePost.contentCloud.find(item => item._id == el_id)
        switch(attribute) {
            case 'left':
                data.$el.classList.remove('text-center', 'text-right')
                data.$el.classList.add('text-left')
                
                data.attribute = 'left'
                break;
            case 'center':
                data.$el.classList.remove('text-left', 'text-right')
                data.$el.classList.add('text-center')
                
                data.attribute = 'center'
                break;
            case 'right':
                data.$el.classList.remove('text-center', 'text-left')
                data.$el.classList.add('text-right')
                
                data.attribute = 'right'
                break;
        }
    },
    controlElement(type, fucusBool=true) {
        let _id = blogCreatePost.contentCloud.length
        let wrapper = '#blog-wrapper'
        let objElement = {
            _id: _id,
            $el: document.createElement(type),
            type: type,
            attribute: 'left'
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
                objElement.$el.setAttribute('class', 'w-100 py-1 my-3 click-large')
                break;
        }
        
        objElement.$el.setAttribute('data-id', _id)
        
        objElement.$el.onfocus = (data) => {
            let el = data.srcElement
            $('#controlElement-main').hide()
            $('#controlElement-element').show()
            blogCreatePost.lastFocusEl = el

        }
        objElement.$el.onblur = (data) => {
            let el = data.srcElement
            setTimeout(() => {
                $('#controlElement-element').hide()
                $('#controlElement-main').show()
            }, 100)   
        }

        // append
        if (blogCreatePost.lastFocusEl == false) $(wrapper).append(objElement.$el)
        else blogCreatePost.lastFocusEl.insertAdjacentElement('afterEnd', objElement.$el)

        // add cloud
        blogCreatePost.contentCloud.push(objElement)
        // auto focus
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

        blogCreatePost.contentCloud.forEach(item => {
            let obj = {
                _id: item._id,
                type: item.type,
                attribute: item.attribute
            }
            blogCreatePost.data.content.push(obj)
        })
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
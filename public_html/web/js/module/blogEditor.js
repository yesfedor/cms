let blogEditor = {
    totalId: 0,
    apiPath: '/api.php?_action=blog/create&v=0.1',
    contentWrapper: document.getElementById('#blogEditorWrapper'),
    defaultFocus: document.getElementById('#blogEditorDefaultFocus'),
    lastFocus: false,
    sendData: {
        url: '',
        uid: config.user.uid,
        category: 1,
        title: '',
        content: [],
        poster_url: '',
        preview: '',
        date_create: ''
    },
    contentData: [],
    init() {
        this.categoryInit()
        this.defaultFieldsInit()
    },
    allowEl() {
        return ['h2', 'h4', 'h5', 'hr']
    },
    allowAttr(type) {
        let obj = [];
        switch(type) {
            case 'h2': case 'h4': case 'h5':
                obj = ['left', 'center', 'right', 'b']
                break;
            case 'hr':
                obj = []
                break;
        }
        return obj
    },
    btnRemoveEl() {
        let el = this.lastFocus
        let el_id = el.getAttribute('data-id')
        let data = this.contentData.find(item => item._id == el_id)
        this.removeEl(data.$el)
    },
    removeEl(el) {
        let el_id = el.getAttribute('data-id')
        $(el).remove()
        this.contentData[el_id] = false
        this.lastFocus = false
    },
    editEl() {
        let el = this.lastFocus
    },
    addEl(tag="", focus=false) {
        tag = tag.toLowerCase()
        if (!this.isAllow(tag)) return false

        let wrapper = '#blogEditorWrapper'

        let _id = this.totalId
        this.totalId++

        let prop = {
            _id: _id,
            $el: document.createElement(tag),
            type: tag,
            align: 'left',
            b: false
        }

        switch(tag) {
            case 'h2': case 'h4': case 'h5':
                prop.$el.classList.add('theme-text', 'my-3', 'mark-pre')
                break;
            case 'hr':
                prop.$el.classList.add('w-100', 'py-1', 'my-3', 'extension-block')
                break;
        }

        prop.$el.setAttribute('data-id', _id)
        prop.$el.setAttribute('contenteditable', 'true')
        
        prop.$el.onkeydown = (data) => {
            let key = data.keyCode
            let el = data.srcElement
            if((key == 8 || key == 46) && el.innerHTML == '') blogEditor.btnRemoveEl()
        }
        prop.$el.onfocus = (data) => {
            let el = data.srcElement
            $('#blogEditorActionMain').hide()
            $('#blogEditorActionElement').show()
            this.lastFocus = el

        }
        prop.$el.onblur = (data) => {
            let el = data.srcElement
            setTimeout(() => {
                $('#blogEditorActionElement').hide()
                $('#blogEditorActionMain').show()
            }, 100)
        }

        if (this.lastFocus == false) $(wrapper).append(prop.$el)
        else this.lastFocus.insertAdjacentElement('afterEnd', prop.$el)

        this.contentData[_id] = prop

        if (focus) prop.$el.focus()
    },
    isAllow(tagName, type=false) {
        let allowEl = this.allowEl()
        tagName = tagName.toLowerCase()
        if (allowEl.includes(tagName)) {
            if (type) {
                let allowAttr = this.allowAttr(tagName)
                if (allowAttr.includes(type)) return true
                else return false
            } else return true
        } else return false
    },
    defaultFieldsInit() {
        let defaultFieldsText = {
            title: 'Хотите сделать мир лучше?',
            preview: 'Подарите ему хороший текст'
        }

        let blogEditorTitle = document.getElementById('blogEditorTitle')
        let blogEditorPreview = document.getElementById('blogEditorPreview')

        blogEditorTitle.innerHTML = defaultFieldsText.title
        blogEditorTitle.classList.add('text-muted')
        blogEditorPreview.innerHTML = defaultFieldsText.preview
        blogEditorPreview.classList.add('text-muted')
        
        blogEditorTitle.oninput = blogEditorTitle.onblur = (data) => {
            let el = data.srcElement
            if (el.innerHTML == defaultFieldsText.title || el.innerHTML == '') {
                el.innerHTML = defaultFieldsText.title
                el.classList.remove('theme-title')
                el.classList.add('text-muted')
            } else {
                el.classList.remove('text-muted')
                el.classList.add('theme-title')
            }
        }
        blogEditorPreview.oninput = blogEditorPreview.onblur = (data) => {
            let el = data.srcElement
            if (el.innerHTML == defaultFieldsText.preview || el.innerHTML == '') {
                el.innerHTML = defaultFieldsText.preview
                el.classList.remove('theme-title')
                el.classList.add('text-muted')
            } else {
                el.classList.remove('text-muted')
                el.classList.add('theme-title')
            }
        }
        blogEditorTitle.onfocus = (data) => {
            let el = data.srcElement
            if (el.innerHTML == defaultFieldsText.title) el.innerHTML = ''
        }
        blogEditorPreview.onfocus = (data) => {
            let el = data.srcElement
            if (el.innerHTML == defaultFieldsText.preview) el.innerHTML = ''
        }

    },
    categoryInit() {
        let categories = blogBoard.getCategories()
        let toggleHTML = ''
        categories.forEach(item => {
            if (item.category != 0) {
                let category = item.category
                let title = item.title
                toggleHTML = toggleHTML + `<a onclick="return blogEditor.categoryChange(${category});" class="dropdown-item theme-text" href="#category">${title}</a>`
            }
        })
        $('#blogEditorCategoriesMenu').html(toggleHTML)
    },
    categoryChange(category) {
        let categoryObj = blogBoard.getCategory(category)
        let categoryTitle = categoryObj.title
        blogEditor.sendData.category = category
        $('#blogEditorCategoriesToggle').html(categoryTitle)
        return false
    },
    publish() {
        console.log('qwe')
    }
}
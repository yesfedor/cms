let blogBoard = {
    init() {
        blogBoard.activate()
        blogBoard.blogNavbar()
        blogBoard.categoriesToggle()
        blogBoard.render(blogBoardPostsData)
    },
    activate() {
        if (nav.url.query('category') === null) blogFirstPost = false
        else blogFirstPost = true

        nav.onunload = () => {
            blogFirstPost = false
            blogBoardPostsData = false
            delete blogBoardPostsData
        }
    },
    blogNavbar() {
        let blogNavbarCurrent = nav.url.query('category')
        if (blogNavbarCurrent == "1") {
            $('#blogNavbarAll').addClass('text-muted')
            $('#blogNavbarImplementation').addClass('h4 theme-title')
        } else {
            $('#blogNavbarAll').addClass('h4 theme-title')
            $('#blogNavbarImplementation').addClass('text-muted')
        }
    },
    getCategories() {
        return [
            {
                category: 0,
                title: 'Все записи'
            },
            {
                category: 1,
                title: 'В реализации'
            },
            {
                category: 2,
                title: 'Команда'
            },
            {
                category: 3,
                title: 'Разработка'
            }
        ]
    },
    getCategory(categoryId) {
        let arr = blogBoard.getCategories(),
            obj = arr.find(item => item.category == categoryId)
        return obj
    },
    categoriesToggle() {
        let blogNavbarCurrent = nav.url.query('category') || 0
            blogNavbarCurrent = parseInt(blogNavbarCurrent) || 0
        let categories = blogBoard.getCategories()
        let toggleHTML = ''
        categories.forEach((item) => {
            let category = item.category
            let title = item.title
            let categoryLink = ''
            if (category != 0) categoryLink = `/blog?category=${category}`
            else categoryLink = `/blog`
            if (blogNavbarCurrent == category) {
                $('#dropdownCategoriesToggleCurrent').html(title)
                toggleHTML = toggleHTML + `<a onclick="return nav.go(this);" class="dropdown-item white font-weight-bold active" href="${categoryLink}">${title}</a>`
            }
            else {
               toggleHTML = toggleHTML + `<a onclick="return nav.go(this);" class="dropdown-item theme-text" href="${categoryLink}">${title}</a>`
            }
        })
        $('#dropdownCategoriesToggleMenu').html(toggleHTML)
    },
    render(card) {
        if (card.length >= 1) {
            card.forEach((item)=>{
                let html = `
                    <blog-post post-id="${item.id}" url="${item.url}" uid="${item.uid}" category="${item.category}" date_create="${item.date_create}" title="${item.title}" poster_url="${item.poster_url}" preview="${item.preview}"><blog-post/>
                `
                $('#board-posts').append(html)
            })
        } else {
            let html = `
                <div class="col-12 text-center theme-panel rounded my-3 py-5">
                    <h4 data-lang="string_not_found" class="theme-title"></h4>
                </div>
            `
            $('#board-posts').append(html)
        }
    }
}
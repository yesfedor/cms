let blogBoard = {
    init() {
        blogBoard.blogNavbar()
        blogBoard.categoriesToggle()
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
    }
}
blogBoard.init()
<nav class="navbar navbar-expand-lg navbar-dark theme-primary my-0 py-1">
    <div class="container">
        <a href="/" onclick="return nav.go(this);" class="navbar-brand waves-effect waves-light"><b><?= $logo ?></b> Developer</a>
        <ul class="d-none d-lg-block navbar-nav mr-auto">
            <li class="nav-item"><?= url('/blog', '<span data-lang="app_menu_blog"></span>', false, 'nav-link waves-effect waves-light', true) ?></li>
        </ul>

        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <?= url('https://vk.com/icosy', '<i class="fab fa-vk"></i>', false, 'nav-link waves-effect waves-light', false) ?>
            </li>
            <li class="nav-item">
                <a href="tg://resolve=yesfedor" class="nav-link waves-effect waves-light"><i class="fab fa-telegram-plane"></i></a>
            </li>
        </ul>
    </div>
</nav>
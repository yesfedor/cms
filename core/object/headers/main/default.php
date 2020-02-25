<nav class="navbar navbar-expand-lg navbar-dark theme-header z-depth-0 my-0 py-1">
    <div class="container">
        <a href="/" onclick="return nav.go(this);" class="navbar-brand waves-effect waves-light"><b class="theme-logo"><?= $logo ?></b></a>
        <ul class="d-none d-lg-block navbar-nav mr-auto">
            <li class="nav-item"><?= url('/blog', '<span class="theme-nav-link" data-lang="app_menu_blog"></span>', false, 'nav-link waves-effect waves-light', true) ?></li>
        </ul>

        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <?= url('https://vk.com/icosy', '<i class="theme-nav-link fab fa-vk"></i>', false, 'nav-link waves-effect waves-light', false) ?>
            </li>
            <li class="nav-item">
                <a href="tg://resolve?domain=yesfedor" class="nav-link waves-effect waves-light"><i class="theme-nav-link fab fa-telegram-plane"></i></a>
            </li>
            <li class="nav-item">
                <a id="themeToggle" class="nav-link waves-effect waves-light" onclick="styleThemeToggle('#themeToggle'); return false;" href="#"></a>
            </li>
        </ul>
    </div>
</nav>
<script>style.theme.initToggle('#themeToggle')</script>
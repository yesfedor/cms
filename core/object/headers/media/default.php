<nav class="navbar navbar-expand-lg navbar-dark theme-header z-depth-0 my-0 py-1">
    <div class="container">
        <a href="/" onclick="return nav.go(this);" class="navbar-brand"><b class="theme-logo"><?= $logo ?></b></a>
        <ul class="d-none d-lg-block navbar-nav nav-flex-icons mr-auto"></ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item"><?= url('/serials', '<span class="theme-nav-link">Сериалы</span>', false, 'nav-link', true) ?></li>
                <li class="nav-item"><?= url('/films', '<span class="theme-nav-link">Фильмы</span>', false, 'nav-link', true) ?></li>
                <li class="nav-item"><?= url('/search', '<span class="theme-nav-link">Поиск</span>', false, 'nav-link', true) ?></li>
            </ul>
        </div>
    </div>
</nav>
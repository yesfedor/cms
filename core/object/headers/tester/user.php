<nav class="navbar navbar-expand-lg navbar-dark theme-primary my-0 py-1">
    <div class="container">
        <a href="/review" onclick="return nav.go(this);" class="navbar-brand"><b class="theme-logo"><?= $logo ?></b></a>
        <ul class="d-none d-lg-block navbar-nav mr-auto">
            <li class="nav-item"><?= url('/info', 'Как пользоваться?', false, 'theme-nav-link nav-link waves-effect waves-light', true) ?></li>
        </ul>
        <ul class="d-none d-lg-block navbar-nav ml-auto">
            <li class="nav-item">
                <a onclick="return nav.away(this);" target="_blank" class="theme-nav-link nav-link" href="//<?= $domainBase['main'] ?>">Назад</a>
            </li>
        </ul>
    </div>
</nav>
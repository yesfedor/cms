<nav class="navbar navbar-expand-lg navbar-dark theme-primary my-0 py-1">
    <div class="container">
        <a href="/" onclick="return nav.go(this);" class="navbar-brand"><b class="white-text"><?= $logo ?></b> GO</a>
        <ul class="d-none d-lg-block navbar-nav ml-auto">
            <li class="nav-item">
                <a onclick="return nav.away(this);" target="_blank" class="nav-link" href="//<?= $domainBase['main'] ?>">Назад</a>
            </li>
        </ul>
    </div>
</nav>
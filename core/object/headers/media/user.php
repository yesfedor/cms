<?php
$mainWarpSize = 'noWarp';
?>
<style>
.navbar {
    backdrop-filter: blur(12px) brightness(0.7);
    border-bottom: 1px solid #717170;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark theme-header z-depth-0 my-0 py-1 fixed-top">
    <div class="container">
        <a href="/" onclick="return nav.go(this);" class="navbar-brand"><b class="theme-logo"><?= $logo ?></b></a>
        <ul class="d-none d-lg-block navbar-nav nav-flex-icons mr-auto"></ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><?= url('/top10', '<span class="theme-nav-link">Топ 10</span>', false, 'nav-link', true) ?></li>
                <li class="nav-item"><?= url('/subscriptions', '<span class="theme-nav-link">Мои подписки</span>', false, 'nav-link', true) ?></li>
                <li class="nav-item"><?= url('/search', '<span class="theme-nav-link">Поиск</span>', false, 'nav-link', true) ?></li>
            </ul>
            <ul class="d-none d-lg-block navbar-nav ml-auto">
                <li class="nav-item">
                    <a onclick="return nav.away(this);" target="_blank" class="theme-nav-link nav-link" href="//<?= $domainBase['main'] ?>">Назад</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark theme-header z-depth-0 my-0 py-1">
    <div class="container">
        <a href="/" onclick="return nav.go(this);" class="navbar-brand"><b class="theme-logo"><?= $logo ?></b></a>
        <ul class="d-none d-lg-block navbar-nav mr-auto">
            <li onclick="return userApi.notice.show();" class="nav-item"><i class="far fa-bell fa-lg waves-effect waves-light theme-nav-link"></i> <span id="notice-count" class="theme-nav-link"></span></li>
        </ul>
        <ul class="d-none d-lg-block navbar-nav ml-auto">
            <li class="nav-item">
                <a href="/?act=logout&hash=<?= $hash['logout'] ?>" onclick="$('#confirm-account-exit').modal('show'); return false;" class="nav-link"><i class="mr-1 fas fa-sign-out-alt fa-sm waves-effect waves-light theme-nav-link"></i> <span class="theme-nav-link" data-lang="app_user_logout_btn"></span></a>
            </li>
        </ul>
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <a id="themeToggle" class="nav-link waves-effect waves-light" onclick="styleThemeToggle('#themeToggle'); return false;" href="#"></a>
            </li>
        </ul>
    </div>
</nav>

<script>
style.theme.initToggle('#themeToggle')
setTimeout(() => {
    init.createModal(mainTpl.modal.notice.id, {title: mainTpl.modal.notice.title, content: mainTpl.modal.notice.content, footer: mainTpl.modal.notice.footer}, 'large', mainTpl.modal.notice.bg)
    init.createModal(mainTpl.modal.account_confirm_exit.id, {title: mainTpl.modal.account_confirm_exit.title, content: mainTpl.modal.account_confirm_exit.content, footer:mainTpl.modal.account_confirm_exit.footer}, 'large', mainTpl.modal.account_confirm_exit.bg)
}, 500);
</script>
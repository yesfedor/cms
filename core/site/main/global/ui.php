<?php
if ($_SESSION['user']['uid']) {
    $bigData['html']['warp'] = '
    <div class="container my-lg-5">
        <div class="row">
            <div class="d-none d-lg-block col-lg-3 col-xl-2 h-100">
                <div class="nav flex-column nav-pills font-weight-normal text-left" id="app-main-menu" aria-orientation="vertical">
                    <a id="app-main-menu_profile" class="nav-link waves-effect text-truncate" href="'.$user_profile_href.'" onclick="return nav.go(this);">
                        <div class="row my-0 py-0">
                            <div class="col-3 text-right px-2">
                                <i class="fas fa-user fa-lg theme-icon"></i>
                            </div>
                            <div class="col-9 text-left px-2"><span data-lang="ui_menu_profile"></span></div>
                        </div>
                    </a>
                    <a id="app-main-menu_edit" class="nav-link waves-effect" href="/edit" onclick="return nav.go(this);">
                        <div class="row my-0 py-0">
                            <div class="col-3 text-right px-2">
                                <i class="mr-0 fas fa-edit fa-lg theme-icon"></i>
                            </div>
                            <div class="col-9 text-left px-2"><span data-lang="ui_menu_edit_profile"></span></div>
                        </div>
                    </a>
                    <a id="app-main-menu_feed" class="nav-link waves-effect" href="/feed" onclick="return nav.go(this);">
                        <div class="row my-0 py-0">
                            <div class="col-3 text-right px-2">
                                <i class="fas fa-newspaper fa-lg theme-icon"></i>
                            </div>
                            <div class="col-9 text-left px-2"><span data-lang="ui_menu_feed"></span></div>
                        </div>
                    </a>
                    <a id="app-main-menu_msg" class="nav-link waves-effect" href="/msg" onclick="return nav.go(this);">
                        <div class="row my-0 py-0">
                            <div class="col-3 text-right px-2">
                                <i class="fas fa-envelope fa-lg theme-icon"></i>
                            </div>
                            <div class="col-9 text-left px-2"><span data-lang="ui_menu_msg"></span></div>
                        </div>
                    </a>
                    <a class="nav-link waves-effect" href="/media" onclick="return nav.go(this);">
                        <div class="row my-0 py-0">
                            <div class="col-3 text-right px-2">
                                <i class="fas fa-play fa-lg theme-icon"></i>
                            </div>
                            <div class="col-9 text-left px-2"><span>Media</span></div>
                        </div>
                    </a>
                    <a id="app-main-menu_settings" class="nav-link waves-effect" href="/settings" onclick="return nav.go(this);">
                        <div class="row my-0 py-0">
                            <div class="col-3 text-right px-2">
                                <i class="fas fa-cog fa-lg theme-icon"></i>
                            </div>
                            <div class="col-9 text-left px-2"><span data-lang="ui_menu_settings"></span></div>
                        </div>
                    </a>
                    '.(getUserAccessScore() >= 8 ? '
                    <a class="nav-link waves-effect" href="//'.$domainBase['dev'].'" onclick="return nav.away(this);">
                        <div class="row my-0 py-0">
                            <div class="col-3 text-right px-2">
                                <i class="fab fa-dev fa-lg theme-icon"></i>
                            </div>
                            <div class="col-9 text-left px-2"><span>INY Dev</span></div>
                        </div>
                    </a>
                    ':'').'
                </div>
                <div id="app-mini-footer" class="row my-0 pt-3 pb-0">
                    <div class="col-12 px-2 offset-1 text-left small">
                        <a class="text-muted px-1" onclick="return nav.go(this);" href="/blog"><span data-lang="ui_menu_blog"></span></a>
                        <a class="text-muted px-1" onclick="return nav.go(this);" href="/dev"><span data-lang="ui_menu_dev"></span></a><br>
                        <a class="text-muted px-1" onclick="return nav.go(this);" href="/ads"><span data-lang="ui_menu_ads"></span></a>
                        <div class="dropdown d-inline-block">
                            <a class="nav-link dropdown-toggle px-1 not-select" type="button" id="ui_menu_more_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-lang="ui_menu_more"></span></a>
                            <div class="dropdown-menu theme-header">
                                <h6 data-lang="ui_menu_more_language" class="dropdown-header theme-nav-link text-center"></h6>
                                <a data-lang-toggle="ru" class="dropdown-item theme-nav-link" onclick="language.chenge(\'ru\'); return false;" href="#">Русский</a>
                                <a data-lang-toggle="en" class="dropdown-item theme-nav-link" onclick="language.chenge(\'en\'); return false;" href="#">English</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block col-lg-7 col-xl-8 px-lg-5">
                <div id="warp-page" class="row"></div>
            </div>
            <div class="d-none d-lg-block col-lg-2 col-xl-2">
                <div id="warp-page-helper" class="row"></div>
            </div>
            <div class="d-block d-lg-none col-12 fixed-bottom">
                <div class="row my-0 py-1 theme-panel z-depth-1-half border-top border-primary">
                    <div class="col-3 text-center waves-effect py-1">'.url('/feed?screen=mobile', '<i class="far fa-newspaper fa-2x theme-icon"></i>', false, false, true).'</div>
                    <div class="col-3 text-center waves-effect py-1">'.url('/notice?screen=mobile', '<div class="row"><div class="col-10 offset-1 text-right mb-n4 ml-n1"><span id="notice-count-lite" class="badge badge-info theme-icon"></span></div></div><i class="far fa-bell fa-2x theme-icon"></i>', false, false, true).'</div>
                    <div class="col-3 text-center waves-effect py-1">'.url('/msg?screen=mobile', '<i class="far fa-envelope fa-2x theme-icon"></i>', false, false, true).'</div>
                    <div class="col-3 text-center waves-effect py-1">'.url('/menu?screen=mobile', '<i class="fas fa-bars fa-2x theme-icon"></i>', false, false, true).'</div>
                </div>
            </div>
        </div>
    </div>
    ';
} else {
    $bigData['html']['warp'] = '
    <div class="container my-lg-5">
        <div class="row">
            <div class="d-none d-lg-block col-lg-3 h-100">
                <div class="row">
                    <div id="window-login" class="col-12 theme-panel rounded text-center px-0 mb-2">
                        <h4 class="mt-2 py-2"><span data-lang="app_user_login_login"></span></h4>
                        <form id="app-login" class= "row my-0 py-0 px-3">
                            <div class="col-12 md-form md-outline mt-1 mb-2">
                                <input type="text" id="app-login-username" name="login-username" class="theme-text form-control">
                                <label class="theme-panel mx-3" for="app-login-username"><span data-lang="app_user_login_username"></span></label>
                            </div>
                            <div class="col-12 md-form md-outline mt-1 mb-2">
                                <input type="password" id="app-login-password" name="login-password" class="theme-text form-control">
                                <label class="theme-panel mx-3" for="app-login-password"><span data-lang="app_user_login_password"></span></label>
                            </div>
                            <div class="col-12 text-center mb-2">
                                <button type="button" class="btn btn-outline-primary btn-rounded waves-effect z-depth-0 my-0" onclick="appForms.go(\'app-login\', \'auth/login\');"><span data-lang="app_user_login_login_btn"></span></button>
                            </div>
                             <div id="app-login-callback" class="col-12 text-center mb-2"><a class="my-0 py-0" href="/api.php?_action=auth.vk&v=0.1"><i class="fab fa-vk theme-link"></i></a></div>
                        </form>
                    </div>
                   <div class="col-12 px-2 text-center small">
                        <a class="text-muted px-1" onclick="return nav.go(this);" href="/blog"><span data-lang="ui_menu_blog"></span></a>
                        <a class="text-muted px-1" onclick="return nav.go(this);" href="/dev"><span data-lang="ui_menu_dev"></span></a><br>
                        <a class="text-muted px-1" onclick="return nav.go(this);" href="/ads"><span data-lang="ui_menu_ads"></span></a>
                        <div class="dropdown d-inline-block">
                            <a class="nav-link dropdown-toggle px-1 not-select" type="button" id="ui_menu_more_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-lang="ui_menu_more"></span></a>
                            <div class="dropdown-menu theme-header">
                                <h6 data-lang="ui_menu_more_language" class="dropdown-header theme-nav-link text-center"></h6>
                                <a data-lang-toggle="ru" class="dropdown-item theme-nav-link" onclick="language.chenge(\'ru\'); return false;" href="#">Русский</a>
                                <a data-lang-toggle="en" class="dropdown-item theme-nav-link" onclick="language.chenge(\'en\'); return false;" href="#">English</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block mb-5 col-lg-7 px-lg-5">
                <div id="warp-page" class="row"></div>
            </div>
            <div class="d-none mb-5 d-lg-block col-lg-2">
                <div id="warp-page-helper" class="row"></div>
            </div>
        </div>
    </div>
    ';
}
?>
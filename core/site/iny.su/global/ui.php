<?php
$bigData['html']['warp'] = '
<div class="container my-lg-5">
    <div class="row">
        <div class="d-none d-lg-block col-lg-3 col-xl-2 h-100 sticky">
            <div class="nav flex-column nav-pills text-left" id="app-main-menu" aria-orientation="vertical">
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
                <div class="row my-0 py-0 nav-link pr-3"><div class="col-9 offset-3 px-2"><hr class="w-100 my-0 py-0"></div></div>
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
                <div class="row my-0 py-0 nav-link pr-3"><div class="col-9 offset-3 px-2"><hr class="w-100 my-0 py-0"></div></div>
                <a id="app-main-menu_settings" class="nav-link waves-effect" href="/settings" onclick="return nav.go(this);">
                    <div class="row my-0 py-0">
                        <div class="col-3 text-right px-2">
                            <i class="fas fa-cog fa-lg theme-icon"></i>
                        </div>
                        <div class="col-9 text-left px-2"><span data-lang="ui_menu_settings"></span></div>
                    </div>
                </a>
                '.(getUserAccessScore() >= 8 ? '
                <div class="row my-0 py-0 nav-link pr-3"><div class="col-9 offset-3 px-2"><hr class="w-100 my-0 py-0"></div></div>
                <a class="nav-link waves-effect" href="//'.$domainBase['dev'].'" onclick="return nav.away(this);">
                    <div class="row my-0 py-0">
                        <div class="col-3 text-right px-2">
                            <i class="fab fa-dev fa-lg theme-icon"></i>
                        </div>
                        <div class="col-9 text-left px-2"><span>INY Dev</span></div>
                    </div>
                </a>
                ':'').'
                <div class="row my-0 py-0 nav-link pr-3"><div class="col-9 offset-3 px-2"><hr class="w-100 my-0 py-0"></div></div>
            </div>
            <div id="app-mini-footer">
                <div class="row my-0 pt-3 pb-0">
                    <div class="col-12 px-2 offset-1 text-left small">
                        <a class="text-muted px-1" onclick="return nav.go(this);" href="/blog"><span data-lang="ui_menu_blog"></span></a>
                        <a class="text-muted px-1" onclick="return nav.go(this);" href="/dev"><span data-lang="ui_menu_dev"></span></a><br>
                        <a class="text-muted px-1" onclick="return nav.go(this);" href="/ads"><span data-lang="ui_menu_ads"></span></a>
                        <a class="text-muted px-1" onclick="return nav.go(this);" href="#"><span data-lang="ui_menu_more"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block mb-5 col-lg-7 col-xl-8">
            <div id="warp-page" class="row"></div>
        </div>
        <div class="d-none mb-5 d-lg-block col-lg-2 col-xl-2">
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
<script>
$(".sticky").sticky({
    topSpacing: 0,
    stopper: "footer",
    startScrolling: "top"
})
</script>
';
?>
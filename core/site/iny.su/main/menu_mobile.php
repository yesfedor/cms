<?php
if ($_GET['screen'] != 'mobile') {echo mainLocation();}
$ui = true;
$warp = "warp-page";
$pageActive['menu_mobile'] = 'active';
?>
<div class="col-12">
    <div class="row my-0 py-0">
        <div onclick="nav.router('<?= $user_profile_href ?>', true);" class="col-12 white z-depth-1 my-0 py-1 waves-effect">
            <div class="row py-2">
                <div class="col-2 offset-1 text-center"><i class="fas fa-user fa-3x text-primary"></i></div>
                <div class="col-8 offset-1">
                    <div class="row my-0 py-0">
                        <div class="col-12 my-0 py-0 text-left"><h5 class="h5 my-0 py-0 text-truncate"><?= $_SESSION['user']['name'].' '.$_SESSION['user']['surname'] ?></h5></div>
                        <div class="col-12 my-0 py-0 text-left"><h6 class="h6 my-0 py-1 text-muted"><span data-lang="ui_menu_mobile_open_profile"></span></h6></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 my-2"></div>
        <div class="col-12 white z-depth-1 my-0">
            <div class="row my-0 py-2">
                <!-- Edit profile -->
                <div onclick="nav.router('/edit', true);" class="col-10 offset-1 text-left waves-effect py-2"><h5 class="h5 my-0 py-0 text-truncate"><i class="mr-1 fas fa-edit fa-lg text-muted"></i> <span data-lang="ui_menu_mobile_edit_profile"></span></h5></div>
                <!-- Setting profile -->
                <div onclick="nav.router('/settings', true);" class="col-10 offset-1 text-left waves-effect py-2"><h5 class="h5 my-0 py-0 text-truncate"><i class="mr-2 fas fa-cog fa-lg text-muted"></i> <span data-lang="ui_menu_mobile_settings"></span></h5></div>

                <div onclick="$('#confirm-account-exit').modal('show');" class="col-10 offset-1 text-left waves-effect py-2 border-top border-bottom"><h5 class="h5 my-0 py-0 text-truncate"><i class="mr-2 fas fa-sign-out-alt fa-lg red-text"></i> <span data-lang="app_user_logout_btn"></span></h5></div>
            </div>
        </div>
    </div>
</div>
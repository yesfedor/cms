<?php
$warp = "warp";
?>
<div class="container my-2 my-lg-5">
    <div class="row">
        <div class="col-12 col-lg-7 theme-panel border border-primary rounded text-center my-lg-3 pt-3 pb-1 d-none d-lg-block">
            <h2 class="py-1"><span class="h2 font-weight-bold theme-panel text-primary py-1">INY.SU</span> <span id="module-layout-name" class="font-weight-light primary-color white-text rounded py-1 px-2"></span></h2>
            <div class="row">
                <hr class="w-100 border-primary mt-1 mb-0">
                <div class="col-12 text-center" style="overflow-y: scroll">
                    <div id="warp-welcome" class="row"></div>
                </div>
                <hr class="w-100 border-primary mt-0 mb-1">
                <div id="app-mini-footer" class="col-12 text-center"><a class="theme-link mx-1" onclick="language.chenge('ru');" href="#">Русский</a> <a class="theme-link mx-1" onclick="language.chenge('en');" href="#">English</a></div>
            </div>
        </div>
        <div class="col-12 col-lg-4 offset-lg-1 my-lg-3 mt-2 my-lg-0 px-5 px-md-4 px-lg-3">
            <div class="row my-0 py-0">
                <div id="window-login" class="col-12 theme-panel border border-primary rounded text-center px-0">
                    <h3 class="mt-2 py-2"><span data-lang="app_user_login_login"></span></h3>
                    <hr class="w-100 border-primary mt-2">
<form id="app-login" class= "row my-0 py-0 px-3">
    <div class="col-12 md-form md-outline mt-1 mb-2">
        <input type="text" id="app-login-username" name="login-username" class="theme-text form-control">
        <label class="theme-panel mx-3" for="app-login-username"><span data-lang="app_user_login_username"></span></label>
    </div>
    <div class="col-12 md-form md-outline mt-1 mb-2">
        <input type="password" id="app-login-password" name="login-password" class="theme-text form-control">
        <label class="theme-panel mx-3" for="app-login-password"><span data-lang="app_user_login_password"></span></label>
    </div>
    <div class="col-12 text-center my-0">
        <button type="button" class="btn btn-outline-primary btn-rounded waves-effect z-depth-0 my-0" onclick="appForms.go('app-login', 'auth/login');"><span data-lang="app_user_login_login_btn"></span></button>
    </div>
    <hr class="w-100 border-primary my-2">
    <div id="app-login-callback" class="col-12 text-center mb-1"><a class="my-0 py-0" href="/api.php?_action=auth.vk&v=0.1"><i class="fab fa-vk theme-link"></i></a></div>
</form>
                </div>
                <div class="col-12 my-2"></div>
                <div class="col-12 theme-panel border border-primary rounded text-center px-0">
                    <h3 class="mt-2 py-2"><span data-lang="app_user_reg_reg"></span></h3>
                    <hr class="w-100 border-primary mt-2">
<form id="app-reg-min" class= "row my-0 py-0 px-3">
    <div class="col-12 md-form md-outline mt-1 mb-2">
        <input type="text" id="user-name-min" class="theme-text form-control">
        <label class="theme-panel mx-3" for="user-name-min"><span data-lang="app_user_reg_name"></span></label>
    </div>
    <div class="col-12 md-form md-outline mt-1 mb-2">
        <input type="text" id="user-surname-min" class="theme-text form-control">
        <label class="theme-panel mx-3" for="user-surname-min"><span data-lang="app_user_reg_surname"></span></label>
    </div>
    <div class="col-12 text-center my-0">
        <button type="button" class="btn btn-outline-primary btn-rounded waves-effect z-depth-0 my-0" data-toggle="modal" data-target="#modalAuthReg"><span data-lang="app_user_reg_step"></span></button>
    </div>
    <hr class="w-100 border-primary my-2">
    <div id="app-reg-min-callback" class="col-12 text-center mb-1"></div>
</form>
<script>
init.createModal(mainTpl.modal.reg.id, {title: mainTpl.modal.reg.title, content: mainTpl.modal.reg.content, footer: mainTpl.modal.reg.footer}, 'large', mainTpl.modal.reg.bg)
</script>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- page logic -->
<script>
$('#warp-welcome').attr('style', 'height: 600px !important')

interval_modalAuthReg = setInterval(() => {
    if ($('#modalAuthReg').is('div')) {
        clearInterval(interval_modalAuthReg)
        
        $(function(){
            $('#user-name-min').on('input', function(){
                $('#user-name').val( $(this).val() )
                if ($(this).val() != '') $('[for^=user-name]').addClass('active')
                else $('[for^=user-name]').removeClass('active')
            })
            $('#user-name').on('input', function(){
                $('#user-name-min').val( $(this).val() )
                if ($(this).val() != '') $('[for^=user-name-min]').addClass('active')
                else $('[for^=user-name-min]').removeClass('active')
            })
            $('#user-surname-min').on('input', function(){
                $('#user-surname').val( $(this).val() )
                if ($(this).val() != '') $('[for^=user-surname]').addClass('active')
                else $('[for^=user-surname]').removeClass('active')
            })
            $('#user-surname').on('input', function(){
                $('#user-surname-min').val( $(this).val() )
                if ($(this).val() != '') $('[for^=user-surname-min]').addClass('active')
                else $('[for^=user-surname-min]').removeClass('active')
            })
        });
    }
}, 200);

<?= ($_SESSION['users'][0] ? 'userApi.widget("users", "#warp-welcome", '.json_encode($_SESSION['users'], JSON_UNESCAPED_UNICODE).')':'userApi.widget("welcome", "#warp-welcome")') ?>
</script>
<?php
if ($_SESSION['user']['uid']) {
    echo '<meta http-equiv="refresh" content="0; url=/">';
}
?>
<style>
#modalAuthReg {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    transition-duration: 0.5s;
}
.authFullMode {
    display: none;
    width: 100vw;
    height: 100vh;
    top: 0px;
    left: 0px;
    bottom: 0px;
    right: 0px;
    position: absolute;
    z-index: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    filter: brightness(0.5);
    transition-duration: 0.5s;
}
.authFullModeTextWhite {
    color: white!important;
}
</style>

<div class="authFullMode"></div>
<div class="container">
    <div class="row h100vh justify-content-center align-items-center">
        <div id="window-tabs" class="col-12 text-center mb-5">
            <a class="h3 px-3" onclick="return windowChange('login');" href="#"><span class="authFullModeText text-primary" data-lang="app_user_login_login"></span></a>
            <a class="h3 px-3" onclick="return windowChange('reg');" href="#"><span class="authFullModeText text-primary" data-lang="app_user_reg_reg"></span></a>
        </div>
        <div id="window-login" class="col-12 col-md-6 col-lg-4 theme-panel border border-primary rounded text-center px-0 my-5">
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
                <div id="app-login-callback" class="col-12 text-center mb-1"><a class="my-0 py-0" href="/api.php?_action=auth/with.vk&v=0.1"><i class="fab fa-vk text-primary"></i></a></div>
            </form>
        </div>
        <div id="window-reg" class="col-12 col-md-6 col-lg-4 theme-panel border border-primary rounded text-center px-0 my-5">
            <h3 class="mt-2 py-2"><span data-lang="app_user_reg_reg"></span></h3>
            <hr class="w-100 border-primary mt-2">
            <form id="app-reg-min" class= "row my-0 py-0 px-3">
                <div class="col-12 md-form md-outline mt-1 mb-2">
                    <input value="" type="text" id="user-name-min" class="theme-text form-control">
                    <label class="theme-panel mx-3" for="user-name-min"><span data-lang="app_user_reg_name"></span></label>
                </div>
                <div class="col-12 md-form md-outline mt-1 mb-2">
                    <input value="" type="text" id="user-surname-min" class="theme-text form-control">
                    <label class="theme-panel mx-3" for="user-surname-min"><span data-lang="app_user_reg_surname"></span></label>
                </div>
                <div class="col-12 text-center my-0">
                    <button type="button" class="btn btn-outline-primary btn-rounded waves-effect z-depth-0 my-0" data-toggle="modal" data-target="#modalAuthReg"><span data-lang="app_user_reg_step"></span></button>
                </div>
                <hr class="w-100 border-primary my-2">
                <div id="app-reg-min-callback" class="col-12 text-center mb-1"><a class="my-0 py-0" href="/api.php?_action=auth/with.vk&v=0.1"><i class="fab fa-vk text-primary"></i></a></div>
            </form>
        </div>
        <div id="app-mini-footer" class="col-12 text-center"><a class="authFullModeText mx-1" onclick="language.chenge('ru');" href="#">Русский</a> <a class="authFullModeText mx-1" onclick="language.chenge('en');" href="#">English</a></div>
        <div class="col-12 text-center"><a data-lang="text_return_to_main_page" class="authFullModeText mx-1" onclick="return nav.go(this);" href="/main"></a></div>
    </div>
</div>

<script>
init.header("none");
init.footer("none");
nav.onunload = () => {
    init.header("default");
    init.footer("default");
}
function authFullMode() {
    picPath = 'https://go.iny.su/bmr'

    $('.authFullMode').css('background-image', 'url("' + picPath + '")')
    $('.authFullMode').css('display', 'block')
    $('.authFullModeText').removeClass('text-primary')
    $('.authFullModeText').addClass('authFullModeTextWhite')
}
authFullMode()

function windowChange(type) {
    switch(type) {
        case 'login':
            $('#window-login').show()
            $('#window-reg').hide()
        break;
        case 'reg':
            $('#window-reg').show()
            $('#window-login').hide()
        break;
    }
    return false
}
windowChange('login')

init.createModal(mainTpl.modal.reg.id, {title: mainTpl.modal.reg.title, content: mainTpl.modal.reg.content, footer: mainTpl.modal.reg.footer}, 'large', (fn.isMobile() ? mainTpl.modal.reg.bg : 'url("https://go.iny.su/bmr")'))

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
</script>
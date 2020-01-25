<?php
//do..
?>
<div class="col-12">
    <div class="row">
        <div class="col-12 theme-panel border border-primary rounded">
            <div class="row">
                <div class="col-12 text-left">
                    <h4 class="my-2 text-primary"><b data-lang="ui_settings_menu_base"></b></h4>
                </div>
                <hr class="w-100 my-0 py-0 mb-2 pb-2 border-primary">
                <div class="col-12">
                    <form id="form-settings" class="row">
                        <?= genEdit('password', 'settingsNewPassword', 'settingsNewPassword', 'Изменить пароль', false) ?>
                        <?= genEdit('password', 'settingsNewPasswordRepeat', 'settingsNewPasswordRepeat', 'Повторите пароль', false, 'display:none;') ?>
                        <?= genEdit('password', 'settingsPassword', 'settingsPassword', 'Старый пароль', false, 'display:none;') ?>

                        <?= genEdit('text', 'settingsMail', 'settingsMail', 'Электронная почта', $_SESSION['user']['mail']) ?>

                        <?= genEdit('text', 'settingsUserUrl', 'settingsUserUrl', 'Адрес страницы', 'https://'.appGetDomain().'/'.($_SESSION['user']['url'] ? $_SESSION['user']['url'] : 'id'.$_SESSION['user']['uid'])) ?>

                        <div class="col-10 offset-1 my-1 py-1">
                            <button class="mx-0 btn btn-rounded btn-outline-primary waves-effect" onclick="appForms.go('form-settings', 'user/settings-main'); return false;"><span data-lang="btn_save"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$('#settingsNewPassword').on('input', () => {
    let el = '#settingsNewPassword'
    let elLabel = '[for = settingsNewPassword]'
    let elLabelTextTrue = '<span>Новый пароль</span>'
    let elLabelTextFalse = '<span>Изменить пароль</span>'
    let checkValue = $(el).val()
    if (checkValue != '' && checkValue != ' ') {
        $(elLabel).html(elLabelTextTrue)
        $('#settingsNewPasswordRepeat').parent().fadeIn()
        $('#settingsPassword').parent().fadeIn()
    } else {
        $(elLabel).html(elLabelTextFalse)
        $('#settingsNewPasswordRepeat').parent().fadeOut()
        $('#settingsPassword').parent().fadeOut()
    }
})
</script>
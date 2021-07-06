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
                        <?= genEdit('password', 'settingsNewPassword', 'settingsNewPassword', '<span data-lang="ui_settings_base_change_password"></span>', false) ?>
                        <?= genEdit('password', 'settingsNewPasswordRepeat', 'settingsNewPasswordRepeat', '<span data-lang="ui_settings_base_repeat_password"></span>', false, 'display:none;') ?>
                        <?= genEdit('password', 'settingsPassword', 'settingsPassword', '<span data-lang="ui_settings_base_old_password"></span>', false, 'display:none;') ?>

                        <?= genEdit('text', 'settingsMail', 'settingsMail', '<span data-lang="ui_settings_base_mail"></span>', $_SESSION['user']['mail']) ?>

                        <?= genEdit('text', 'settingsUserUrl', 'settingsUserUrl', '<span data-lang="ui_settings_base_user_link"></span>', 'https://'.appGetDomain().'/'.($_SESSION['user']['url'] ? $_SESSION['user']['url'] : 'id'.$_SESSION['user']['uid'])) ?>

                        <div class="col-10 offset-1 my-1 py-1">
                            <h5 id="settings-status" class="theme-text my-0"></h5>
                            <button class="mx-0 btn btn-rounded btn-outline-primary waves-effect" onclick="appForms.go('form-settings', 'user/settings-main'); return false;"><span data-lang="btn_save"></span></button> <span id="" class="px-3 theme-text"></span>
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
    let elLabelTextTrue = '<span data-lang="ui_settings_base_new_password"></span>'
    let elLabelTextFalse = '<span data-lang="ui_settings_base_change_password"></span>'
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
    language.render()
})
</script>
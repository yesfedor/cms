<?php
$genEdit_counter = 0;

$edit_gender_arr = [
    'male' => $lang['gender_male'],
    'female' => $lang['gender_female']
];
$edit_relationship_arr = [
    'type-0' => $lang['ui_edit_base_relationship_0'],
    'type-1' => $lang['ui_edit_base_relationship_1'],
    'type-2' => $lang['ui_edit_base_relationship_2'],
    'type-3' => $lang['ui_edit_base_relationship_3'],
    'type-4' => $lang['ui_edit_base_relationship_4'],
    'type-5' => $lang['ui_edit_base_relationship_5'],
    'type-6' => $lang['ui_edit_base_relationship_6'],
    'type-7' => $lang['ui_edit_base_relationship_7'],
    'type-8' => $lang['ui_edit_base_relationship_8'],
];
$edit_languages = [
    'ru' => 'Русский',
    'en' => 'English',
    'ua' => 'Українська мова'
];
$edit_relationship_partner = ($_SESSION['user']['partner'] ? $_SESSION['user']['partner']:$lang['ui_edit_base_relationship_partner']);
$edit_relationship_js = '
    $("#editUserRelationship").change(()=>{
        relationship_val = $("#editUserRelationship").val()
        if (relationship_val != "type-0" && relationship_val != "type-1" && relationship_val != "type-8") {
            $("[data-name^=edit-user-relationship_partner]").fadeIn()
        } else $("[data-name^=edit-user-relationship_partner]").fadeOut()
    })
';
$edit_birthday = ($_SESSION['user']['birthday'] ? $_SESSION['user']['birthday']:$lang['ival-ui_edit_base_birthday_tpl']);
?>
<div class="col-12">
    <div class="row">
        <div class="col-12 white border border-primary">
            <div class="row">
                <div class="col-12 text-left">
                    <h4 class="my-2 text-primary"><b data-lang="ui_edit_menu_base"></b></h4>
                </div>
                <hr class="w-100 my-0 py-0 mb-2 pb-2 border-primary">
                <div class="col-12">
                    <form id="form-edit" class="row">
                        <?= genEdit('text', 'editUserName', 'edit-user-name', $lang['ival-ui_edit_base_name'], $_SESSION['user']['name']) ?>
                        <?= genEdit('text', 'editUserSurname', 'edit-user-surname', $lang['ival-ui_edit_base_surname'], $_SESSION['user']['surname']) ?>
                        <?= genEdit('text', 'editUserBirthday', 'edit-user-birthday', $lang['ival-ui_edit_base_birthday'], $edit_birthday) ?>
                        <?= genEdit('select', 'editUserGender', 'edit-user-gender', $lang['ival-ui_edit_base_gender'], $edit_gender_arr) ?>
                        <?= genEdit('select', 'editUserRelationship', 'edit-user-relationship', $lang['ival-ui_edit_base_relationship'], $edit_relationship_arr) ?>
                        <?= genEdit('text', 'editUserPartner', 'edit-user-relationship_partner', $lang['ival-ui_edit_base_relationship_partner'], $edit_relationship_partner, 'display: none;', $edit_relationship_js) ?>
                        <?= genEdit('text', 'editUserHometown', 'edit-user-hometown', $lang['ival-ui_edit_base_hometown']) ?>
                        <?= genEdit('multiselect', 'editUserLanguages', 'edit-user-languages', $lang['ival-ui_edit_base_languages'], $edit_languages) ?>

                        <div class="col-10 offset-1 my-1 py-1">
                            <button class="mx-0 btn btn-outline-primary waves-effect" onclick="appForms.go('form-edit', 'uesr/edit-main'); return false;"><span data-lang="btn_save">Save</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
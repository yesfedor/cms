<?php
$genEdit_counter = 0;

$edit_gender_arr = [
    'male' => ($_SESSION['user']['gender'] == 'male' ? array($lang['gender_male']) : $lang['gender_male']),
    'female' => ($_SESSION['user']['gender'] == 'female' ? array($lang['gender_female']) : $lang['gender_female']),
];
$edit_relationship_arr = [
    'type-0' => ($_SESSION['user']['relationship'] == 'type-0' ? array($lang['ui_edit_base_relationship_0']) : $lang['ui_edit_base_relationship_0']),
    'type-1' => ($_SESSION['user']['relationship'] == 'type-1' ? array($lang['ui_edit_base_relationship_1']) : $lang['ui_edit_base_relationship_1']),
    'type-2' => ($_SESSION['user']['relationship'] == 'type-2' ? array($lang['ui_edit_base_relationship_2']) : $lang['ui_edit_base_relationship_2']),
    'type-3' => ($_SESSION['user']['relationship'] == 'type-3' ? array($lang['ui_edit_base_relationship_3']) : $lang['ui_edit_base_relationship_3']),
    'type-4' => ($_SESSION['user']['relationship'] == 'type-4' ? array($lang['ui_edit_base_relationship_4']) : $lang['ui_edit_base_relationship_4']),
    'type-5' => ($_SESSION['user']['relationship'] == 'type-5' ? array($lang['ui_edit_base_relationship_5']) : $lang['ui_edit_base_relationship_5']),
    'type-6' => ($_SESSION['user']['relationship'] == 'type-6' ? array($lang['ui_edit_base_relationship_6']) : $lang['ui_edit_base_relationship_6']),
    'type-7' => ($_SESSION['user']['relationship'] == 'type-7' ? array($lang['ui_edit_base_relationship_7']) : $lang['ui_edit_base_relationship_7']),
    'type-8' => ($_SESSION['user']['relationship'] == 'type-8' ? array($lang['ui_edit_base_relationship_8']) : $lang['ui_edit_base_relationship_8']),
];
$edit_languages = [
    'ru' => 'Русский',
    'en' => 'English',
    'ua' => 'Українська мова'
];

if ($_SESSION['user']['relationship_partner']) {
    if (is_numeric($_SESSION['user']['relationship_partner'])) {
        $edit_relationship_partner = '@id'.$_SESSION['user']['relationship_partner'];
    } else {
        $edit_relationship_partner = '@'.$_SESSION['user']['relationship_partner'];
    }
} else {
    $edit_relationship_partner = $lang['ui_edit_base_relationship_partner'];
}

$edit_relationship_js = '
    $("#editUserRelationship").change(()=>{
        relationship_val = $("#editUserRelationship").val()
        if (relationship_val != "type-0" && relationship_val != "type-1" && relationship_val != "type-8") {
            $("[data-name^=edit-user-relationship_partner]").fadeIn()
        } else $("[data-name^=edit-user-relationship_partner]").fadeOut()
    })
';
$edit_birthday = ($_SESSION['user']['birthday'] ? $_SESSION['user']['birthday'] : $lang['ival-ui_edit_base_birthday_tpl']);

if ($_SESSION['user']['id_ns_check_last']) {
    $query_ns_check = "SELECT * FROM user_ns_check WHERE id = :id and uid = :uid";
    $var_ns_check = [
        ':id' => $_SESSION['user']['id_ns_check_last'],
        ':uid' => $_SESSION['user']['uid']
    ];
    $ns_check = dbGetOne($query_ns_check, $var_ns_check);

    user_checker();

    if ($ns_check['status'] == 'approved' and $_SESSION['user']['ns_check'][$ns_check['id']]['approved']) $ns_check = false;
    else $ns_check_date = true;
    if ($ns_check['status'] == 'disapprove' and $_SESSION['user']['ns_check'][$ns_check['id']]['disapprove']) $ns_check = false;
    else $ns_check_date = true;

    if ($ns_check_date) {
        $ns_app_date = appDateGetInt(appDateParseToArr($ns_check['date']));
        $ns_check_date = appDateGetInt(appDateGetArr());
        $ns_max = 1209600;
        if ($ns_app_date < ($ns_check_date + $ns_max)) {
            //code
        } else {
            $ns_check['status'] = 'day-14';
        }
    }

    switch($ns_check['status']) {
        case 'approved':
            $ns_check_html = '
            <div id="ns_check_block" class="row my-1">
                <div class="col-12">
                    <div class="alert alert-success" role="alert">
                        <b class="d-block">Изменения сохранены</b>
                        <span class="d-block">Новые данные будут отражены на Вашей странице</span>
                        <a onclick="edit_name_disapprove();" class="d-block alert-link" style="cursor:pointer;">Закрыть</a>
                    </div>
                </div>
            </div>
            ';
        break;
        case 'wait':
            $ns_check_html = '
            <div id="ns_check_block" class="row my-1">
                <div class="col-12">
                    <div class="alert alert-primary" role="alert">
                        <b class="d-block">Ваша заявка принята</b>
                        <span class="d-block">('.$_SESSION['user']['name'].' '.$_SESSION['user']['surname'].') -> <b>('.htmlspecialchars($ns_check['name']).' '.htmlspecialchars($ns_check['surname']).')</b></span>
                        <span class="d-block">На сайте принято использовать настоящие имена. Поэтому некторые заявки на смену имени проверяются модераторами. Пожалуйста, дождитесь одобрения.</span>
                        <a onclick="edit_name_disapprove();" class="d-block alert-link" style="cursor:pointer;">Отменить заявку</a>
                    </div>
                </div>
            </div>
            ';
        break;
        case 'disapprove':
            $ns_check_html = '
            <div id="ns_check_block" class="row my-1">
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <b class="d-block">Ваша заявка на смену имени была отклонена</b>
                        <a onclick="edit_name_disapprove();" class="d-block alert-link" style="cursor:pointer;">Закрыть</a>
                    </div>
                </div>
            </div>
            ';
        break;
        case 'day-14':
            $ns_check_html = '
            <div id="ns_check_block" class="row my-1">
                <div class="col-12">
                    <div class="alert alert-info" role="alert">
                        <b class="d-block">Ваша заявка на смену имени была недавно одобрена. Вы сможете отправить повторную заявку через 14 дней после смены.</b>
                    </div>
                </div>
            </div>
            ';
        break;
    }
}

if ($_SESSION['user']['relationship'] and $_SESSION['user']['relationship_partner']) {
    if (is_numeric($_SESSION['user']['relationship_partner'])) {
        $partner_uid = $_SESSION['user']['relationship_partner'];
        $partner_url = '-';
    }
    else {
        $partner_uid = NULL;
        $partner_url = $_SESSION['user']['relationship_partner'];
    }

    $query_partner = "SELECT uid, name, surname, relationship, relationship_partner FROM user WHERE uid = :uid or url = :url";
    $var_partner = [
        ':uid' => $partner_uid,
        ':url' => $partner_url
    ];

    $partner = dbGetOne($query_partner, $var_partner);

    if ($_SESSION['user']['uid'] == $partner['relationship_partner'] or $_SESSION['user']['url'] == $partner['relationship_partner']) {
        $score_relationship_my = explode('-',$_SESSION['user']['relationship']);
        $score_relationship_partner = explode('-', $partner['relationship']);
        if ($score_relationship_partner >= $score_relationship_my) {
            echo '
<script>
    $(document).ready(() => {
        edit_view_partner({uid: '.$partner['uid'].', name: "'.$partner['name'].'", surname: "'.$partner['surname'].'"})
    });
</script>
            ';
        }
    }
}
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
                    <?= $ns_check_html ? $ns_check_html : '' ?>
                    <form id="form-edit" class="row">
                        <?= genEdit('text', 'editUserName', 'edit-user-name', $lang['ival-ui_edit_base_name'], $_SESSION['user']['name']) ?>
                        <?= genEdit('text', 'editUserSurname', 'edit-user-surname', $lang['ival-ui_edit_base_surname'], $_SESSION['user']['surname']) ?>
                        <?= genEdit('text', 'editUserBirthday', 'edit-user-birthday', $lang['ival-ui_edit_base_birthday'], $edit_birthday) ?>
                        <?= genEdit('select', 'editUserGender', 'edit-user-gender', $lang['ival-ui_edit_base_gender'], $edit_gender_arr) ?>
                        <?= genEdit('select', 'editUserRelationship', 'edit-user-relationship', $lang['ival-ui_edit_base_relationship'], $edit_relationship_arr) ?>
                        <?= genEdit('text', 'editUserPartner', 'edit-user-relationship_partner', $lang['ival-ui_edit_base_relationship_partner'], $edit_relationship_partner, 'display: none;', $edit_relationship_js) ?>
                        <div id="edit_view_partner" class="col-10 offset-1 md-form mt-0 pt-0 pb-1 mb-1" style="display:none;">
                            <h6><span class="black-text" data-lang="ival-ui_edit_base_relationship_partner"></span> <a id="edit_view_partner_profile" onclick="return nav.go(this);" href="/id0" target="_blank"></a></h6>
                            <div class="row px-3 mb-3">
                                <hr class="w-100 my-1 py-1">
                            </div>
                        </div>
                        <?= genEdit('text', 'editUserHometown', 'edit-user-hometown', $lang['ival-ui_edit_base_hometown'], $_SESSION['user']['hometown']) ?>
                        <?= genEdit('multiselect', 'editUserLanguages', 'edit-user-languages', $lang['ival-ui_edit_base_languages'], $edit_languages) ?>

                        <div class="col-10 offset-1 my-1 py-1">
                            <button class="mx-0 btn btn-outline-primary waves-effect" onclick="appForms.go('form-edit', 'user/edit-main'); return false;"><span data-lang="btn_save">Save</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function edit_view_partner(data) {
    $('#edit_view_partner_profile')
        .attr('href', '/id'+ data.uid)
        .html(data.name + ' ' + data.surname)

    $('#edit_view_partner').fadeIn(400)
}
function edit_name_disapprove() {
    $.ajax({
        type: "POST",
        url: "/api.php?_action=user/edit-name-disapprove&v=0.1&hash=<?= $hash['logout'] ?>",
        dataType: "json",
        success: function (data) {
            if (data.text != 'error') {
                $('#ns_check_block').fadeOut(400)
                $('#edit_view_partner').fadeOut(400)
            }
        }
    });
}
</script>
<?php
$warp = 'warp-page'; // warp-page=mobile || warp-notice=pc
$ui = true;

$frame = $thisSitePath.'notice/frame.php';
$page = $thisSitePath.'notice/page.php';

function noticeRender() {
    $notice = userApiNoticeGet();

    $query_app_notice_type = "SELECT * FROM app_notice_type WHERE id != :id";
    $var_app_notice_type[':id'] = 0;
    $app_notice_type = dbGetAll($query_app_notice_type, $var_app_notice_type);

    $app_notice_keys = [];

    for($i=0; $i < count($app_notice_type);) {
        $key = $app_notice_type[$i]['type'];
        $app_notice_keys[$key] = $i;

        $i++;
    }

    for($i=0; $i < count($notice);) {
        $notice[$i]['data'] = json_decode($notice[$i]['data'], true);
        $noticeThis = $notice[$i];

        $n_type = $noticeThis['type'];
        $n_tpl = $app_notice_type[$app_notice_keys[$n_type]]['tpl'];

        $noticeData_pre = [
            'id' => $noticeThis['id'],
            'date_create' => $noticeThis['date_create'],
            'html' => textParse($notice[$i]['data'], $n_tpl),
        ];

        $noticeData[] = $noticeData_pre;

        $i++;
    }

    return $noticeData;
}

$noticeData = noticeRender();

if ($_GET['screen'] != 'mobile') {
    // pc
    $warp = 'warp-notice';
    include_once($frame);
} else {
    //mobile
    $warp = 'warp-page';
    include_once($page);
}
?>
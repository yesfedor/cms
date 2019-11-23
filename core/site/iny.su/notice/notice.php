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

    $notice_type = [];
    for($i=0; $i<count($app_notice_type);) {
        $notice_type[$app_notice_type[$i]['type']] = [
            'icon' => $app_notice_type[$i]['icon'],
            'text' => $app_notice_type[$i]['text']
        ];

        $i++;
    }

    $noticeData = [];
    for($i=0; $i<count($notice);) {
        $notice[$i]['data'] = json_decode($notice[$i]['data'], true);
        $noticePrepare = [
            'id' => $notice[$i]['id'],
            'uid' => $notice[$i]['uid'],
            'type' => $notice[$i]['type'],
            'data' => $notice[$i]['data'],
            'date_create' => $notice[$i]['date_create'],
            'status' => $notice[$i]['status'],
            'icon' => $notice_type[$notice[$i]['type']]['icon'],
            'text' => textParse($notice[$i]['data'], $notice_type[$notice[$i]['type']]['text'])
        ];
        $noticeData[] = $noticePrepare;

        $i++;
    }

    return $noticeData;
}

$noticeData = noticeRender();
$htmlUnReadNoticeTrue = '<span class="h6 badge badge-primary">New</span>';
$htmlUnReadNoticeFalse = '<span class="h6 badge badge-primary"></span>';
$htmlNoticeBtn = '<a onclick="nav.away(this); return false;" class="text-primary my-0" href="{%link%}">{%link-text%}</a>';

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
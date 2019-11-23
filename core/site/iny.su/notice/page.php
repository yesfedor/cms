<?php
$outHtml = '';
$boxTrue = '<span class="text-muted" data-lang="ui_notice_title"></span>';
$boxFalse = '<span class="text-muted" data-lang="ui_notice_title_not"></span>';

for($i = 0; $i < count($noticeData);) {
    $id = $noticeData[$i]['id'];
    if ($id) {
        $outHtml .= '
        <div id="notice-id-'.$id.'" class="col-12 black-text">
            <div class="row my-2">
                <div class="d-block col-3 my-0 p-1 text-center">
                    '.($noticeData[$i]['status'] == 'unread' ? $htmlUnReadNoticeTrue : $htmlUnReadNoticeFalse).'
                    <i class="'.$noticeData[$i]['icon'].' w-100 fa-3x text-primary"></i>
                    <a onclick="userApi.notice.delete('.$id.'); return false;" href="#" class="text-muted my-2">скрыть</a>
                </div>
                <div class="d-block col-6 my-0 px-1 text-left">
                    <h5 class="black-text my-0 py-0">'.$noticeData[$i]['text'].' '.($noticeData[$i]['data']['link'] && $noticeData[$i]['data']['link-text'] ? textParse($noticeData[$i]['data'], $htmlNoticeBtn) : '').'</h5>
                    <h6 class="text-muted my-0 py-0">'.$noticeData[$i]['date_create'].'</h6>
                </div>
                <div class="d-block col-3 my-0 px-1 text-center">
                    <!-- pic zone -->
                </div>
            </div>
        </div>
        ';
    }

    $i++;
}
?>
<style>
body {
    padding: 0px !important;
}
body.modal-open {
    overflow: hidden !important;
    padding-right: 0px !important;
}
</style>
<div class="col-12 text-left mt-2">
    <h5 class="my-0"><?= ($outHtml ? $boxTrue : $boxFalse) ?></h5>
</div>
<?= $outHtml ?>
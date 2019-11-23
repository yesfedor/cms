<?php
$outHtml = '';
$boxTrue = '<span data-lang="ui_notice_title"></span>';
$boxFalse = '<span data-lang="ui_notice_title_not"></span>';

for($i = 0; $i < count($noticeData);) {
    $id = $noticeData[$i]['id'];
    if ($id) {
        $outHtml .= '
        <div id="notice-id-'.$id.'" class="col-12 white black-text my-1 py-1">
            <div class="row border-bottom my-0 py-0">
                <div class="col-10 offset-1">
                    <div class="row my-0 py-0">
                        <div class="col-4 text-center my-0 py-0">'.($noticeData[$i]['status'] == 'unread' ? $htmlUnReadNotice : '').'</div>
                        <div class="col-4 text-center my-0 py-0"><span class="h6 text-muted">'.$noticeData[$i]['date_create'].'</span></div>
                        <div class="col-4 text-right my-0 py-0"><i style="cursor: pointer;" onclick="userApi.notice.delete('.$id.');" class="fas fa-times fa-sm text-muted"></i></div>
                    </div>
                </div>
                 <div class="col-10 offset-1 text-center"><h5 class="d-flex align-items-center"><i class="'.$noticeData[$i]['icon'].' fa-5x mr-3 text-primary"></i> '.$noticeData[$i]['text'].'</h5></div>
                <div class="col-10 offset-1"></div>
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
<div class="col-12 text-center mb-2 border-bottom">
    <h3><?= ($outHtml ? $boxTrue : $boxFalse) ?></h3>
</div>
<?= $outHtml ?>
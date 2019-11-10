<?php
$outHtml = '';
$boxTrue = '<span data-lang="ui_notice_title"></span>';
$boxFalse = '<span data-lang="ui_notice_title_not"></span>';

for($i = 0; $i < count($noticeData);) {
    $id = $noticeData[$i]['id'];
    if ($id) {
        $html = $noticeData[$i]['html'];
        $date = $noticeData[$i]['date_create'];
        $outHtml .= '
        <div id="notice-id-'.$id.'" class="col-12 white black-text my-1 py-1">
            <div class="row border-bottom my-0 py-0">
                <div class="col-10 offset-1">
                    <div class="row my-0 py-0">
                        <div class="col-4 text-center my-0 py-0"><span class="h6 text-primary"></span></div>
                        <div class="col-4 text-center my-0 py-0"><span class="h6 text-muted">'.$date.'</span></div>
                        <div class="col-4 text-right my-0 py-0"><i style="cursor: pointer;" onclick="userApi.notice.delete('.$id.');" class="fas fa-times fa-sm text-muted"></i></div>
                    </div>
                </div>
                <div class="col-10 offset-1 text-left">'.$html.'</div>
                <div class="col-10 offset-1"></div>
            </div>
        </div>
        ';
    }

    $i++;
}
?>
<div class="col-12 text-center mb-2 border-bottom">
    <h3><?= ($outHtml ? $boxTrue : $boxFalse) ?></h3>
</div>
<?= $outHtml ?>
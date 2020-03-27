<?php
$ui = true;
$warp = "warp-page";
$pageActive['msg'] = 'active';
?>
<div class="col-12 border border-primary rounded">
    <div class="row">
        <div class="col-12 text-center px-0">
            <h3 class="theme-title my-3" data-lang="ui_menu_msg"></h3>
            <hr class="w-100 border-primary my-3 py-0">
        </div>
        <div class="col-12">
            <div class="row h70vh justify-content-center align-items-center">
                <div class="col-10 text-center">
                    <h4 data-lang="ui_msg_there_are_no_dialogs" class="text-muted my-0 py-0"></h4>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
toastr.info(language.data.locale.string_not_found)
</script>
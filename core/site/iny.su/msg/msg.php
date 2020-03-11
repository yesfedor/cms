<?php
$ui = true;
$warp = "warp-page";
$pageActive['msg'] = 'active';
?>
<style>
.h90vh {
    min-height: 90vh;
}
.h80vh {
    min-height: 80vh;
}
</style>
<div class="col-12 border border-primary rounded">
    <div class="row">
        <div class="col-12 text-center px-0">
            <h3 class="theme-title my-3" data-lang="ui_menu_msg"></h3>
            <hr class="w-100 border-primary my-3 py-0">
        </div>
        <div class="col-12">
            <div class="row h80vh justify-content-center align-items-center">
                <div class="col-10 text-center">
                    <h4 class="text-muted my-0 py-0">Когда вы начнете переписку, она появится здесь</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
toastr.info('Модуль отключен')
</script>
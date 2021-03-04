<?php
//do..
?>
<div class="col-12">
    <div class="row">
        <div class="col-12 theme-panel border border-primary rounded">
            <div class="row">
                <div class="col-12 text-left">
                    <h4 class="my-2 text-primary"><b data-lang="ui_settings_menu_security"></b></h4>
                </div>
                <hr class="w-100 my-0 py-0 mb-2 pb-2 border-primary">
                <div class="col-12">
                    <form id="form-settings" class="row">
                        <div class="col-10 offset-1 my-3 py-1">
                            <h4 data-lang="ui_settings_security_by_phone" class="theme-text mb-3"></h4>
                            <h5>
                                <a data-lang="ui_settings_security_show_activity_history" class="d-block mb-2" onclick="return nav.go(this);" href="/?act=activity_history&hash=<?= getAppRootHash() ?>"></a>
                                <a data-lang="ui_settings_security_end_all_sessions" class="d-block mb-2" onclick="return nav.go(this);" href="/?act=logout_all&hash=<?= $hash['logout'] ?>"></a>
                            </h5>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
//do..
</script>
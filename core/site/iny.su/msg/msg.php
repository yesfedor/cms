<?php
$ui = true;
$warp = "warp-page";
$pageActive['msg'] = 'active';
?>
<style>
.msg-cursor-pointer {
    cursor: pointer !important;
}
</style>

<div class="col-12 border border-primary rounded">
    <div class="row">
        <div class="col-12">
            <div id="msg-wrapper" class="row h80vh justify-content-center align-items-center"></div>
        </div>
    </div>
</div>

<script>
    init.js.add('AppMsgDialog', 'wc:AppMsgDialog', 9)
    init.js.add('AppMsgMessage', 'wc:AppMsgMessage', 9)

    if (typeof msg == 'object') msg.init()
    else init.js.add('engine-msg', 'module/msg.js', 9)
</script>
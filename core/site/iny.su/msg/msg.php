<?php
$ui = true;
$warp = "warp-page";
$pageActive['msg'] = 'active';
?>
<style>
.msg-cursor-pointer {
    cursor: pointer !important;
}
.msg-w-max {
    max-width: 50%;
    width: fit-content !important;
}
.msg-expansion-user {
    display: flex;
    align-items: center;
}
.msg-expansion-user--info {
    display: block;
    width: 100% !important;
    float: left !important;
}
.msg-expansion-user--delete {
    display: none;
}
.msg-expansion-user:hover .msg-expansion-user--info {
    width: 90% !important;
}
.msg-expansion-user:hover .msg-expansion-user--delete {
    width: 10% !important;
    display: block;
}
.msg-textarea {
    background: var(--theme-background) !important;
    border: none !important;
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
    init.js.add('AppMsgDialog', 'wc:AppMsgDialog', '0.1.4')
    init.js.add('AppMsgMessage', 'wc:AppMsgMessage', '0.1.6')

    if (typeof msg == 'object') msg.init()
    else init.js.add('engine-msg', 'module/msg.js', '0.2.8')
</script>
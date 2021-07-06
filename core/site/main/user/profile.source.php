<?php
$sourceData['content'] = '
<!-- Profile Header -->
<div class="col-12 mt-1">
    <div class="row my-0 py-0">
        <div class="col-12 text-center">
            <h6 class="theme-title my-0 py-2">Пользователь</h6>
        </div>
        <div class="col-12 text-center"><i class="fas fa-'.$p_source['data']['gender'].' fa-2x theme-icon"></i></div>
        <div class="col-12 text-center"><h6 class="h6 theme-title text-truncate" style="cursor: pointer;" onclick="nav.go(nav.createLink(\'/id'.$p_source['data']['uid'].'\'))">'.$p_source['data']['name'].' '.$p_source['data']['surname'].'</h6></div>
    </div>
</div>
';
$sourceData['size'] = 'large';
?>
<?php
$sourceData['content'] = '
<!-- Profile Header -->
<div class="col-12 mt-1">
    <div class="row my-0 py-0">
        <div class="col-12 text-center">
            <div class="h5 black-text">View account</div>
        </div>
        <div class="col-12 text-center"><i class="fas fa-'.$p_source['data']['gender'].' fa-2x text-primary"></i></div>
        <div class="col-12 text-center"><h6 class="h6 black-text text-truncate" style="cursor: pointer;" onclick="nav.router(\'/id'.$p_source['data']['uid'].'\', true)">'.$p_source['data']['name'].' '.$p_source['data']['surname'].'</h6></div>
    </div>
</div>
';
$sourceData['size'] = 'large';
?>
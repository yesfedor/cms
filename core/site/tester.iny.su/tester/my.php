<?php
$warp = 'warp';

$block_new_test_my = tester_test_get_my(50000);
    if (!$block_new_test_my) $block_new_test_my = 'hide';
?>
<div class="container my-5">
    <div class="row">
        <div id="block-new-test-my" class="col-12">
            <div class="row mt-n2 mb-3 px-2">
                <div class="col-12 primary-color py-3 text-center z-depth-1-half rounded"><span class="white-text h3 my-0">Мои тесты</span></div>
            </div>
            <div id="cards-new-my" class="row mb-5"><?= $block_new_test_my ?></div>
        </div>
    </div>
</div>
<script>
    if ($('#cards-new-my').html() == 'hide') $('#block-new-test-my').hide()
</script>
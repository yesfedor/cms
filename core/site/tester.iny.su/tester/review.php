<?php
$warp = 'warp';

$block_recoms_test = false;
    if (!$block_recoms_test) $block_recoms_test = 'hide';
$block_new_test = tester_test_get_new();
    if (!$block_new_test) $block_new_test = 'hide';
$block_new_test_my = tester_test_get_my(6);
    if (!$block_new_test_my) $block_new_test_my = 'hide';
?>
<div class="container my-5">
    <div class="row px-2">
        <ul class="col-12 nav justify-content-center primary-color-dark z-depth-2 rounded py-3">
            <li class="nav-item">
                <a onclick="return nav.go(this);" class="nav-link" href="/create"><span class="white-text font-weight-bold">Создать тест</span></a>
            </li>
            <li class="nav-item">
                <a onclick="return nav.go(this);" class="nav-link" href="/search"><span class="white-text font-weight-bold">Поиск</span></a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div id="block-recoms-test" class="col-12">
            <div class="row mt-n2 mb-3 px-2">
                <div class="col-12 primary-color py-3 text-center z-depth-1-half rounded"><span class="white-text h3 my-0">Рекомендованные тесты</span></div>
            </div>
            <div id="cards-recoms" class="row mb-5"><?= $block_recoms_test ?></div>
        </div>
        <div id="block-new-test" class="col-12">
            <div class="row mt-n2 mb-3 px-2">
                <div class="col-12 primary-color py-3 text-center z-depth-1-half rounded"><span class="white-text h3 my-0">Новые тесты</span></div>
            </div>
            <div id="cards-new" class="row mb-5"><?= $block_new_test ?></div>
        </div>
        <div id="block-new-test-my" class="col-12">
            <div class="row mt-n2 mb-3 px-2">
                <div class="col-12 primary-color py-3 text-center z-depth-1-half rounded"><span class="white-text h3 my-0">Мои тесты</span></div>
            </div>
            <div id="cards-new-my" class="row mb-3"><?= $block_new_test_my ?></div>
            <div class="row mb-5">
                <div class="col-10 offset-1 text-center my-0 py-2">
                    <h5 class="my-0 py-0"><a class="theme-link" onclick="return nav.go(this);" href="/my">Посмотреть все мои тесты</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    if ($('#cards-recoms').html() == 'hide') $('#block-recoms-test').hide()
    if ($('#cards-new').html() == 'hide') $('#block-new-test').hide()
    if ($('#cards-new-my').html() == 'hide') $('#block-new-test-my').hide()
</script>
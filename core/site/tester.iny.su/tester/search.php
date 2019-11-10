<?php
$warp = 'warp';
if ($url_p1 and $url_p2) {
    switch($url_p1) {
        case 'type':
        $search = 'type-'.$url_p2;
        break;
    }
} else $search = $_GET['query'];
?>
<div class="container my-5">
    <div class="row primary-color-dark z-depth-1 rounded py-4 px-2">
        <div class="col-12 md-form">
            <input value="<?= $search ?>" type="text" id="tester-test-search" class="form-control white-text">
            <label for="tester-test-search" class="white-text px-3">Поиск</label>
        </div>
    </div>
    <div class="row">
        <div id="block-recoms-test" class="col-12">
            <div class="row mt-n2 mb-3 px-2">
                <div class="col-12 primary-color mt-n4 py-3 text-center z-depth-1 rounded"><span id="tester-test-search-title" class="white-text h3 my-0">Посмотрите, что нашлось</span></div>
            </div>
            <div id="tester-test-search-wrap" class="row mb-5"></div>
        </div>
    </div>
</div>
<script>
function testerTestSearch(q) {
    // search test
    $.ajax({
        type: "POST",
        url: "/api.php?_action=tester/search&v=0.1",
        data: {query: q},
        dataType: "json",
        success: function (data) {
            if (data.status == 200) {
                $('#tester-test-search-wrap').html(data.cards)
            }
            if (data.status == 403) {
                toastr.error('Авторизуйтесь')
            }
        }
    });
}
nav.onsearch('change', '#tester-test-search', '/search?query=%q%', '/search', '%q%', () => {
    $('#tester-test-search-title').html('Начните поиск!')
}, () => {
    query = $('#tester-test-search').val()
    if (query != '') {
        $('#tester-test-search-title').html('Посмотрите, что нашлось')
        testerTestSearch(query)
    } else {
        $('#tester-test-search-title').html('Начните поиск!')
        $('#tester-test-search-wrap').html('')
    }
})

<?= ($search ? 'testerTestSearch("'.$search.'")':'') ?>
</script>
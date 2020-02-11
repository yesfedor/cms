<?php
$ui = true;
$warp = "warp-page";
$pageActive['feed'] = 'active';

function blogNewOptionGet() {
    global $AppFeedPostData;
    $dataAll = [
        '0' => [
            'title' => 'Новый сервис',
            'text' => 'Сервис коротких ссылок, необходимый для корректной работы сайта!',
            'poster781x521' => 'https://go.iny.su/uc/cc4ca42/v6f7584/bb549e6e/bd64c099313.jpg',
            'go-link' => 'bl6'
        ],
        '1' => [
            'title' => 'Новый сервис',
            'text' => 'Tester Online - Уникальная система создания тестов на INY.SU!',
            'poster781x521' => 'https://go.iny.su/uc/cc4ca42/v6f7584/ef567538/ffed277ea1d.jpg',
            'go-link' => 'bl7'
        ],
        '2' => [
            'title' => 'Доступны тесты приложения',
            'text' => 'Взгляните на результаты, данные по страницам<br>INY.SU: https://go.iny.su/bnb <br>Landing: https://go.iny.su/bnc <br>Tester Online: https://go.iny.su/bnd',
            'poster781x521' => 'https://go.iny.su/web/file/ogimg/main/dev.png'
        ]
    ];
    $dataAll = array_reverse($dataAll);

    $html = '';
    $AppFeedPostData = [];
    for($i=0; $i<count($dataAll);) {
        $html .= '<feed-post data-id="w'.$i.'"></feed-post>';
        $AppFeedPostData['w'.$i] = [
            'title' => $dataAll[$i]['title'],
            'text' => textLink($dataAll[$i]['text']),
            'poster781x521' => $dataAll[$i]['poster781x521'],
            'go-link' => $dataAll[$i]['go-link']
        ];

        $i++;
    }

    return $html;
}
function blogNewOption() {
    $html = '
    <div class="col-10 theme-panel border border-primary rounded offset-1 mt-0 mb-3 py-2">
        <h4 data-lang="module_news_feed_new_option" class="theme-title my-0 py-0"></h4>
    </div>
    '.blogNewOptionGet().'
    ';

    return $html;
}
function doPostAddMin() {
    global $_SESSION;
    $html = '
    <!-- Add post -->
    <div id="do-post-add-min" onclick="" class="col-10 theme-panel border border-primary rounded offset-1 mt-0 mb-3 py-2 d-none">

    </div>
    ';

    return $html;
}
function post($info) {
    $html = '';

    return $html;
}
?>
<div class="my-3 mt-md-0 col-12 text-center">
    <?= doPostAddMin() ?>
    <?= blogNewOption() ?>
</div>

<script>
AppFeedPostData = <?= json_encode($AppFeedPostData) ?>;
init.js.add('module_AppFeedPost', 'wc:AppFeedPost');
</script>
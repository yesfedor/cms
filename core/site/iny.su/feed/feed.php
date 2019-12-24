<?php
$ui = true;
$warp = "warp-page";
$pageActive['feed'] = 'active';

function blogNewOptionGetCard($data) {
    $html = '
    <div class="col-10 offset-1 mt-0 mb-3 px-0">
        <div class="card">
            <div class="view overlay">
                <img class="card-img-top" src="'.$data['poster781x521'].'" alt="'.$data['text'].'">
                <div class="mask rgba-white-slight"></div>
            </div>
            <div class="card-body">
                <h4 class="card-title">'.$data['title'].'</h4>
                <p class="card-text">'.$data['text'].'</p>
                <button onclick="nav.cc(nav.createLink(\''.$data['go-link'].'\'));" data-lang="text_open" type="button" class="btn btn-primary"></button>
            </div>
        </div>
    </div>
    ';

    return $html;
}
function blogNewOptionGet() {
    $dataAll = [
        '0' => [
            'title' => 'Новый сервис',
            'text' => 'Сервис коротких ссылок, необходимый для корректной работы сайта!',
            'poster781x521' => 'https://go.iny.su/uc/cc4ca42/v6f7584/bb549e6e/bd64c099313.jpg',
            'go-link' => 'bl6'
        ],
        '1' => [
            'title' => 'Новый сервис',
            'text' => 'Online Tester - Уникальная система создания тестов на INY.SU!',
            'poster781x521' => 'https://go.iny.su/uc/cc4ca42/v6f7584/ef567538/ffed277ea1d.jpg',
            'go-link' => 'bl7'
        ]
    ];

    $html = '';
    for($i=0; $i<count($dataAll);) {
        $html .= blogNewOptionGetCard($dataAll[$i]);
        $i++;
    }

    return $html;
}
function blogNewOption() {
    $html = '
    <div class="col-10 white border border-primary rounded offset-1 mt-0 mb-3 py-2">
        <h4 data-lang="module_news_feed_new_option" class="black-text my-0 py-0"></h4>
    </div>
    '.blogNewOptionGet().'
    ';

    return $html;
}
function doPostAddMin() {
    global $_SESSION;
    $html = '
    <!-- Add post -->
    <div id="do-post-add-min" onclick="post.doPostAdd();" class="col-10 white border border-primary rounded offset-1 mt-0 mb-3 py-2 d-none">

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
var post = {
    api: {
        addPost: '/api.php?_action=wall/post.add&v=0.2'
    },
    data: {},
    doPostAdd() {

    }
}
</script>
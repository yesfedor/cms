<?php
function devLocaleCards($locale, $prefix, $idstr) {
    $html = '';

    foreach($idstr as $str) {
        $html .= '<div localetitle="'.$str.'" class="col-12 col-md-4 white border text-center my-2 p-2 rounded"><h4 class="text-primary">'.$str.'</h4>';
        foreach($prefix as $prefix_str) {
            $text = '';
                if ($locale[$prefix_str][$str] != false) $text = $locale[$prefix_str][$str];
                else $text = '<span class="text-danger">NULL</span>';
            $html .= '<h5><span class="text-info">'.$prefix_str.'</span>: <span class="black-text">'.$text.'</span></h5>';
        }
        $html .= '</div>';
    }

    return $html;
}
$warp = "warp";

$langJsonPath = $public.'/api/0.1/lang/_json_/';

$dir = scandir($langJsonPath);
array_shift($dir);
array_shift($dir);

// Локаль: prefix языка -> idstr -> текст
$devAllLocale = [];
// Все prefix языка
$devAllLocales = [];
// Все idstr, без текста
$devAllLocaleKeys  = [];

foreach ($dir as $value) {
    $tmplocale = explode('.', $value)[0];
    array_push($devAllLocales, $tmplocale);
    $tmplocaletext = file_get_contents($langJsonPath.$value);
    $tmplocaledata = json_decode($tmplocaletext, true);
    ksort($tmplocaledata, SORT_NATURAL);
    $tmplocalekeys = array_keys($tmplocaledata);
    $devAllLocaleKeys = array_merge($devAllLocaleKeys, $tmplocalekeys);
    $devAllLocale[$tmplocale] = $tmplocaledata;
}

$devAllLocaleKeys = array_unique($devAllLocaleKeys);

$block = devLocaleCards($devAllLocale, $devAllLocales, $devAllLocaleKeys);
?>
<div class="container my-5">
    <div class="row mb-2">
        <div class="col-12 text-center">
            <h2>Изменение локали</h2>
        </div>
        <div class="col-12 md-form text-center">
            <input id="search" type="search" placeholder="Поиск локали">
        </div>
    </div>
    <div id="devLocaleCards" class="row my-2">
        <?= $block ?>
    </div>
    <div class="row mt-2">
        <div class="col-12 text-center">
            <button onclick="devLocale.render();" class="btn btn-outline-primary btn-rounded">Добавить</button>
            <button onclick="devLocale.save();" class="btn btn-outline-success btn-rounded">Сохранить</button>
        </div>
    </div>
</div>
<script>
devLocale = {
    block: `
        <div class="col-12 col-md-4 white border text-center my-2 p-2 rounded">
            <h4 class="text-primary">idstr</h4>
            <h5><span class="text-info">prefix языка</span>: <span class="black-text">текст</span></h5>
        </div>
    `,
    data: {
        apiPath: '/api.php?_action=lang/save&v=0.1',
        
    },
    newLocale: {},
    init() {
        $('#search').on('input', () => {
            value = $('#search').val()
            if (value != "") {
                $('[localetitle]').hide()
                $('[localetitle *= "' + value + '"]').fadeIn()
            } else {
                $('[localetitle]').fadeIn()
            }
        })
    },
    render() {

    },
    save() {

    }
}
devLocale.init()
</script>
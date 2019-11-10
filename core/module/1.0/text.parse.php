<?php
$lang;

function RusEnding($n, $n1, $n2, $n5) {
    if($n >= 11 and $n <= 19) return $n5;
    $n = $n % 10;
    if($n == 1) return $n1;
    if($n >= 2 and $n <= 4) return $n2;
    return $n5;
}
function textParse($example, $text) {
    $keys = array_keys($example);
    $keysCount = count($keys);

    for($i=0; $i < $keysCount;) {
        //key
        $key = $keys[$i];
        //search
        $search = '{%'.$key.'%}';
        //data
        $data = $example[$key];
        //change
        $text = str_replace($search, $data, $text);

        $i++;
    }

    return $text;
}
function getlangJson() {
    global $lang;
    global $_SESSION;
    global $public;

    $_json_ = $public.'/api/0.1/lang/_json_/';
    $langname = $_SESSION['lang'];
    $file = $_json_.$langname.'.json';
    $lang = json_decode(file_get_contents($file), JSON_UNESCAPED_UNICODE);
}

getlangJson();
?>
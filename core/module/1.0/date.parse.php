<?php
function appDateGetStr() {
    $str = Date('d').'/'.Date('m').'/'.Date('Y').' '.Date('H').':'.Date('i').':'.Date('s');
    return $str;
}
function appDateGetArr() {
    $str = appDateGetStr();
    $arr = appDateParseToArr($str);
    return $arr;
}
function appDateParseToStr($datein=[]) {
    $str = '';

    if ($datein['day'] and $datein['month'] and $datein['year']) {
        $str = $datein['day'].'/'.$datein['month'].'/'.$datein['year'];
    }
    if ($datein['hour'] and $datein['minute'] and $datein['second']) {
        $str = $str.' '.$datein['hour'].':'.$datein['minute'].':'.$datein['second'];
    }

    return $str;
}

function appDateParseToArr($datein='') {
    $ymdhms = explode(' ', $datein);

    if ($ymdhms[0]) $ymd = explode('/', $ymdhms[0]);
    if ($ymdhms[1]) $hms = explode(':', $ymdhms[1]);
 
    $date = [
        'year' => ($ymd[2] ? $ymd[2] : false),
        'month' => ($ymd[1] ? $ymd[1] : false),
        'day' => ($ymd[0] ? $ymd[0] : false),
        'hour' => ($hms[0] ? $hms[0] : false),
        'minute' => ($hms[1] ? $hms[1] : false),
        'second' => ($hms[2] ? $hms[2] : false),
    ];

    return $date;
}

function appDateGetInt($datein) {
    $arr = [];
    if (is_array($datein)) {
        $arr = $datein;
    }
    else {
        $arr = appDateParseToArr($datein);
    }

    $str = $arr['year'].'-'.$arr['month'].'-'.$arr['day'].' '.$arr['hour'].':'.$arr['minute'].':'.$arr['second'];
    $int = strtotime($str);

    return $int;
}
?>
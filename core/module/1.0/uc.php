<?php
function ucGetConfig($type, $hash) {
    global $_SESSION;
    if (!$_SESSION['user']['uid']) return false;

    $uc_p1 = 'c'.iconv_substr(md5($_SESSION['user']['uid']), 0, 6);
    $uc_p2 = 'v'.iconv_substr(md5($_SESSION['user']['uid']), -8, 6);
    $uc_p3 = iconv_substr(md5($uc_p1.$uc_p2.$hash), 0, 8);
    $uc_fn = iconv_substr(md5($hash), 0, 11);

    $structure = $_SERVER['DOCUMENT_ROOT'].'/uc/'.$uc_p1.'/'.$uc_p2.'/'.$uc_p3.'/';
    mkdir($structure, 0777, true);

    switch($type) {
        case 'image':
            $config['path'] = $_SERVER['DOCUMENT_ROOT'].'/uc/'.$uc_p1.'/'.$uc_p2.'/'.$uc_p3.'/'.$uc_fn.'.jpg';
            $config['url'] = 'https://go.iny.su/uc/'.$uc_p1.'/'.$uc_p2.'/'.$uc_p3.'/'.$uc_fn.'.jpg';
        break;
    }
    return $config;
}

function ucSaveImageOne($file, $type) {
    global $_SESSION;
    if (!$_SESSION['user']['uid']) return false;

    if (!$file['name']) return false;

    $errTpl = [
        'expansion' => 'Доступен только .jpg формат',
        'type' => 'Доступен только .jpg формат',
        'server_error' => 'На сервере произошла ошибка, повторите запрос позже',
        'size' => 'Максимальный размер файла 16мб',
    ];

    $f_name = $file['name'];
    $f_type = $file['type'];
    $f_tmp_name = $file['tmp_name'];
    $f_error = $file['error'];
    $f_size = $file['size'];
    $expansion = array_pop(explode('.', $f_name));

    if (($expansion == 'jpg') and ($f_type == 'image/jpeg') and ($f_error == 0) and ($f_size < 16777216 and $f_size > 1)) {

        $config = ucGetConfig('image', md5($file['tmp_name']));
        move_uploaded_file($f_tmp_name, $config['path']);
        $data = $config['url'];
        return $data;

    } else return false;
}

function ucSaveImage($file) {
    global $_SESSION;
    if (!$_SESSION['user']['uid']) return false;

    $photos['uid'] = $_SESSION['user']['uid'];
    $photos['q100'] = ucSaveImageOne($file, 'q100');
    $photos['q10'] = '';
    $photos['qmin'] = '';


    $query = "INSERT INTO `uc_photos` (`id`, `uid`, `q100`, `q10`, `qmin`) VALUES (NULL, :uid, :q100, :q10, :qmin)";
    $var = [
        ':uid' => $photos['uid'],
        ':q100' => $photos['q100'],
        ':q10' => $photos['q10'],
        ':qmin' => $photos['qmin']
    ];
    dbAddOne($query, $var);

    return $photos;
}
?>
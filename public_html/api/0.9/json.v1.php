<?php
if ( !$_REQUEST ) {
    die( 'data error' );
}

$data = [
    "html" => [
        "use" => "$html_use", // 0 or 1 -- отобразить ли html в callback'e
        "id" => "$html_id", //  id элемента в который нужно вставить callback
        "code" => "$html_code", // код, который нужно отобразить в callback'e
    ],
    "js" => [
        "use" => "$js_use", // 0 or 1 -- исользуется ли статус
        "code" => "$js_code" // передать код статуса или 0
    ],
];

if ($bigData) {
    $data = array_merge($data, $bigData);
}

echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>
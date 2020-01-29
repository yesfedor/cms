<?php
$warp = "warp";

if (!$url_p1) echo '<script>nav.go(\'<a href="/"></a>\')</script>';

$tool = '';

switch($url_p1) {
    case 'validation-user-name':
        $min_score = 8;
        $tool = 'validation-user-name';
    break;
    case 'locale':
        $min_score = 256;
        $tool = 'locale';
    break;
    case 'ordered-freelance':
        $min_score = 256;
        $tool = 'ordered-freelance';
    break;
}

if (getUserAccessScore() >= $min_score) {
    $tool_path = $thisSitePath.'tools/'.$tool.'.php';
    include_once($tool_path);
} else {
    $error_html = '
        <div class="container">
            <div class="row">
                <div class="col-12 white border border-danger rounded text-center my-5">
                    <h3 class="h3 text-danger">Access Error</h3>
                </div>
            </div>
        </div>
    ';
    echo $error_html;
}

?>
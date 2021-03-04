<?php
if (!$_POST['id'] and !$_POST['content'] and $_POST['size']) die('Data error');

$id = $_POST['id'];
$title = (($_POST['title'] and $_POST['title'] != 'false') ? $_POST['title'] : false);
$content = $_POST['content'];
$footer = (($_POST['footer'] and $_POST['footer'] != 'false') ? $_POST['footer'] : false);
$size = $_POST['size'];

switch($size) {
    case 'small':
        $size = 'modal-sm';
    break;
    case 'large':
        $size = 'modal-lg';
    break;
    case 'full':
        $size = 'modal-fluid';
    break;
    default:
        $size = 'modal-lg';
    break;
}

$style = 'm'.iconv_substr(md5($id), 0, 4).rand(0, 9);
echo '<style>.'.$style.'{background: '.($_GET['bg'] ? $_GET['bg'] : '#000000bb').';}</style>';
?>
<div id="<?= $id ?>" class="modal <?= $style ?> fade" tabindex="-1" role="dialog" aria-labelledby="<?= $id ?>Label" aria-hidden="true">
    <div class="modal-dialog <?= $size ?>" role="document">
        <div class="modal-content z-depth-0 border border-primary rounded">
            <?= ($title ? '
            <div class="modal-header border-bottom border-primary">
                <h4 class="modal-title w-100" id="'.$id.'Label">'.$title.'</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>':'') ?>
            <div class="modal-body">
            <?= $content ?>
            </div>
            <?=($footer ? '<div class="modal-footer border-primary mt-1 py-1">'.$footer.'</div>':'') ?>
        </div>
    </div>
</div>
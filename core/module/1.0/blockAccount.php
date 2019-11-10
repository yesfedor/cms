<?php
function userApiIsBlock() {
    global $_SESSION;

    if ($_SESSION['user']['block'] != 0) {
        return true;
    }
    return false;
}
function userApiBlockPage() {
    global $_SESSION;

    $html = '';

    switch($_SESSION['user']['block_type']) {
        case 'block':
            $icon = '<i class="fas fa-user-alt-slash text-primary my-3 py-0 fa-3x"></i>';
            $html = '
            <div class="container my-5">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2 white border border-primary my-0 py-1 px-2">
                        <div class="row my-0 py-0">
                            <div class="col-12 mt-0 mb-1 py-0 text-center">'.$icon.'</div>
                            <div class="col-12 mt-0 mb-1 py-0 text-center">
                                <h2 class="text-primary my-0 py-1">Ваша страница заблокирована</h2>
                            </div>
                            <div class="col-12 mt-0 mb-1 py-0 text-center">
                                <h4 class="black-text"><b>'.$_SESSION['user']['name'].'</b>, к сожалению, мы обнаружили злоупотребления, связанные с вашим аккаунтом, и она была заблокированна навсегда.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
        break;
        case 'tempblock':
            $icon = '<i class="fas fa-shield-alt text-primary my-3 py-0 fa-3x"></i>';
            $html = '
            <div class="container my-5">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2 white border border-primary my-0 py-1 px-2">
                        <div class="row my-0 py-0">
                            <div class="col-12 mt-0 mb-1 py-0 text-center">'.$icon.'</div>
                            <div class="col-12 mt-0 mb-1 py-0 text-center">
                                <h2 class="text-primary my-0 py-1">Ваша страница <b>временно</b> заблокирована</h2>
                            </div>
                            <div class="col-12 mt-0 mb-1 py-0 text-center">
                                <h4 class="black-text"><b>'.$_SESSION['user']['name'].'</b>, к сожалению, мы обнаружили злоупотребления, связанные с вашим аккаунтом, и она была заблокированна.</h4>
                                <h4>Вы сможете разблокировать ваш аккаунт не раньше <b>'.$_SESSION['user']['block_date'].'</b></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
        break;
    }

    return $html;
}
?>
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
            $icon = '<i class="fas fa-user-alt-slash theme-title my-3 py-0 fa-3x"></i>';
            $html = '
            <div class="container">
                <div class="row justify-content-center align-items-center h70vh">
                    <div class="col-12 col-md-8 theme-panel border border-primary rounded my-0 py-1 px-2">
                        <div class="row my-0 py-0">
                            <div class="col-12 mt-0 mb-1 py-0 text-center">'.$icon.'</div>
                            <div class="col-12 mt-0 mb-1 py-0 text-center">
                                <h2 class="theme-title my-0 py-1">Ваша страница заблокирована</h2>
                            </div>
                            <div class="col-10 col-lg-8 offset-1 offset-lg-2 mt-0 mb-3 py-0 text-center">
                                <h4 class="theme-text my-0"><b class="theme-title">'.$_SESSION['user']['name'].'</b>, к сожалению, мы обнаружили злоупотребления, связанные с вашим аккаунтом, и она была заблокированна навсегда.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
        break;
        case 'tempblock':
            $icon = '<i class="fas fa-shield-alt theme-title my-3 py-0 fa-3x"></i>';
            $html = '
            <div class="container">
                <div class="row justify-content-center align-items-center h70vh">
                    <div class="col-12 col-md-8 theme-panel border border-primary rounded my-0 py-1 px-2">
                        <div class="row my-0 py-0">
                            <div class="col-12 mt-0 mb-1 py-0 text-center">'.$icon.'</div>
                            <div class="col-12 mt-0 mb-1 py-0 text-center">
                                <h2 class="theme-title my-0 py-1">Ваша страница <b>временно</b> заблокирована</h2>
                            </div>
                            <div class="col-10 col-lg-8 offset-1 offset-lg-2 mt-0 mb-3 py-0 text-center">
                                <h4 class="theme-text my-0"><b class="theme-title">'.$_SESSION['user']['name'].'</b>, к сожалению, мы обнаружили злоупотребления, связанные с вашим аккаунтом, и она была заблокированна.</h4>
                                <h4 class="theme-text my-0">Вы сможете разблокировать ваш аккаунт не раньше <b class="theme-title">'.$_SESSION['user']['block_date'].'</b></h4>
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
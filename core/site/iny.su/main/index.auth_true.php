<?php
$warp = 'warp';
if ($_SESSION['domain-redirect']) {
    $domainRedirect = $_SESSION['domain-redirect'];
    if ($domainInfo[$domainRedirect]['appname'] and !$_SESSION['url-redirect']) {
        $domainRedirect = $domainInfo[$domainRedirect]['domain'];
        
        $jwt_user_data = [
            'uid' =>  $_SESSION['user']['uid'],
            'name' => $_SESSION['user']['name'],
            'surname' => $_SESSION['user']['surname'],
            'mail' => $_SESSION['user']['mail']
        ];
        $jwt_auth = jwt_encode($_SESSION['user']['uid'], $jwt_user_data);

        echo '
        <script>
            toastr.info("Domain Redirect..")
            window.location = "//'.$domainRedirect.'/?auth='.$jwt_auth.'&_origin='.$domainBase['main'].'"
        </script>
        ';
    } elseif ($_SESSION['url-redirect']) {
        echo '
        <script>
            toastr.info("Domain Redirect..")
            window.location = "'.$_SESSION['url-redirect'].'"
        </script>
        ';
    } else {
        echo mainLocation();
    }

    $_SESSION['domain-redirect'] = false;
    $_SESSION['url-redirect'] = false;
}
if ($_SESSION['page-redirect']) {
    echo '<script>nav.go(nav.createLink(\''.$_SESSION['page-redirect'].'\'));</script>';
    $_SESSION['page-redirect'] = false;
}
if (!$_GET['act']) echo mainLocation();
?>
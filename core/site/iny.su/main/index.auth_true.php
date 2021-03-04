<?php
$warp = 'warp';
if ($_SESSION['domain-redirect']) {
    $domainRedirect = $_SESSION['domain-redirect'];
    if ($domainInfo[$domainRedirect]['appname'] and !$_SESSION['url-redirect']) {
        $domainRedirect = $domainInfo[$domainRedirect]['domain'];
        echo '
        <script>
            toastr.info("Domain Redirect..")
            window.location = "//'.$domainRedirect.'/?auth=true&_origin='.$domainBase['main'].'"
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
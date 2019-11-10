<?php 
http_response_code(200);

$p_header = $objectPath.'headers/'.$domainBase[appGetDomain()].'/default.php';
$p_footer = $objectPath.'footers/'.$domainBase[appGetDomain()].'/default.php';
?>
<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title><?= $titleю.' |'.strtoupper(appGetDomain()) ?></title>
        <meta name="description" content="<?= $description ?>">
        <meta name="keywords" content="<?= $keywords ?>">
        <meta name="yandex-verification" content="4516b047d1a2799c" />
        <?= openGraph() ?>

        <link rel="stylesheet" href="/web/css/theme/<?= $domainBase[appGetDomain()] ?>.css?version=11">
    </head>
    <body>
        <application id="app">
            <!-- User-Agent: <?= $_SERVER['HTTP_USER_AGENT'] ?> -->
            <header class="sticky-top"><?= ($isBots ? include_once($p_header) : '') ?></header>
            <main id="warp"><?= ($isBots ? include_once($p_module) : '') ?></main>
            <footer class="page-footer font-small theme-primary"><?= ($isBots ? include_once($p_footer) : '') ?></footer>
        </application>
        <common class="row"><?= $common_block ?></common>
        <script>
        var config = {
            visit: 'user_defaut',
            lang: '<?= $_SESSION['lang'] ?>',
            domain: '<?= appGetDomain() ?>',
            info: <?= json_encode($domainInfo[appGetDomain()], JSON_UNESCAPED_UNICODE) ?>,
            user: {auth: <?= ($_SESSION['user']['uid'] ? 'true':'false') ?>,  uid: '<?= $_SESSION['user']['uid'] ?>', url: '<?= $_SESSION['user']['url'] ?>', name: '<?= $_SESSION['user']['name'] ?>', surname: '<?= $_SESSION['user']['surname'] ?>', gender: '<?= $_SESSION['user']['gender'] ?>', access: '<?= $_SESSION['user']['access'] ?>', mail_verfy: '<?= $_SESSION['user']['mail_verfy'] ?>', number_verfy: '<?= $_SESSION['user']['number_verfy'] ?>'},
            hash: {appRoot:'<?= getAppRootHash() ?>', logout: '<?= $hash['logout'] ?>'}
        }
        </script>
        <script src="/web/js/core/init.js?version=21"></script>
    </body>
</html>
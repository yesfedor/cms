<?php
http_response_code(200);
$p_header = $objectPath.'headers/'.$domainBase[appGetDomain()].'/default.php';
$p_footer = $objectPath.'footers/'.$domainBase[appGetDomain()].'/default.php';

$html_comment_block = '<!-- '.PHP_EOL.' ADMIN: https://vk.com/yesfedor '.PHP_EOL.' CONTACT: https://vk.com/inysu '.PHP_EOL.' --> ';
?>
<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <meta name="yandex-verification" content="4516b047d1a2799c" />

        <noscript><meta http-equiv="refresh" content="0; URL=/app.noscript.php"></noscript>

        <title><?= $title ?></title>
        <meta name="description" content="<?= $description ?>">
        <meta name="keywords" content="<?= $keywords ?>">
        <?= openGraph() ?>
        
        <link id="app-css-theme-data" rel="stylesheet" href="/web/css/theme/<?= $domainBase[appGetDomain()].$_SESSION['theme'] ?>.css?version=20">
        <link rel="stylesheet" href="/web/css/themes.css?version=1">
        <link rel="stylesheet" href="/web/css/@offline.css">
    </head>
    <body>
        <!-- User-Agent: <?= $_SERVER['HTTP_USER_AGENT'] ?> -->
        <application id="app">
            <header class="sticky-top"><?= include_once($p_header) ?></header>
            <main id="warp"><?= include_once($p_module) ?></main>
            <footer class="page-footer font-small theme-primary"><?= include_once($p_footer) ?></footer>
        </application>
        <script>
        var config = {
            visit: 'user_defaut',
            lang: '<?= $_SESSION['lang'] ?>',
            domain: '<?= appGetDomain() ?>',
            info: <?= json_encode($domainInfo[appGetDomain()], JSON_UNESCAPED_UNICODE) ?>,
            user: {auth: <?= ($_SESSION['user']['uid'] ? 'true':'false') ?>,  uid: '<?= $_SESSION['user']['uid'] ?>', url: '<?= $_SESSION['user']['url'] ?>', name: '<?= $_SESSION['user']['name'] ?>', surname: '<?= $_SESSION['user']['surname'] ?>', gender: '<?= $_SESSION['user']['gender'] ?>', access: '<?= $_SESSION['user']['access'] ?>', mail_verfy: '<?= $_SESSION['user']['mail_verfy'] ?>', number_verfy: '<?= $_SESSION['user']['number_verfy'] ?>'},
            hash: {appRoot:'<?= getAppRootHash() ?>', logout: '<?= $hash['logout'] ?>'}
        }
        var servers = {
            api: '',
            cdn: ''
        }
        </script>
        <script src="/web/js/core/init.js?version=128"></script>
        <script src="/web/js/module/@offline.js"></script>
    </body>
</html>
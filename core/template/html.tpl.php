<?php
http_response_code(200);

$common_block = <<<common_block
    <div class="col-12 text-center"><div class="row py-1 px-1"><div class="col-12 my-5 text-center"><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div></div></div>
common_block;

$html_comment_block = '<!-- '.PHP_EOL.' ADMIN: https://vk.com/yesfedor '.PHP_EOL.' CONTACT: https://vk.com/inysu '.PHP_EOL.' --> ';
?>
<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
        <application id="app">
            <header class="sticky-top"></header>
            <main id="warp"></main>
            <footer class="page-footer font-small theme-primary"></footer>
        </application>
        <common class="row"><?= $common_block ?></common>
        <script>
        let config = {
            visit: 'user_defaut',
            lang: '<?= $_SESSION['lang'] ?>',
            domain: '<?= appGetDomain() ?>',
            info: <?= json_encode($domainInfo[appGetDomain()], JSON_UNESCAPED_UNICODE) ?>,
            user: {auth: <?= ($_SESSION['user']['uid'] ? 'true':'false') ?>,  uid: '<?= $_SESSION['user']['uid'] ?>', url: '<?= $_SESSION['user']['url'] ?>', name: '<?= $_SESSION['user']['name'] ?>', surname: '<?= $_SESSION['user']['surname'] ?>', gender: '<?= $_SESSION['user']['gender'] ?>', access: '<?= $_SESSION['user']['access'] ?>', mail_verfy: '<?= $_SESSION['user']['mail_verfy'] ?>', number_verfy: '<?= $_SESSION['user']['number_verfy'] ?>'},
            hash: {appRoot:'<?= getAppRootHash() ?>', logout: '<?= $hash['logout'] ?>'}
        }
        let servers = {
            api: '',
            cdn: ''
        }
        </script>
        <script src="/web/js/core/init.js?version=168"></script>
        <script src="/web/js/module/@offline.js"></script>
    </body>
</html>
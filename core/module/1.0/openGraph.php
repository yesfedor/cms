<?php
function openGraph($site_name='') {
    global $title;
    global $og_type;
    global $description;
    global $domainBase;
    global $og_image;
    global $domainInfo;

    if (!$site_name) $site_name = 'INY.SU';

    $faviconSitePath = '';
    switch($domainInfo[appGetDomain()]['appname']) {
        default:
        case 'main':
            $faviconSitePath = 'main';
        break;
    }


    $data = '
        <meta property="og:title" content="'.$title.'">
        <meta property="og:type" content="'.$og_type.'">
        <meta property="og:description" content="'.$description.'">
        <meta property="og:site_name" content="'.$site_name.'">
        <meta property="og:url" content="'.appGetUrl().'">
        <meta property="og:image" content="https://'.appGetDomain().'/web/file/ogimg/'.$domainBase[appGetDomain()].'/'.$og_image.'?v=1">
        <link rel="image_src" href="https://'.appGetDomain().'/web/file/ogimg/'.$domainBase[appGetDomain()].'/'.$og_image.'?v=1" />
        <meta name="twitter:image" content="https://'.appGetDomain().'/web/file/ogimg/'.$domainBase[appGetDomain()].'/'.$og_image.'?v=1" />

        <link rel="apple-touch-icon" sizes="180x180" href="/web/file/favicon/'.$faviconSitePath.'/apple-touch-icon.png?option=with_brain_v2">
        <link rel="icon" type="image/png" sizes="32x32" href="/web/file/favicon/'.$faviconSitePath.'/favicon-32x32.png?option=with_brain_v2">
        <link rel="icon" type="image/png" sizes="192x192" href="/web/file/favicon/'.$faviconSitePath.'/android-chrome-192x192.png?option=with_brain_v2">
        <link rel="manifest" href="/web/file/favicon/'.$faviconSitePath.'/site.webmanifest?option=with_brain_v2">
        <link rel="mask-icon" href="/web/file/favicon/'.$faviconSitePath.'/safari-pinned-tab.svg?option=with_brain_v2" color="#4b515d">
        <link rel="shortcut icon" href="/web/file/favicon/'.$faviconSitePath.'/favicon.ico?option=with_brain_v2">
        <meta name="apple-mobile-web-app-title" content="INY">
        <meta name="application-name" content="INY">
        <meta name="msapplication-TileColor" content="#ff0000">
        <meta name="msapplication-TileImage" content="/web/file/favicon/'.$faviconSitePath.'/mstile-144x144.png?option=with_brain_v2">
        <meta name="msapplication-config" content="/web/file/favicon/'.$faviconSitePath.'/browserconfig.xml?option=with_brain_v2">
        <meta id="header-app-theme-color" name="theme-color" content="#ffffff">

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(68637091, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
        });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/68637091" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    ';

    return $data;
}
?>
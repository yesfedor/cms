<?php
function getUserAgentFromDB() {
    $query = "SELECT * FROM user_agent_visits WHERE id > :query_data LIMIT 500";
    $var = [
        ':query_data' => '0'
    ];

    $output = dbGetAll($query, $var);

    debug($output);
}
function saveUserAgentToDB($user_agent) {
    $query_if = "SELECT * FROM user_agent_visits WHERE agent = :user_agent";
    $var_if = [
        ':user_agent' => $user_agent
    ];
    $output_if = dbGetOne($query_if, $var_if);

    if (!$output_if['id']) {
        $query = "INSERT INTO user_agent_visits (`id`, `agent`) VALUES (NULL, :user_agent)";
        $var = [
            ':user_agent' => $user_agent
        ];
        dbAddOne($query, $var);
    }
}
function isBot($save=false) {
    global $_SERVER;

    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    if (empty($user_agent)) {
        return false;
    }
    
    if ($save) saveUserAgentToDB($user_agent);
    
    $bots = [
        // Yandex
        'YandexBot', 'YandexAccessibilityBot', 'YandexMobileBot', 'YandexDirectDyn', 'YandexScreenshotBot',
        'YandexImages', 'YandexVideo', 'YandexVideoParser', 'YandexMedia', 'YandexBlogs', 'YandexFavicons',
        'YandexWebmaster', 'YandexPagechecker', 'YandexImageResizer', 'YandexAdNet', 'YandexDirect',
        'YaDirectFetcher', 'YandexCalendar', 'YandexSitelinks', 'YandexMetrika', 'YandexNews',
        'YandexNewslinks', 'YandexCatalog', 'YandexAntivirus', 'YandexMarket', 'YandexVertis',
        'YandexForDomain', 'YandexSpravBot', 'YandexSearchShop', 'YandexMedianaBot', 'YandexOntoDB',
        'YandexOntoDBAPI', 'YandexTurbo', 'YandexVerticals',

        // Google
        'Googlebot', 'Googlebot-Image', 'Mediapartners-Google', 'AdsBot-Google', 'APIs-Google',
        'AdsBot-Google-Mobile', 'AdsBot-Google-Mobile', 'Googlebot-News', 'Googlebot-Video',
        'AdsBot-Google-Mobile-Apps',

        // Other
        'Mail.RU_Bot', 'bingbot', 'Accoona', 'ia_archiver', 'Ask Jeeves', 'OmniExplorer_Bot', 'W3C_Validator',
        'WebAlta', 'YahooFeedSeeker', 'Yahoo!', 'Ezooms', 'Tourlentabot', 'MJ12bot', 'AhrefsBot',
        'SearchBot', 'SiteStatus', 'Nigma.ru', 'Baiduspider', 'Statsbot', 'SISTRIX', 'AcoonBot', 'findlinks',
        'proximic', 'OpenindexSpider', 'statdom.ru', 'Exabot', 'Spider', 'SeznamBot', 'oBot', 'C-T bot',
        'Updownerbot', 'Snoopy', 'heritrix', 'Yeti', 'DomainVader', 'DCPbot', 'PaperLiBot', 'StackRambler',
        'msnbot', 'msnbot-media', 'msnbot-news', 'vkShare',
    ];

    foreach ($bots as $bot) {
        if (stripos($user_agent, $bot) !== false) {
            return $bot;
        }
    }

    return false;
}

$isBots = isBot();

if ($_GET['site'] == 'show_user_agents') {
    getUserAgentFromDB();
}
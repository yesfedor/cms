<?php
function checkDomain($inputDomain) {
    global $engineRoute;
    global $appRouterErrorShowFalse;
    global $domainInfo;
    global $domainBase;
    
    // return codes
    $allow = 'allow'; // valid domain
    $deny = 'deny'; // the domain is not available
    $invalid = 'invalid'; // the domain was not validated

    // RegExp check
    $regexp_0 = '/^[ ]{1,}$/'; // на пробел
        if (preg_match($regexp_0, $inputDomain)) return $invalid;
    $regexp_1 = '/^id[0-9]{1,}$/'; // на id
        if (preg_match($regexp_1, $inputDomain)) return $invalid;
    $regexp_2 = '/^[0-9]{1,}$/'; // только цифры
        if (preg_match($regexp_2, $inputDomain)) return $invalid;
    $regexp_3 = '/^(?!..*[_]{2,})(?=^[^-_].*[^-_]$)[\w\s-]{5,30}$/'; // domain valid
        if (!preg_match($regexp_3, $inputDomain)) return $invalid;

    // include Route module
    $appRouterErrorShowFalse = true;
    include_once($engineRoute);

    // check route
    $domain = $domainBase['main'];
    if ($domainInfo[$domain]['ssl']) $ssl = 'https://';
        else $ssl = 'http://';
    $url = [
        'ssl' => $ssl,
        'domain' => $domain,
        'domainType' => $domainBase[$domain],
        'page' => $inputDomain,
        'p1' => 'null',
        'p2' => 'null',
        'p3' => 'null',
        'p4' => 'null',
        'p5' => 'null'
    ];

    $p = appRouter($url);
    
    if ($p['page']) return $deny;
    else return $allow;
}
?>
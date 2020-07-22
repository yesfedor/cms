<?php
function getDomainSetting() {
    $domainSetting = [];

    $query = "SELECT * FROM site WHERE id != :id";
    $var = [
        ':id' => 0,
    ];
    
    $domainConfig = dbGetAll($query, $var);
    $domainCount = count($domainConfig);
    
    for ($i=0; $i<$domainCount; $i++) {
        $ssl =  $domainConfig[$i]['ssl'];
        $domain = $domainConfig[$i]['domain'];
        $appname = $domainConfig[$i]['appname'];
        $assess = $domainConfig[$i]['assess'];
        $logo = $domainConfig[$i]['logo'];
        $session = $domainConfig[$i]['session'];

        $domainSetting['base'][$domain] = $appname;
        $domainSetting['base'][$appname] = $domain;
        $domainSetting['info'][$domain] = [
            'ssl' => $ssl,
            'appname' => $appname,
            'domain' => $domain,
            'assess' => $assess,
            'logo' => $logo,
            'session' => $session
        ];
        $domainSetting['info'][$appname] = [
            'ssl' => $ssl,
            'appname' => $appname,
            'domain' => $domain,
            'assess' => $assess,
            'logo' => $logo,
            'session' => $session
        ];
    }

    return $domainSetting;
}
$domainSetting = getDomainSetting();
$domainBase = $domainSetting['base'];
$domainInfo = $domainSetting['info'];
$domain_session = $domainSetting['info'][appGetDomain()]['session'];
?>

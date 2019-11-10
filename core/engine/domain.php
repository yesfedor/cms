<?php
function getDomainSetting() {
    $domainSetting = [];

    $query = "SELECT * FROM site WHERE id != :id";
    $var = [
        ':id' => 0,
    ];
    
    $domainConfig = dbGetAll($query, $var);
    $domainCount = count($domainConfig);
    
    for ($i=0;$i<$domainCount;) {
        $ssl =  $domainConfig[$i]['ssl'];
        $domain = $domainConfig[$i]['domain'];
        $appname = $domainConfig[$i]['appname'];
        $assess = $domainConfig[$i]['assess'];
        $logo = $domainConfig[$i]['logo'];

        $domainSetting['base'][$domain] = $appname;
        $domainSetting['base'][$appname] = $domain;
        $domainSetting['info'][$domain] = [
            'ssl' => $ssl,
            'appname' => $appname,
            'domain' => $domain,
            'assess' => $assess,
            'logo' => $logo
        ];
        $domainSetting['info'][$appname] = [
            'ssl' => $ssl,
            'appname' => $appname,
            'domain' => $domain,
            'assess' => $assess,
            'logo' => $logo
        ];
        
        $i++;
    }

    return $domainSetting;
}

$domainSetting = getDomainSetting();
$domainBase = $domainSetting['base'];
$domainInfo = $domainSetting['info'];
?>
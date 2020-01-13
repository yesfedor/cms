<?php
function appRouterError($code) {
    global $err403;
    global $err404;
    global $err403mod;
    global $err404mod;
    global $moduleMode;
    
    if (!$moduleMode) $type = 'page';
    else $type = 'module';

    switch($type) {
        case 'page':
            switch($code) {
                case 403:
                    include_once($err403);
                break;
                case 404:
                    include_once($err404);
                break;
            }
        break;
        case 'module':
            switch($code) {
                case 403:
                    include_once($err403mod);
                break;
                case 404:
                    include_once($err404mod);
                break;
            }
        break;
    }
}

function appRouterMeta($page_id) {
    $query = "SELECT * FROM page_meta WHERE page_id = :page_id";
    $var = [
        ':page_id' => $page_id
    ];

    $meta = dbGetOne($query, $var);
    if ($meta['page_id']) return $meta;
    else return false;
}

function appRouterPageAccess($page) {
    if (getUserAccessScore() >= $page['access']) return true;
    else return false;
}

function appRouterAlias($url_page, $domainType) {
    $query_alias = "SELECT * FROM page WHERE `site-appname` = :appname and `alias` != :alias";
    $var_alias = [
        ':appname' => $domainType,
        ':alias' => ''
        ];

    $alias = dbGetAll($query_alias, $var_alias);
    $aliasCount = count($alias);

    $search = false;

    for($i=0;$i<$aliasCount;) {
        if (!$search) {
            $page = $alias[$i];
            $aliasLen = iconv_strlen($page['alias']);

            if ($page['alias'] == iconv_substr($url_page, 0, $aliasLen)) {
                $search = true;
                $query_data = iconv_substr($url_page, $aliasLen);

                # search alias_structure_sheet & alias_structure_column
                $query_structure = "SELECT * FROM {$page['alias_structure_sheet']} WHERE {$page['alias_structure_column']} = :query_data";
                $var_structure[':query_data']  = $query_data;
                $data = dbGetOne($query_structure, $var_structure);
                if ($data) {
                    $search = true;
                    $p['data'] = $data;
                    $p['page'] = $page;
                    $p['meta'] = appRouterMeta($page['id']);
                }
            } else {
                # search alias_structure_sheet & alias_structure_column_str
                $query_structure = "SELECT * FROM {$page['alias_structure_sheet']} WHERE {$page['alias_structure_column_str']} = :query_data";
                $var_structure[':query_data']  = $url_page;
                $data = dbGetOne($query_structure, $var_structure);
                if ($data) {
                    $search = true;
                    $p['data'] = $data;
                    $p['page'] = $page;
                    $p['meta'] = appRouterMeta($page['id']);
                }
            }
        }

        $i++;
    }

    if ($p['data']) {
        return $p;
    } else return false;
}

function appRouterPage($url) {
    $query = "SELECT * FROM page WHERE `site-appname` = :appname and url_page = :url_page";
    $var = [
        ':appname' => $url['domainType'],
        ':url_page' => $url['page']
    ];

    $page = dbGetOne($query, $var);
    switch($page['url_type']) {
        case 'page':
            $p['page'] = $page;
        break;
        case 'p1':
            if ($url['p1'] == $page['url_p1']) {$p['page'] = $page;}
            else {
                $query .= " and url_p1 = :url_p1";
                $var[':url_p1'] = $url['p1'];
                $pageStep = dbGetOne($query, $var);
            }
        break;
        case 'p2':
            if ($url['p1'] == $page['url_p1'] and $url['p2'] == $page['url_p2']) {$p['page'] = $page;}
            else {
                $query .= " and url_p1 = :url_p1 and url_p2 = :url_p2";
                $var[':url_p1'] = $url['p1'];
                $var[':url_p2'] = $url['p2'];
                $pageStep = dbGetOne($query, $var);
            }
        break;
        case 'p3':
            if ($url['p1'] == $page['url_p1'] and $url['p2'] == $page['url_p2'] and $url['p3'] == $page['url_p3']) {$p['page'] = $page;}
            else {
                $query .= " and url_p1 = :url_p1 and url_p2 = :url_p2 and url_p3 = :url_p3";
                $var[':url_p1'] = $url['p1'];
                $var[':url_p2'] = $url['p2'];
                $var[':url_p3'] = $url['p3'];
                $pageStep = dbGetOne($query, $var);
            }
        break;
        case 'p4':
            if ($url['p1'] == $page['url_p1'] and $url['p2'] == $page['url_p2'] and $url['p3'] == $page['url_p3'] and $url['p4'] == $page['url_p4']) {$p['page'] = $page;}
            else {
                $query .= " and url_p1 = :url_p1 and url_p2 = :url_p2 and url_p3 = :url_p3 and url_p4 = :url_p4";
                $var[':url_p1'] = $url['p1'];
                $var[':url_p2'] = $url['p2'];
                $var[':url_p3'] = $url['p3'];
                $var[':url_p4'] = $url['p4'];
                $pageStep = dbGetOne($query, $var);
            }
        break;
        case 'p5':
            if ($url['p1'] == $page['url_p1'] and $url['p2'] == $page['url_p2'] and $url['p3'] == $page['url_p3'] and $url['p4'] == $page['url_p4'] and $url['p5'] == $page['url_p5']) {$p['page'] = $page;}
            else {
                $query .= " and url_p1 = :url_p1 and url_p2 = :url_p2 and url_p3 = :url_p3 and url_p4 = :url_p4 and url_p5 = :url_p5";
                $var[':url_p1'] = $url['p1'];
                $var[':url_p2'] = $url['p2'];
                $var[':url_p3'] = $url['p3'];
                $var[':url_p4'] = $url['p4'];
                $var[':url_p5'] = $url['p5'];
                $pageStep = dbGetOne($query, $var);
            }
        break;
    }

    if ($pageStep) {$p['page'] = $pageStep;}

    if ($p['page']) return $p;
    else return false;
    
}

function appRouterReturn($p) {
    if ($p['page']['id']) {
        if (appRouterPageAccess($p['page'])) {
            $p['page']['ui'] = json_decode($p['page']['ui_json'], true);
            $p['meta'] = appRouterMeta($p['page']['id']);
            return $p;
        } else appRouterError(403);
    } else appRouterError(404);
}

function appRouter($url) {
    $p = false;

    # поиск в page
    $p = appRouterPage($url);
    if ($p['page']) return appRouterReturn($p);

    #поиск в alias
    $p = appRouterAlias($url['page'], $url['domainType']);
    if ($p['page']) return appRouterReturn($p);

    if (!$p['page']['id']) appRouterError(404);
}

$domain = appGetDomain();
if ($domainInfo[$domain]['ssl']) $ssl = 'https://';
    else $ssl = 'http://';
$url_page = urldecode($_GET['page']);
    if (!$url_page) $url_page = 'main';
$url_p1 = ($_GET['parameterOne'] ? urldecode($_GET['parameterOne']) : 'null');
$url_p2 = ($_GET['parameterTwo'] ? urldecode($_GET['parameterTwo']) : 'null');
$url_p3 = ($_GET['parameterThree'] ? urldecode($_GET['parameterThree']) : 'null');
$url_p4 = ($_GET['parameterFour'] ? urldecode($_GET['parameterFour']) : 'null');
$url_p5 = ($_GET['parameterFive'] ? urldecode($_GET['parameterFive']) : 'null');
$url = [
    'ssl' => $ssl,
    'domain' => $domain,
    'domainType' => $domainBase[$domain],
    'page' => $url_page,
    'p1' => $url_p1,
    'p2' => $url_p2,
    'p3' => $url_p3,
    'p4' => $url_p4,
    'p5' => $url_p5
];

$p = appRouter($url);

if ($isBots) $p_tpl = $templatePath.$p['page']['template'].'-bot.tpl.php';
else $p_tpl = $templatePath.$p['page']['template'].'.tpl.php';

if ($p['page']['module_auth'] == 'false') $p_module = $thisSitePath.$p['page']['module'].'.php';
else {
    if ($_SESSION['user']['uid']) $p_module = $thisSitePath.$p['page']['module'].'.auth_true.php';
    else $p_module = $thisSitePath.$p['page']['module'].'.auth_false.php';
}

if ($p['page']) {
    include_once($enginePageMeta);
    
    if (!$moduleMode) include_once($p_tpl);
    else {
        include_once($sitePrepareFile);
    }
}
?>
<?php
function url($url, $textStr='', $idStr='', $classStr='', $ajax=true) {
    global $_SESSION;

    $appDomain = appGetDomain();

    $textStr = ($textStr ? $textStr:'<span class="text-truncate">'.$url.'</span>');
    $idStr = ($idStr  ? ' id="'.$idStr.'" ':'');
    $classStr = ($classStr  ? ' class="'.$classStr.'" ':'');
    $ajaxStr = (true ? ' onclick="return nav.go(this);" ':' target="_blank" rel="noopener noreferrer" ');
    
    $url_arr = parse_url($appDomain);
    
    if ($url_arr['path'] != $appDomain and !$ajax) {
        $url = '/url.php?to='.urlencode($url).'&hash='.md5(($_SESSION['user']['uid'] ? $_SESSION['user']['uid'] + $_SESSION['cahe']['random'] : $_SESSION['cahe']['random']));
    }

    $url = '<a href="'.$url.'" '.$idStr.$classStr.$ajaxStr.'>'.$textStr.'</a>';

    return $url;
}
function textLink($text) {
    // The Regular Expression filter
    $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
    // Check if there is a url in the text
    if(preg_match_all($reg_exUrl, $text, $url)) {
    // make the urls hyper links
        for($i=0; $i < count($url[0]);) {
            $url_pattern = preg_quote($url[0][$i]);
            $url_pattern = '/'.str_replace("/", "\/", $url_pattern).'/';
            $text = preg_replace($url_pattern, url($url[0][$i], $url[0][$i], false, false, false), $text);
            $i++;
        }

        return $text;
    
    } else {
    // if no urls in the text just return the text
    return $text;
    
    }
}
?>
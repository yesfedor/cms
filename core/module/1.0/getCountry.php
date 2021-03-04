<?php
function getUserCountry() {
    $ip = getIP();
    $country = geoip_country_name_by_name($ip);
    return $country;    
}
?>
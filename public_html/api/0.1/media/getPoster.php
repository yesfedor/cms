<?php
$kp_id = (int) $_GET['kp_id'];
$url = 'http://st.kinopoisk.ru/images/film_big/'.$kp_id.'.jpg';
$result = file_get_contents($url);

header('Content-type:image/png');
echo $result;
?>
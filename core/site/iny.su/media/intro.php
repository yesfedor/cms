<?php
$ui = true;
$warp = "warp-page";

// redirect to media.iny.su
if ($_GET['kpid']) $redirect = 'https://media.iny.su/watch?kpid='.$_GET['kpid'];
else $redirect = 'https://media.iny.su';
?>
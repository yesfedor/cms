<?php
$ui = false;
$warp = "warp";

$kpid = $_GET['kpid'];
if (!$kpid) $redirect = '/main';
else $_SESSION['url-redirect'] = 'https://media.iny.su/watch?kpid='.$kpid;
?>
<meta http-equiv="refresh" content="5; url=https://iny.su/auth?to=media.iny.su&_origin=false&api=true&kpid=<?= $kpid ?>">
<div class="container-fluid">
    <div class="row justify-content-center align-items-center h100vh">
        <div class="theme-primary col-10 rounded text-center py-3">
            <h4 class="theme-title py-3"><a class="theme-link" href="https://iny.su/auth?to=media.iny.su&_origin=false&api=true&kpid=<?= $kpid ?>">Войдите</a> для доступа к подписке и списку избранного</h4>
            <h4 class="theme-title py-3">ИЛИ</h4>
            <h4 class="theme-title py-3"><a class="theme-link" href="https://iny.su/auth?to=media.iny.su&_origin=false&api=true&kpid=<?= $kpid ?>">Зарегистрируйтесь</a> для просмотра фильмов и сериалов</h4>
            <h5 class="theme-text py-3">автоматическое перенаправление: <span id="timer" class="theme-text">5</span></h5>
        </div>
    </div>
</div>
<script>
let $timer = document.getElementById('timer')
let timer = setInterval(() => {
    if ($timer.textContent == 0) clearInterval(timer)
    else $timer.textContent = $timer.textContent - 1
}, 1000);
</script>
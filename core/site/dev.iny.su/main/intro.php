<?php
$warp = "warp";
?>
<div class="container">
    <div class="row">
        <div class="col-12 white border border-primary rounded text-center my-5">
            <h2 class="mt-4 mb-3"><b class="text-primary px-2">INY</b> <span class="primary-color white-text rounded p-2">Developer</span></h2>
            <hr class="w-100 border-primary my-3">
            <div class="row">
                <div class="col-12 col-lg-6 text-center mb-4">
                    <ul class="list-group">
                        <li class="list-group-item primary-color white-text">App Settings</li>
                        <a onclick="return nav.go(this);" href="/root" class="list-group-item list-group-item-action">Назначение прав доступа</a>
                        <a onclick="return nav.go(this);" href="/tools/locale" class="list-group-item list-group-item-action">Настройка локали</a>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 text-center mb-4">
                    <ul class="list-group">
                        <li class="list-group-item primary-color white-text">App Tools</li>
                        <a onclick="return nav.go(this);" href="/tools/validation-user-name" class="list-group-item list-group-item-action">Модерация имен пользователей</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
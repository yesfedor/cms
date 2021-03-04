<?php
$warp = 'warp';
?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center my-3 py-3">
            <div class="row">
                <div class="col-12 mb-3">
                    <h3 class="black-text my-0">Краткое руководство и лимиты в тестере</h3>
                </div>
                <div class="col-12 mb-3">
                    <div class="row">
                        <div class="col-10 offset-1 mb-3">
                            <ul class="list-group mb-3">
                                <li id="about-review" class="list-group-item theme-header theme-nav-link">Главная</li>
                                <li class="list-group-item">Рекомендуемые тесты начнут отображаться после 60 дней активного использования тестера, однако это может произойти раньше, если Вас пригласит автор закрытого теста</li>
                                <li class="list-group-item">В блоке "Новые тесты" показывается не больше 6 недавно созданных тестов</li>
                                <li class="list-group-item">Блок "Мои тесты" показывает не все Ваши тесты, а только 6 последних</li>
                            </ul>
                            <ul class="list-group mb-3">
                                <li id="about-create" class="list-group-item theme-header theme-nav-link">В процессе создания теста</li>
                                <li class="list-group-item">Название теста обязательно для заполнения, максимальная длина названия теста - <code>256 сим.</code></li>
                                <li class="list-group-item">Поля "Описание" и "Необходимое для выполнения" допустимо оставить пустыми, максимальная длина полей - <code>2048 сим.</code></li>
                                <li class="list-group-item">Заголовок вопроса - содержит главный вопрос, либо сам вопрос, если он не превышает максимальной длины - <code>512 сим.</code></li>
                                <li class="list-group-item">Пояснение вопроса - сожержит тело вопроса или сам вопрос, максимальная длина - <code>2048 сим.</code></li>
                                <li class="list-group-item">Объяснение вопроса - может быть пустым, либо содержать как краткое объяснение, так и подробное. Максимальная длина - <code>2048 сим.</code></li>
                                <li class="list-group-item">Подсказка к вопросу - может содержать, например "дайте ответ в кг" - либо округление числа то кого-то разряда. Может иметь общий вид "Введите ответ". максимальная длина - <code>От 64 до 512 сим.</code></li>
                                <li class="list-group-item">Ответ - содежит правильный овтет на вопрос, либо номера правильного(ых) пунктов максимальная длина - <code>512 сим.</code></li>
                            </ul>
                            <ul class="list-group mb-3">
                                <li id="about-test" class="list-group-item theme-header theme-nav-link">Решение теста</li>
                                <li class="list-group-item">Здесь Вы можете решить созданный Вами, либо кем-то другим тест</li>
                                <li class="list-group-item">Если Вы являетесь автором теста, то сможете посмотреть его решения, также Вам будут приходить уведомления о новых решениях</li>
                                <li class="list-group-item">Удаляя тест <a onclick="return nav.away(this);" href="https://iny.su/admin">Администрация сайта</a> не сможет его восстановить, также модераторы имеют право удалить тест БЕЗ Вашего согласия!</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
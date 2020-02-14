<?php
$landingsMetaPath = $thisSitePath.'landings/a-meta.php';
$landingsMeta = [
    'title' => '',
    'description' => '',
    'keywords' => '',
    'og_image' => '',
];
switch($url_p1) {
    default:
        $landingsMeta['title'] = 'Error 301';
    break;
    case 'yesfedor':
        $landingsMetaPath = $thisSitePath.'landings/a-meta.php';
        $landingsMeta = [
            'title' => 'Фёдор Гаранин (@yesfedor)',
            'description' => 'Фёдор Гаранин фрилансер, выпускающий различные проекты для упрощенного выполнения интересных задач в сфере социальных сетей, и не только. Contact me: @yesfedor, My site INY.SU',
            'keywords' => 'Фёдор Гаранин, @yesfedor, фрилансер, заказать сайт, сайт под ключ',
            'og_image' => 'iam.png',
        ];
    break;
    case 'tester-welcome':
        $landingsMetaPath = $thisSitePath.'landings/a-meta.php';
        $landingsMeta = [
            'title' => 'Tester Online, INY.SU',
            'description' => 'Создание и прохождение тестов онлайн',
            'keywords' => 'Создать тест, пройти тест',
            'og_image' => 'landings.png',
        ];
    break;
    case 'for-all-mankind':
        $landingsMetaPath = $thisSitePath.'landings/a-meta.php';
        $landingsMeta = [
            'title' => 'Сериал Ради всего человечества (2019) | Apple TV+ | Смотреть онлайн',
            'description' => 'Сериал Ради всего человечества / For All Mankind (2019). Американский фантастический и драматический сериал. В нём в жанре альтернативной истории будет показано, «что бы случилось, если бы космическая гонка не закончилась».',
            'keywords' => 'Сериал Ради всего человечества, For All Mankind, сериал, 2019, apple tv+',
            'og_image' => 'welcome.png',
        ];
    break;
    case 'fannalinur':
        $landingsMetaPath = $thisSitePath.'landings/a-meta.php';
        $landingsMeta = [
            'title' => 'Алия Зиннюрова (@fannalinur)',
            'description' => 'Алия Зиннюрова предлагает профессиональные компетенции в области создания фирменного стиля и всего графического образа компании, наружной и полиграфической рекламы, веб-дизайна и упаковки. Ознакомьтесь с портфолио и давайте поработаем вместе!. Дизайн логотипов, любой полиграфии, наружной рекламы, транспорта, сайтов и лендингов, упаковка.',
            'keywords' => 'Алия Зиннюрова, fannalinur, aliyuushaa, создания фирменного стиля, веб дизайн',
            'og_image' => 'about.png',
        ];
    break;
    case 'vel0ur':
        $landingsMetaPath = $thisSitePath.'landings/a-meta.php';
        $landingsMeta = [
            'title' => 'Анастасия Легостаева - Велюр (@vel0ur)',
            'description' => 'Фотографирю. Красиво. Стильно. Only Lutsk. Instagram: @velour_ph, Обо мне: Анастасия Легостаева фотограф..',
            'keywords' => 'фотосессия, красивый профиль, красивое фото, Анастасия Велюр, vel0ur, velour_phб, Lutsk',
            'og_image' => 'landings.png',
        ];
    break;
}
?>
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
}
?>
<?php
function tester_get_types($id=0) {
    global $_SESSION;

    $types = [
        '34' => [
            'en'=>'Algebra',
            'ru'=>'алгебра'
        ],
        '1' => [
            'en'=>'Archaeology',
            'ru'=>'археология'
        ],
        '2' => [
            'en'=>'Art',
            'ru'=>'изобразительное искусство'
        ],
        '3' => [
            'en'=>'Biology',
            'ru'=>'биология'
        ],
        '4' => [
            'en'=>'Botany',
            'ru'=>'ботаника'
        ],
        '5' => [
            'en'=>'Calculus',
            'ru'=>'математический анализ'
        ],
        '6' => [
            'en'=>'Chemistry',
            'ru'=>'химия'
        ],
        '7' => [
            'en'=>'Computer science',
            'ru'=>'информатика'
        ],
        '8' => [
            'en'=>'Drama',
            'ru'=>'драматургия'
        ],
        '9' => [
            'en'=>'Economics',
            'ru'=>'экономика'
        ],
        '10' => [
            'en'=>'English',
            'ru'=>'английский'
        ],
        '11' => [
            'en'=>'French',
            'ru'=>'французский'
        ],
        '12' => [
            'en'=>'Geography',
            'ru'=>'география'
        ],
        '13' => [
            'en'=>'Geology',
            'ru'=>'геология'
        ],
        '14' => [
            'en'=>'Geometry',
            'ru'=>'геометрия'
        ],
        '15' => [
            'en'=>'German',
            'ru'=>'немецкий'
        ],
        '16' => [
            'en'=>'Gym',
            'ru'=>'гимнастика'
        ],
        '17' => [
            'en'=>'Health',
            'ru'=>'охрана здоровья'
        ],
        '18' => [
            'en'=>'History',
            'ru'=>'история'
        ],
        '19' => [
            'en'=>'Home economics',
            'ru'=>'домоводство'
        ],
        '20' => [
            'en'=>'Keyboarding',
            'ru'=>'машинопись'
        ],
        '21' => [
            'en'=>'Language arts',
            'ru'=>'словесность'
        ],
        '22' => [
            'en'=>'Literature',
            'ru'=>'литература'
        ],
        '23' => [
            'en'=>'Math',
            'ru'=>'математика'
        ],
        '24' => [
            'en'=>'Music',
            'ru'=>'музыка'
        ],
        '25' => [
            'en'=>'Physical Education',
            'ru'=>'физкультура'
        ],
        '26' => [
            'en'=>'Physics',
            'ru'=>'физика'
        ],
        '27' => [
            'en'=>'Psychology',
            'ru'=>'психология'
        ],
        '28' => [
            'en'=>'Reading',
            'ru'=>'чтение'
        ],
        '29' => [
            'en'=>'Science',
            'ru'=>'наука'
        ],
        '30' => [
            'en'=>'Social studies',
            'ru'=>'социология, обществознание'
        ],
        '31' => [
            'en'=>'World geography',
            'ru'=>'мировая география'
        ],
        '32' => [
            'en'=>'Writing',
            'ru'=>'письменность, письменная речь'
        ],
        '33' => [
            'en'=>'MORE',
            'ru'=>'Другое'
        ]
    ];

    if ($id) return $types[$id][$_SESSION['lang']];
    else return $types;
}

function tester_create_get_select_types() {
    global $_SESSION;

    $types = tester_get_types();

    $option = '';

    foreach($types as $key => $val) {
        $text = $val[$_SESSION['lang']];
        $option .= '<option value="'.$key.'">'.$text.'</option>'; 
    }

    $html = '
        <select id="tester-data--test-type" class="mdb-select md-form col-10 offset-1 colorful-select dropdown-primary" searchable="Поиск..">
            <option value="none" disabled selected>Выберите тип теста</option>
            '.$option.'
        </select>
    ';

    return $html;
}

function tester_poster_gradient($id=false) {
    $gradients = [
        'blue-gradient', 'night-fade-gradient', 'young-passion-gradient', 'rainy-ashville-gradient', 'lady-lips-gradient', 'winter-neva-gradient', 'dusty-grass-gradient', 'mean-fruit-gradient', 'purple-gradient', 'deep-blue-gradient', 'purple-gradient',
    ];

    if ($id !== false) return $gradients[$id];
    else return $gradients;
}

function tester_create_get_select_poster() {
    $gradients = tester_poster_gradient();
    $option = '';
    foreach($gradients as $key => $val) {
        $option .= '<option data-far="circle fa-lg '.$val.' white-text" value="'.$key.'">'.$val.'</option>'; 
    }
    $html = '
        <select id="tester-data--test-poster" class="mdb-select md-form col-10 offset-1 colorful-select dropdown-primary">
            <option value="0" disabled selected>Выберите цвет постера</option>
            '.$option.'
        </select>
    ';
    return $html;
}

function tetser_get_author($author_uid) {
    $getUserInfoUrl = 'https://api.iny.su/api.php?_action=user/getInfo&v=0.1&uid='.$author_uid;
    $author_info = json_decode(file_get_contents($getUserInfoUrl), true);
        if ($author_info['uid']) $author = $author_info['name'].' '.$author_info['surname'];
        else $author = 'Пользователь удалён';
        
    return $author;
}

function tester_get_card_tpl($data) {
    $author = tetser_get_author($data['author_uid']);

    $html = '
        <div class="col-12 col-md-6 col-lg-4 p-2">
            <div class="card p-2">
                <div class="view overlay">
                    <img class="card-img-top rounded" src="/uc/f5d1278e8109edd94e1e4197e04873b9/5dd2199a.png" alt="Card image test">
                    <div class="mask '.tester_poster_gradient($data['poster']).' rounded" style="opacity: 1;">
                        <div class="row h-100">
                            <div class="col-12 d-flex justify-content-center align-self-center mt-n2">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h5 class="mb-2"><a onclick="return nav.away(this);" class="white-text h5" href="https://iny.su/id'.$data['author_uid'].'">'.$author.'</a></h5>
                                        <h4 class="my-3"><a onclick="return nav.go(this);" class="white-text h4" href="/search/type/'.$data['type'].'">'.tester_get_types($data['type']).'</a></h4>
                                        <h6 class="text-white-50 mt-2 h6">'.$data['date'].'</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center p-2">
                    <h5 class="card-title text-truncate">'.$data['title'].'</h5>
                    <p class="card-text">'.$data['description'].'</p>
                    <a onclick="return nav.go(this);" href="/test'.$data['id'].'" class="btn btn-rounded btn-primary">Пройти тест</a>
                </div>
            </div>
        </div>
    ';

    return $html;
}

function tester_test_opt_default() {
    $opt = [
        'showAnswers' => true, // показывать ответы
        'notifications' => true, // отправлять уведомления о решении
        'repeated' => true, // можно ли решить тест повторно
        'overTime' => false, // макс. время на решения в секундах
    ];
}

function tester_test_opt($opt) {
    if (is_array($opt)) {
        return json_encode($opt, JSON_UNESCAPED_UNICODE);
    } else {
        return json_decode($opt, true);
    }
}

function tester_test_get_new() {
    $query = "SELECT * FROM tester_tests WHERE id != :id ORDER BY id DESC LIMIT 6";
    $var = [
        ':id' => 0
    ];
    $cards = dbGetAll($query, $var);
    $html = '';
    for($i=0;$i<count($cards);) {
        $html .= tester_get_card_tpl($cards[$i]);
        $i++;
    }
    return $html;
}

function tester_test_get_my() {
    global $_SESSION;
    $query = "SELECT * FROM tester_tests WHERE author_uid = :id ORDER BY id DESC LIMIT 6";
    $var = [
        ':id' => $_SESSION['user']['uid']
    ];
    $cards = dbGetAll($query, $var);
    $html = '';
    for($i=0;$i<count($cards);) {
        $html .= tester_get_card_tpl($cards[$i]);
        $i++;
    }
    return $html;
}

function getFullOption($tests_id, $question_id) {
    $query = "SELECT * FROM tester_option WHERE	tests_id = :tests_id and question_id = :question_id ORDER BY id ASC";
    $var = [
        ':tests_id' => $tests_id,
        ':question_id' => $question_id
    ];
    $option = dbGetAll($query, $var);
    return $option;
}

function getFullTest($test) {
    $test['opt'] = json_decode($test['opt'], true);

    $query = "SELECT * FROM tester_question WHERE tests_id = :tests_id ORDER BY id ASC";
    $var = [
        ':tests_id' => $test['id']
    ];
    $test['question'] = dbGetAll($query, $var);
    
    for($i=0;$i<count($test['question']);) {
        $test['question'][$i]['option'] = getFullOption($test['id'], $test['question'][$i]['id']);
        $i++;
    }

    return $test;
}

function tester_search_test($q, $search_by_type=false) {
    $result = '';
    if ($q) {
        if ($search_by_type) {
            $query = "SELECT * FROM tester_tests WHERE type = :q";
            $var = [
                ':q' => $q
            ];
        } else {
            $query = "SELECT * FROM tester_tests WHERE title LIKE :q or description LIKE :q or type = :q";
            $var = [
                ':q' => '%'.$q.'%'
            ];
        }
        
        $data = dbGetAll($query, $var);
        if ($data) {
            for($i=0; $i<count($data);) {
                $result .= tester_get_card_tpl($data[$i]);
                $i++;
            }
        } else {
            $result = '<script>$("#tester-test-search-title").html("Нет подходящих тестов");</script>';
        }
    } else {
        $result = '<script>$("#tester-test-search-title").html("Задан пустой запрос");</script>';
    }
    return ['html'=>$result, 'count'=>count($data)];
}

function tester_test_get_id($id) {
    $query = "SELECT * FROM tester_tests WHERE id = :id";
    $var = [
        ':id' => $id
    ];
    $test = dbGetOne($query, $var);
    if ($test['author_uid']) {
        return getFullTest($test);
    } else return false;
}

function tester_test_decisions($tests_id) {
    $query = "SELECT * FROM tester_answers WHERE tests_id = :tests_id";
    $var = [
        ':tests_id' => $tests_id
    ];
    $data = dbGetAll($query, $var);
    return $data;
}
?>
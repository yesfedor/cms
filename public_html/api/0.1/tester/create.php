<?php
$public = $_SERVER['DOCUMENT_ROOT'];
$private = mb_substr($_SERVER['DOCUMENT_ROOT'], 0, -12);
$enginePath = $private.'/core/engine/';
$engine_build = $enginePath.'engine.php';

$fastMode = true;
include_once($engine_build);

//config
$bigData = [];
$html_use = '0';
$html_id = '0';
$html_code = '0';
$js_use = '0';
$js_code = '0';

//code
$fnTester = $thisSitePath.'main/fn.php';
include_once($fnTester);

class createTest {
    protected $gradients;
    protected $testTypes;
    protected $title;
    protected $description;
    protected $explanation;
    protected $type;
    protected $opt;
    protected $poster;
    protected $question;

    public $uid = 0; 
    public $status = 1024;

    public function __construct($test, $gradients, $testTypes) {
        $this->gradients = $gradients;
        $this->testTypes = $testTypes;

        $this->title = $test['title'];
        $this->description = $test['description'];
        $this->explanation = $test['explanation'];
        $this->type = $test['type'];
        $this->opt = $test['opt'];
        $this->poster = $test['poster'];
        $this->question = $test['question'];
    }
    public function check() {
        /*  Error: 1,4 */
        if ($this->status == 1024) $this->checkBase();
        /* Callback unsupported */
        if ($this->status == 1024) $this->checkSetting();
        /* Error 10 */
        if ($this->status == 1024) $this->checkQuestion();
         /* Success 1024 */
        if ($this->status == 1024) $this->save();
    }
    private function checkBase() {
        /* Title */
        if ($this->title and iconv_strlen($this->title) > 3 and iconv_strlen($this->title) <= 32) {
            //ok
        } else $this->status = 1;

        /* Type */
        if ($this->type) {
            if (isset($this->testTypes[$this->type]['ru'])) {
                return;
            } else $this->status = 4;
        } else $this->status = 4;
    }
    private function checkSetting() {
        if ($this->opt['showAnswers'] != 'true' and $this->opt['showAnswers'] != 'false') {
            $this->status = 6;
            return;
        }
        if ($this->opt['notifications'] != 'true' and $this->opt['notifications'] != 'false') {
            $this->status = 7;
            return;
        }
        if ($this->opt['repeated'] != 'true' and $this->opt['repeated'] != 'false') {
            $this->status = 8;
            return;
        }
        if (!($this->opt['overTime'] == 0 and $this->opt['overTime'] <= 18000)) {
            $this->status = 9;
            return;
        }
    }
    private function checkQuestion() {
        if (count($this->question) > 51) {
            $this->status = 10;
            return;
        }
        for($i=0; $i<count($this->question);) {
            $que = $this->question[$i];
            $title = $que['title'];
                if (!($title and iconv_strlen($title) <= 256)) {
                    $this->status = 10;
                    return;
                }
            $description = $que['description'];
                if (!($title and iconv_strlen($description) <= 256)) {
                    $this->status = 10;
                    return;
                }
            $explanation = $que['explanation'];
                if (!($title and iconv_strlen($explanation) <= 256)) {
                    $this->status = 10;
                    return;
                }
            $answer = $que['answer'];
                if (!($title and iconv_strlen($answer) <= 256)) {
                    $this->status = 10;
                    return;
                }
            $type = $que['type'];
                if (!($type == 'text' or $type == 'longtext' or $type == 'option' or $type == 'multioption')) {
                    $this->status = 10;
                    return;
                }
            $option = $que['option'];
            if (count($option) > 21) {
                $this->status =  21;
                return;
            }
            for($j=0;$j<count($option);) {
                $opt = $option[$j];
                $text = $option['text'];
                    if (!($title and iconv_strlen($title) <= 128)) {
                        $this->status = 10;
                        return;
                    }
                $j++;
            }

            $i++;
        }
    }
    private function save() {
        /* Create tester_tests */
        $test_id = false;
        $query = "INSERT INTO `tester_tests` (`id`, `url`, `author_uid`, `title`, `description`, `explanation`, `type`, `opt`, `poster`, `date`) VALUES (NULL, NULL, :author_uid, :title, :description, :explanation, :type, :opt, :poster, :date)";
        $var = [
            ':author_uid' => $this->uid,
            ':title' => htmlspecialchars($this->title),
            ':description' => htmlspecialchars($this->description),
            ':explanation' => htmlspecialchars($this->explanation),
            ':type' => $this->type,
            ':opt' => json_encode($this->opt),
            ':poster' => $this->poster,
            ':date' => appDateGetStr()
        ];
        $test_id = dbAddOne($query, $var);

        if ($test_id) {
            for($iq=0; $iq<count($this->question);) {
                $q = $this->question[$iq];
                
                $query = "INSERT INTO `tester_question` (`id`, `tests_id`, `title`, `description`, `explanation`, `answer`, `type`) VALUES (NULL, :tests_id, :title, :description, :explanation, :answer, :type)";
                $var = [
                    ':tests_id' => $test_id,
                    ':title' => htmlspecialchars($q['title']),
                    ':description' => htmlspecialchars($q['description']),
                    ':explanation' => htmlspecialchars($q['explanation']),
                    ':answer' => htmlspecialchars($q['answer']),
                    ':type' => $q['type'],
                ];
                $q_id = dbAddOne($query, $var);

                if ($q_id) {
                    for($k=0;$k<count($q['option']);) {
                        $text = $q['option'][$k]['text'];
                        $query = "INSERT INTO `tester_option` (`id`, `tests_id`, `question_id`, `text`) VALUES (NULL, :tests_id, :question_id, :text)";
                        $var = [
                            ':tests_id' => $test_id,
                            ':question_id' => $q_id,
                            ':text' => htmlspecialchars($text),
                        ];
                        dbAddOne($query, $var);

                        $k++;
                    }
                }

                $iq++;
            }
        }

    }
    public function getStatus() {
        return $this->status;
    }
}

if ($_SESSION['user']['uid']) {
    $test = $_POST['test'];

    $result = new createTest($test, tester_poster_gradient(), tester_get_types());
    $result->uid = $_SESSION['user']['uid'];
    $result->check();

    $bigData['test_status'] = $result->getStatus();
} else {
    $bigData['test_status'] = 'auth';
}

//return
$json_v1 = $public.'/api/0.1/json.v1.php';
include_once($json_v1);
?>
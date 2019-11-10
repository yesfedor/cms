<?php

class Person {
    public $name = '';
    public $surname = '';
    public $age = '18';
    public $satiety = 98;
    public $passport_id = '';

    public function __construct($data) {
        $this->name = $data['name'];
        $this->surname = $data['surname'];
        $this->age = $data['age'];
        $this->satiety = $data['satiety'];
        $this->passport_id = $data['passport_id'];
    }
    public function eating($eatPlus) {
        $this->satiety += $eatPlus;

        if ($this->satiety == 100) {
            echo 'Я сыт и чувствую себя прекрасно<br>';
        }
        if ($this->satiety < 51) {
            echo 'Я все еще голоден!<br>';
        }
        if ($this->satiety > 100) {
            echo 'Кажется, я слишком много съел..<br>';
             $this->satiety = 100;
        }

        echo 'Ам-ням, я поел, теперь моя сытость равна: '.$this->satiety.'<br><br>';
    }
}

$personData1 = [
    'name' => 'Вася',
    'surname' => 'Петров',
    'age' => '18',
    'satiety' => 98,
    'passport_id' => 'country01-state01-id000AAA000-2'
];

$person1 = new Person($personData1);
$person1->eating(5);
$person1->eating(-55);
$person1->eating(1);
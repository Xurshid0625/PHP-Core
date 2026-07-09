<?php

$array = [
    'Salom qqlesa',
    'ikkinchismi',
    23.33333,
    true
];

$array2 = array('Salom qqlesa',
    'ikkinchismi',
    23.33333,
    true
);

//print_r($array);


class Car
{
    public $color;
    public $model;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function message()
    {
        return "My car is a " . $this->color . " " .$this->model . "!";
    }
}

$myCar = new Car("Black", "BYD");

//echo $myCar->message();


$gap = 'salom, mening ismim Xurshid';

//echo strlen($gap);

//echo str_replace('mening', 'my', $gap);

//echo str_word_count($gap);

//echo strrev($gap);

//echo strpos($gap, 'mening');

//
//$math = rand(1, 100);
//
//echo $math;

//
//define('RANG', 'yashil');
//
//echo RANG;

$a = 20;
$b = 201;

//$value = $a + $b;
//
//echo $value;

if($a == $b) {
    echo 'a teng b ga';
} elseif($a > $b) {
    echo 'a b dan katta';
} else {
    echo 'a teng emas b ga';
}
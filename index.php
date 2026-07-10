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
//
//if($a == $b) {
//    echo 'a teng b ga';
//} elseif($a > $b) {
//    echo 'a b dan katta';
//} else {
//    echo 'a teng emas b ga';
//}xurshid.jira2006
//
//$rang = 'red';
//
//switch($rang) {
//    case 'red';
//        echo 'qizil';
//        break;
//    case 'greee';
//        echo 'yashil';
//        break;
//   default;
//         echo 'yoq';
//}

//for ($x = 1; $x <= 100; $x++) {
//    if ($x == 6) {
//        continue;
//    }
//    echo $x . '<br>';
//}

//$x = 1;
//while($x <= 10) {
//    if ($x == 8) {
//        break;
//    }
//    echo $x . '<br>';
//    $x++;
//}


//$sons = [1, 2, 3, 4, 5];
//
//$age = array("ali"=>"20", "asil"=>"22");
//
//foreach($age as $name => $age) {
//    echo $name . ' - ' . $age . '<br>';
//}

//$x = 1;
//do {
//    echo $x . '<br>';
//    $x++;
//} while ($x <= 5);

//functions

//function names($name) {
//    echo 'ism' . ' ' . $name . 'ga teng' . '<br>';
//}
//
//names('Xurshid');
//names('Ali');

function qoshish($x, $y)
{

    $result =  $x + $y;
    return $result;
}

$nat = qoshish(20, 30);
 echo $nat;



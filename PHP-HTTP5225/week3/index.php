<?php



// $currentTime = date('H');
$currentTime = 13;

function ZooManage($currentTime)
{
    if ($currentTime >= 5 && $currentTime <= 9) {
        echo "The Animal should have breakfast!";
    } else if ($currentTime >= 12 && $currentTime <= 14) {
        echo "The Animal should have Lunch!";
    } elseif ($currentTime >= 19 && $currentTime <= 21) {
        echo "The Animal should have dinner!";
    } else {
        echo "The Animals are not being fed!";
    }
}

ZooManage($currentTime);

echo "<br>";



$number = 10;

function MagicNumber($number)
{
    if ($number % 3 == 0) {
        echo "Fizz";
    } elseif ($number % 5 == 0) {
        echo "Buzz";
    } elseif ($number % 3 == 0 && $number % 5 == 0) {
        echo "FizzBuzz";
    } else {
        echo "The Magic Number is $number";
    }
}

MagicNumber($number);



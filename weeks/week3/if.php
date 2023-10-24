<?php

//if statements
//if else statements
//if elseif else statements

$temp = 55;
if($temp <= 60){
    echo "It is a semi-warm day!";
} else {
    echo "It may be getting warmer.";
}
echo "<br>";
$newtemp = 81;
if($newtemp <= 60){
    echo "Not a very warm day.";
} elseif($newtemp <= 70) {
    echo "It's getting warmer.";
} elseif($newtemp <= 80) {
    echo "We might be going to the beach.";
} else {
    echo "We will <b>definitely</b> be going to the beach!.";
}
echo "<br>";
echo "<h2> This exercise will be about a salary, bonus, and sales.</h2>";

//A salary of 95000 anually
//Sales above 100000 accrue a bonus.

// 100000: 5%
// 120000: 10%
// 140000: 15%
// 150000: 20%

$salary = 95000;
$sales = 99999;

if($sales <= 99999){
    echo "Sorry you did not earn a bonus.";
} elseif ($sales <= 119999) {
    $salary *= 1.05;
    echo '$'.number_format($salary, 2).' dollars.';
} elseif ($sales <= 139999) {
    $salary *= 1.1;
    echo '$'.number_format($salary, 2).' dollars.';
} elseif ($sales <= 149999) {
    $salary *= 1.15;
    echo '$'.number_format($salary, 2).' dollars.';
} else {
    $salary *= 1.2;
    echo 'Awesome, your salary plus 20% bonus totals $'.number_format($salary, 2).' dollars.';
}
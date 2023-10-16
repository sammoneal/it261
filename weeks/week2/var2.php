<?php

$name = 'Olga';
$first_name = 'Olga';
$last_name = 'Smith';
$name .= 'Smith';
echo $name;
echo '<br>';

$color = 'red';
echo $color;
echo '<br>';

echo 'Olga\'s favorite color is '.$color.' ';
echo '<br>';

$x = 20;
$y = 5;
echo $x;
echo '<br>';
$x = 100;
$x /= 10;
echo $x;
echo '<br>';
echo '<h3>Our product, quantity, and tax exercise.</h3>';
$product = 120;
$quantity = 5;
$total = $product * $product;
$total *= 1.097;
echo $total;
echo '<br>';

echo '<h3>Format the number to show two decimal places</h3>';
echo '<br>';
$total_friendly = number_format($total, 2);
echo 'We have a total of <b>$'.$total_friendly.'</b> dollars.';






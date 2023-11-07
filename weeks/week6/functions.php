<?php

function subheading($text) {
    echo "<h2>". $text ."</h2><br>";
}

function sayHello() {
    echo "Hello";
}

sayHello();

subheading("Cube");

function cube($num) {
    return $num**3;
}

echo cube(5);

subheading("Area");

function area($w, $h) {
    return $w*$h;
}

echo area(5,12);

subheading("Temperature Conversion");

function celsius_converter($temp) {
    return ($temp * 9/5) + 32;
}

echo celsius_converter(100);

subheading("Returning an array");

function area_volume($a, $b, $c) {
    return array($a*$b, $a*$b*$c);
}

$my_array = area_volume(1,2,3);
echo $my_array[0];
echo "<br>";
echo $my_array[1];

list($area, $volume) = area_volume(2,3,4);
echo $area;
echo "<br>";
echo $volume;

subheading('Navigation');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

function make_links($nav) {
    $result = '<ul>';
    foreach ($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $result .= '<li><a class="current" href="'. $key .'">'. $value .'</a></li>';
        } else {
            $result .= '<li><a href="'. $key .'">'. $value .'</a></li>';
        }
    }
    $result .= "</ul>";
    return $result;
}

echo make_links($nav);

subheading("Array to string conversion");

$cars = array('toyota', 'honda', 'ford');

echo implode(', ', $cars);












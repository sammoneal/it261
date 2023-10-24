<?php

//wine array

$wines = array(
    'Cabernet',
    'Merlot',
    'Syrah',
    'Malbac',
    'Red Blend'
);

//cannot echo the array, need to echo array elements with foreach

echo '<ul>';
foreach ($wines as $wine) {
    echo '<li>'.$wine.'</li>';
};
echo '</ul>';

echo '<h2>TV and Movies list which will have both a key and a value</h2>';

$shows = [
    'Apple TV' => 'Severance',
    'Apple TV' => 'For All Mankind',
    'Showtime' => 'City on a Hill',
    'Showtime' => 'Homeland',
    'Movie' => 'Top Gun Maverick',
    'HBO Max' => 'Hacks',
];

echo '<ul>';
foreach ($shows as $key => $value) {
    echo '<li> <b>' . $key . '</b>' . $value . '</li>';
};
echo '</ul>';

echo '<h2>Navigation with key and value pairs</h2>';

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

echo '<ul>';
foreach ($nav as $key => $value) {
    echo '<li> <a href="'.$key .'">'. $value .'</a></li>';
};
echo '</ul>';

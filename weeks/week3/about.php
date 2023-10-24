<?php

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

echo '<h2>The index page will have unique styling</h2>';

// define a constant
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// if this page is the index then add special styling
echo '<ul>';
foreach ($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        echo '<li><a style="color:red;" href="'.$key .'">'. $value .'</a></li>';
    } else {
        echo '<li><a style="color:green;" href="'.$key .'">'. $value .'</a></li>';
    }
}
echo '</ul>';

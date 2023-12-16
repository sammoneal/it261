<?php

define("THIS_PAGE", basename($_SERVER['PHP_SELF']));

switch (THIS_PAGE) {
  case 'index.php':
    $title = 'TrekFans';
    $body = 'inner';
    break;
  
  case 'about.php':
    $title = 'About TrekFans';
    $body = 'about inner';
    break;
  
  case 'daily.php':
    $title = "Quark's Bar";
    $body = 'daily inner';
    break;
  
  case 'movies.php':
    $title = 'Star Trek Movies Database';
    $body = 'project inner';
    break;
  
  case 'contact.php':
    $title = 'Contact TrekFans';
    $body = 'contact inner';
    break;

  case 'view.php':
    $title = 'Movie Details';
    $body = 'view inner';
    break;

  case 'register.php':
    $title = 'Register User';
    $body = 'register inner';
    break;

  case 'login.php':
    $title = 'Login User';
    $body = 'login inner';
    break;
  
  }

  $nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Menu',
    'movies.php' => 'Movies',
    'contact.php' => 'Contact',
  );

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title><?php echo $title; ?></title>
  </head>
  <body class="<?php echo $body; ?>">
    <header>
      <div class="inner-header">
        <a href="index.php"
          ><img id="logo" src="./images/logo.png" alt="logo"
        /></a>
        <p class="greeting"><?php if(isset($username) && isset($rank) && isset($last_name)){ echo "Service Record: {$rank} {$last_name}"; }; ?></p>
        <nav>
          <ul>
            <?php
            foreach ($nav as $key => $value) {
              if(THIS_PAGE == $key) {
                  echo '<li><a style="color:yellow;" href="'.$key .'">'. $value .'</a></li>';
              } else {
                  echo '<li><a style="color:lightblue;" href="'.$key .'">'. $value .'</a></li>';
              }
            }
            ?>
          </ul>
        </nav>
      </div>
    </header>
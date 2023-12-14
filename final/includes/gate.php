<?php

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $rank = $_SESSION['rank'];
    $last_name = $_SESSION['last_name'];
} else {
    header('Location:login.php');
}
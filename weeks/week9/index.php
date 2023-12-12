<?php

session_start();

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
} else {
    header('Location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body> 
    <h1>Index</h1>
    <?php echo '<h2>Hello '.$username.'!</h2>'; ?>
    <div><a href="login.php">Login as another user</a></div>
    <div><a href="register.php">Register another user</a></div>
    <?php include("./includes/validator.php"); ?>
</body>
</html>
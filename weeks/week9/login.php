<?php
include('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body> 
    <div class="page-container">
        <h1>Login</h1>
        <div class="form-container">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method ="post">
                <label>Username</label>
                <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username'])?>">
                <label>Password</label>
                <input type="password" name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password'])?>">
                <button type="submit" name="login_user" class="btn">Log In</button>
                <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>'">Clear</button>
            </form>
            <?php include('errors.php'); ?>
        </div>
        <a href="register.php">Don't have an account?</a>
    </div>
    <?php include("./includes/validator.php"); ?>
</body>
</html>
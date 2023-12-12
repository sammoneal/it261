<?php
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="page-container">
        <h1>Register</h1>
        <div class="form-container">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method ="post">
                <label>First Name</label>
                <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
                <label>Last Name</label>
                <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
                <label>Email</label>
                <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                <label>Username</label>
                <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">
                <label>Password</label>
                <input type="password" name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password']); ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" value="<?php if(isset($_POST['confirm_password'])) echo htmlspecialchars($_POST['confirm_password']); ?>">
                <button type="submit" name="reg_user" class="btn">Register</button>
                <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">Clear</button>
            </form>
            <?php include('errors.php'); ?>
        </div>
        <a href="login.php">Already have an account?</a>
    </div>
    <?php include("./includes/validator.php"); ?>
</body>
</html>

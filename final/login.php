<?php
include("./includes/session.php");
include('./includes/server.php');
include("./includes/header.php");
?>
<div id="wrapper">
    <main>
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
            <?php include('./includes/errors.php'); ?>
        </div>
        <a href="register.php">Don't have an account?</a>
    </main>
</div>
<?php 
include("./includes/footer.php");
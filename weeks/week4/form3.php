<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>form3.php</h1>
    <form action="" method="post">
        <fieldset>
            <label>First Name</label>
            <input type="text" name="first_name">
            <label>Last Name</label>
            <input type="text" name="last_name">
            <label>Email</label>
            <input type="email" name="email">
            <label>Comments</label>
            <textarea name="comments"></textarea>
            <p><a href="">Reset</a></p>
            <input type="submit" value="Send it!">
        </fieldset>
    </form>
    <?php
    if (isset($_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["comments"])) {
        
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $comments = $_POST["comments"];
        
        if (empty($_POST["first_name"] && $_POST["last_name"] && $_POST["email"] && $_POST["comments"])){
            echo '<p class="error">Please fill out all fields.</p>';
        } else {
            echo '
            <div class="box">
            <h2>Hello '.$first_name.' '.$last_name.'</h2>
            <p>We have received your email as '.$email.' and will be reviewing your comments: '.$comments.'</p>
            </div>
            ';
        }
    }
    ?>
</body>
</html>
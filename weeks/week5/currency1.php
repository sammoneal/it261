<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Currency Converter</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <fieldset>
            <label for="">Name</label>
            <input type="text" name="name">
            <label for="">Email</label>
            <input type="email" name="email">
            <label for="">Amount</label>
            <input type="number" name="amount">
            <label for="">Choose your currency</label>
            <ul>
                <li><input type="radio" name="currency" value="0.017">Rubles</li>
                <li><input type="radio" name="currency" value="0.76">CAD</li>
                <li><input type="radio" name="currency" value="1.15">GPB</li>
                <li><input type="radio" name="currency" value="1.00">Euros</li>
                <li><input type="radio" name="currency" value="0.0074">Yen</li>
            </ul>
            <input type="submit" value="Convert">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['name'] && $_POST['email'] && $_POST['amount'] && $_POST['currency'] )) {
            echo '<p class="error">Please fill out all fields.</p>';
        } elseif(isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            $result = $amount * $currency;
            echo '
            <div class="box">
                <h2>Hello'.$name.'</h2>
                <p>You have $'.$result.' USD. You will receive a confirmation at '.$email.'</p>
            </div>';
        }
    }
    ?>
</body>
</html>
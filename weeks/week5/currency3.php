<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Currency Coverter</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <fieldset>
            <label for="">Name</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ?>">
            <label for="">Email</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ?>">
            <label for="">Amount</label>
            <input type="number" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']) ?>">
            <label for="">Choose your currency</label>
            <ul>
                <li><input type="radio" name="currency" value="0.017" <?php 
                    if(isset($_POST['currency']) && $_POST['currency'] == 0.017) echo 'checked="checked"'
                ?>>Rubles</li>
                <li><input type="radio" name="currency" value="0.76" <?php 
                    if(isset($_POST['currency']) && $_POST['currency'] == 0.76) echo 'checked="checked"'
                ?>>CAD</li>
                <li><input type="radio" name="currency" value="1.15" <?php 
                    if(isset($_POST['currency']) && $_POST['currency'] == 1.15) echo 'checked="checked"'
                ?>>GPB</li>
                <li><input type="radio" name="currency" value="1.00" <?php 
                    if(isset($_POST['currency']) && $_POST['currency'] == 1.00) echo 'checked="checked"'
                ?>>Euros</li>
                <li><input type="radio" name="currency" value="0.0074" <?php 
                    if(isset($_POST['currency']) && $_POST['currency'] == 0.0074) echo 'checked="checked"'
                ?>>Yen</li>
            </ul>
            <label for="">Banking Instituation</label>
            <select name="bank" id="">
                <option value="" <?php 
                    if(isset($_POST['bank']) && is_null($_POST['bank'])) echo 'selected="unselected"'
                ?>>Select a bank</option>
                <option value="boa" <?php 
                    if(isset($_POST['bank']) && $_POST['bank'] == 'boa') echo 'selected="selected"'
                ?>>Bank of America</option>
                <option value="chase" <?php 
                    if(isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected="selected"'
                ?>>Chase Bank</option>
                <option value="banner" <?php 
                    if(isset($_POST['bank']) && $_POST['bank'] == 'banner') echo 'selected="selected"'
                ?>>Banner Bank</option>
                <option value="wells" <?php 
                    if(isset($_POST['bank']) && $_POST['bank'] == 'wells') echo 'selected="selected"'
                ?>>Wells Fargo</option>
                <option value="becu" <?php 
                    if(isset($_POST['bank']) && $_POST['bank'] == 'becu') echo 'selected="selected"'
                ?>>Boeing Employee's Credit Unions</option>
            </select>
            <input type="submit" value="Convert">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['name'])){
            echo '<p class="error">Name is required.</p>';
        }
        if(empty($_POST['email'])){
            echo '<p class="error">Email is required.</p>';
        }
        if(empty($_POST['amount'])){
            echo '<p class="error">Amount is required.</p>';
        }
        if(empty($_POST['currency'])){
            echo '<p class="error">Currency is required.</p>';
        }
        if($_POST['bank']==NULL){
            echo '<p class="error">Institution is required.</p>';
        }
        if(isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'], $_POST['bank'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = floatval($_POST['amount']);
            $currency = floatval($_POST['currency']);
            $bank = $_POST['bank'];
            $result = $amount * $currency;
            if(!empty($name && $email && $amount && $currency) && ($bank != NULL)) {
            echo '
            <div class="box">
                <h2>Hello'.$name.'</h2>
                <p>You have $'.number_format($result,2).' USD. Your funds have been deposited at '.$bank.' .You will receive a confirmation at '.$email.'</p>
            </div>';
            }
        }
    }
    ?>
</body>
</html>
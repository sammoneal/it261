<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius Document</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>Celsius Converter</h1>
    <form action="" method="post">
        <fieldset>
            <label>Enter Celsius Value</label>
            <input type="number" name="cel">
            <input type="submit" value="Convert">
        </fieldset>
    </form>
    <p><a href="">Reset</a></p>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['cel'])) {
            $cel = $_POST['cel'];
            $cel_int = intval($cel);
            $far = ($cel_int * 9/5) + 32;
            if ($cel == null) {
                echo '<p>Please provide a Celsius value.</p>';
            } else {
                echo '<p>'.$cel.' degrees Celsius is '.$far.' degrees Fahrenheit.</p>';
            }
        }
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Adder Assignment</title>
    <style>
        p {
            color:red;
            text-align: center;
        }
        
        h1 {
            color:green;
            text-align: center;
        }
        
        h2 {
            font-size:1.5em;
            text-align: center;
        }
        
        form {
            width:350px;
            margin:0 auto;
            border:1px solid red;
            padding:10px;
        }
    </style>
</head>
<body>
    <h1>Adder.php</h1> 
        <form action="" method="post">
            <label>Enter the first number:</label>
            <input type="number" name="num1"><br>
            <label>Enter the second number:</label>
            <input type="number" name="num2"><br>
            <input type="submit" value="Add">
        </form>

<?php
if (isset($_POST['num1'], $_POST['num2'])){
    if(empty($_POST['num1'] && $_POST['num2'])){
        echo '<p>Please submit two numbers.</p>';
    } else {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $my_total = $num1 + $num2;
        echo '
        <h2>You added '. $num1 .' and '.$num2. '</h2>
        <p> and the answer is <br>'. $my_total .'!</p>
        <p><a href="">Reset page</a>
        ';
    }
}
?>

</body>
</html>

<!-- FIXES -->
<!-- Added proper html head -->
<!-- Added styles -->
<!-- Fixed form, label, and input tags -->
<!-- Standardized variable names and capitalization -->
<!-- Added check for num2 -->
<!-- Checked that both params have values -->
<!-- Fixed adding operation -->
<!-- Renamed camel case variable -->
<!-- Combined redundant echo calls -->
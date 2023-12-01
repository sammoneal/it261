<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Calculator</title>
    <link rel="stylesheet" href="./css/calculator.css">
</head>
<body>
    <h1>Travel Calculator</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <fieldset>
            <label for="">Name:</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ?>">
            <label for="">Total Miles:</label>
            <input type="number" step="any" name="distance" value="<?php if(isset($_POST['distance'])) echo htmlspecialchars($_POST['distance']) ?>">
            <label for="">Average Speed (Miles per Hour):</label>
            <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ?>">
            <label for="">Travel Hours per Day:</label>
            <input type="number" step="any" name="daily" value="<?php if(isset($_POST['daily'])) echo htmlspecialchars($_POST['daily']) ?>">
            <label for="">Price per Gallon of Gasoline:</label>
            <ul>
                <li><input type="radio" name="price" value="2.00" <?php 
                    if(isset($_POST['price']) && $_POST['price'] == 0.017) echo 'checked="checked"'
                ?>>$2.00</li>
                <li><input type="radio" name="price" value="2.50" <?php 
                    if(isset($_POST['price']) && $_POST['price'] == 0.76) echo 'checked="checked"'
                ?>>$2.50</li>
                <li><input type="radio" name="price" value="3.00" <?php 
                    if(isset($_POST['price']) && $_POST['price'] == 1.15) echo 'checked="checked"'
                ?>>$3.00</li>
                <li><input type="radio" name="price" value="3.50" <?php 
                    if(isset($_POST['price']) && $_POST['price'] == 1.00) echo 'checked="checked"'
                ?>>$3.50</li>
                <li><input type="radio" name="price" value="4.00" <?php 
                    if(isset($_POST['price']) && $_POST['price'] == 0.0074) echo 'checked="checked"'
                ?>>$4.00</li>
            </ul>
            <label for="">Vehicle fuel economy:</label>
            <select name="economy" id="">
                <option value="" <?php 
                    if(isset($_POST['economy']) && is_null($_POST['economy'])) echo 'selected="unselected"'
                ?>>Select a value</option>
                <option value="10" <?php 
                    if(isset($_POST['economy']) && $_POST['economy'] == '10') echo 'selected="selected"'
                ?>>10mpg - Terrible</option>
                <option value="20" <?php 
                    if(isset($_POST['economy']) && $_POST['economy'] == '20') echo 'selected="selected"'
                ?>>20mpg - Poor</option>
                <option value="30" <?php 
                    if(isset($_POST['economy']) && $_POST['economy'] == '30') echo 'selected="selected"'
                ?>>30mpg - Average</option>
                <option value="40" <?php 
                    if(isset($_POST['economy']) && $_POST['economy'] == '40') echo 'selected="selected"'
                ?>>40mpg - Good</option>
                <option value="50" <?php 
                    if(isset($_POST['economy']) && $_POST['economy'] == '50') echo 'selected="selected"'
                ?>>50mpg - Excellent</option>
            </select>
            <input type="submit" value="Calculate">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['name'])){
            echo '<p class="error">Name is required.</p>';
        }
        if(empty($_POST['distance'])){
            echo '<p class="error">Trip distance is required.</p>';
        }
        if(empty($_POST['speed'])){
            echo '<p class="error">Expected speed is required.</p>';
        }
        if(empty($_POST['daily'])){
            echo '<p class="error">Hours per day is required.</p>';
        }
        if(empty($_POST['price'])){
            echo '<p class="error">Gas price is required.</p>';
        }
        if($_POST['economy']==NULL){
            echo '<p class="error">Fuel economy is required.</p>';
        }
        if(isset($_POST['name'], $_POST['distance'], $_POST['speed'], $_POST['daily'], $_POST['price'])) {
            $name = $_POST['name'];
            $distance = floatval($_POST['distance']);
            $speed = floatval($_POST['speed']);
            $daily = floatval($_POST['daily']);
            $price = floatval($_POST['price']);
            $economy = floatval($_POST['economy']);
            
            $hours = $distance / $speed;
            $days = $hours / $daily;
            $gallons = $distance / $economy;
            $total = $gallons * $price;
            if(!empty($name && $distance && $speed && $daily && $price) && ($economy != NULL)) {
            echo '
            <div class="box">
                <h2>Hello '.$name.'</h2>
                <p>You will be traveling for '.number_format($hours,2).' hours over '.number_format($days,2).' days.</p>
                <p>You will burn '.number_format($gallons, 2).' gallons of gasoline at a total cost of $'.number_format($total,2).' dollars</p>
            </div>';
            }
        }
    }
    ?>
    <footer>
      <ul>
        <li>Copyright &copy; 2023</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by Sam</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
      </ul>
      <script>
        document
          .getElementById("html-checker")
          .setAttribute(
            "href",
            "https://validator.w3.org/nu/?doc=" + location.href
          );
        document
          .getElementById("css-checker")
          .setAttribute(
            "href",
            "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href
          );
      </script>
</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmatic</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>Arithmatic Form</h1>
    <form action="" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name">
            <label>Phone</label>
            <input type="tel" name="phone">
            <label>Lattes</label>
            <input type="number" name="lattes">
            <label>Capucinos</label>
            <input type="number" name="capucinos">
            <label>Americanos</label>
            <input type="number" name="americanos">
            <label>Special Requests</label>
            <textarea name="comments"></textarea>
            <input type="submit" value="Order">
        </fieldset>
    </form>
    <p><a href="">Reset</a></p>
    <?php
    date_default_timezone_set("America/Los_Angeles");
    $our_time = date("H:i");
    if (isset($_POST["name"], $_POST["phone"], $_POST["lattes"], $_POST["capucinos"], $_POST["americanos"], $_POST["comments"])) {
        if (empty($_POST["name"] && $_POST["phone"] && $_POST["lattes"] && $_POST["capucinos"] && $_POST["americanos"] && $_POST["comments"])) {
            echo '<p class="error">Please fill out all fields.</p>';
        } else {
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $lattes = $_POST["lattes"];
            $capucinos = $_POST["capucinos"];
            $americanos = $_POST["americanos"];
            $comments = $_POST["comments"];
            $total = $lattes + $capucinos + $americanos;
            if ($our_time <= 11) {
                $our_time = "Good Morning";
            } elseif ($our_time <=17) {
                $our_time = "Good Afternoon";
            } else {
                $our_time = "Good Evening";
            }
            echo '
            <div class="box">
            <h2>'.$our_time.' '.$name.'!</h2>
            <p>We have texted your order to '.$phone.' totaling '.$total.' beverages:</p>
            <ul>
                <li>'.$lattes.' lattes</li>
                <li>'.$capucinos.' capucinos</li>
                <li>'.$americanos.' americanos</li>
            </ul>
            <p>Special requests: '.$comments.'</p>
            <p>Thank you for your business!</p>
            </div>
            ';
        }
    }
    ?>
</body>
</html>
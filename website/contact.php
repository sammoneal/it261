<?php include('./includes/header.php');

$first_name = '';
$last_name = '';
$email= '';
$gender= '';
$phone= '';
$wines = '';
$regions= '';
$comments = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$phone_err = '';
$wines_err = '';
$regions_err = '';
$comments_err = '';
$privacy_err = '';

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(empty($_POST["first_name"])) {
        $first_name_err = "Please enter a value";
    } else {
        $first_name = $_POST['first_name'];
    }
    if(empty($_POST["last_name"])) {
        $last_name_err = "Please enter a value";
    } else {
        $last_name = $_POST['last_name'];
    }
    if(empty($_POST["email"])) {
        $email_err = "Please enter a value";
    } else {
        $email = $_POST['email'];
    }
    if(empty($_POST["gender"])) {
        $gender_err = "Please enter a value";
    } else {
        $gender = $_POST['gender'];
    }
    if(empty($_POST["phone"])) {
        $phone_err = "Please enter a value";
    } else {
        $phone = $_POST['phone'];
    }
    if(empty($_POST["wines"])) {
        $wines_err = "What, no wines?";
    } else {
        $wines = $_POST['wines'];
    }
    if(empty($_POST["regions"])) {
        $regions_err = "Please enter a value";
    } else {
        $regions = $_POST['regions'];
    }
    if(empty($_POST["comments"])) {
        $comments_err = "Please enter a value";
    } else {
        $comments = $_POST['comments'];
    }
    if(empty($_POST["privacy"])) {
        $privacy_err = "Please enter a value";
    } else {
        $privacy = $_POST['privacy'];
    }
}

if(isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['gender'],
    $_POST['phone'],
    $_POST['wines'],
    $_POST['regions'],
    $_POST['comments'],
    $_POST['privacy'])) {
        $to = 'sam@samoneal.net';
        $subject = 'Test email on '.date('m/d/y, h i A').'';
        $body = '
        First Name: '.$first_name.' '.PHP_EOL.'
        Last Name: '.$last_name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        Gender: '.$gender.' '.PHP_EOL.'
        Phone: '.$phone.' '.PHP_EOL.'
        Wines: '.$wines.' '.PHP_EOL.'
        Regions: '.$regions.' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        Privacy: '.$privacy.' '.PHP_EOL.'
        ';

        $headers = array(
            'From' => 'noreply@samoneal.net'
        );
    
    if(!empty($first_name && $last_name && $email && $gender && $wines && $regions && $phone && $comments)) {
        mail($to, $subject, $body, $headers);
        header('Location:thx.php');
    }
}

?>
<div id="wrapper">
    <main>
    <h1>Contact Form</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <fieldset>
            <legend>Contact Sam</legend>
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php 
                if (isset($_POST["first_name"])) echo htmlspecialchars($_POST['first_name']); 
            ?>">
            <span><?php echo $first_name_err ?></span>
            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php 
                if (isset($_POST["last_name"])) echo htmlspecialchars($_POST['last_name']); 
                ?>">
            <span><?php echo $last_name_err ?></span>
            <label>Email</label>
            <input type="email" name="email" value="<?php 
                if (isset($_POST["email"])) echo htmlspecialchars($_POST['email']); 
                ?>">
            <span><?php echo $email_err ?></span>
            <label>Gender</label>
            <ul>
                <li><input type="radio" name="gender" value="male" <?php 
                    if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"';
                    ?>>Male</li>
                <li><input type="radio" name="gender" value="female" <?php 
                    if (isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"';
                    ?>>Female</li>
                <li><input type="radio" name="gender" value="male" <?php 
                    if (isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked="checked"';
                    ?>>Neither</li>
            </ul>
            <span><?php echo $gender_err ?></span>
            <label>Phone</label>
            <input type="tel" name="phone" value="<?php 
                if (isset($_POST["phone"])) echo htmlspecialchars($_POST['phone']); 
                ?>">
            <span><?php echo $phone_err ?></span>
            <label>Favorite Wines</label>
            <ul>
                <li><input type="checkbox" name="wines[]" value="cab" <?php 
                    if (isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked="checked"';
                    ?>>Cabernet</li>
                <li><input type="checkbox" name="wines[]" value="merlot" <?php 
                    if (isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked="checked"';
                    ?>>Merlot</li>
                <li><input type="checkbox" name="wines[]" value="syrah" <?php 
                    if (isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked="checked"';
                    ?>>Syrah</li>
                <li><input type="checkbox" name="wines[]" value="malbec" <?php 
                    if (isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked="checked"';
                    ?>>Malbec</li>
                <li><input type="checkbox" name="wines[]" value="red" <?php 
                    if (isset($_POST['wines']) && in_array('red', $wines)) echo 'checked="checked"';
                    ?>>Red Blend</li>
            </ul>
            <span><?php echo $wines_err ?></span>
            <label>Regions</label>
            <select name="regions">
                <option value="" <?php 
                    if (isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected="unselected"';
                    ?>>Select a Region</option>
                <option value="nw" <?php 
                    if (isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected="unselected"';
                    ?>>Northwest</option>
                <option value="sw" <?php 
                    if (isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected="unselected"';
                    ?>>Southwest</option>
                <option value="mw" <?php 
                    if (isset($_POST['regions']) && $_POST['regions'] == 'mw') echo 'selected="unselected"';
                    ?>>Midwest</option>
                <option value="ne" <?php 
                    if (isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected="unselected"';
                    ?>>Northweast</option>
                <option value="se" <?php 
                    if (isset($_POST['regions']) && $_POST['regions'] == 'se') echo 'selected="unselected"';
                    ?>>Southeast</option>
            </select>
            <span><?php echo $regions_err ?></span>
            <label>Comments</label>
            <textarea name="comments"><?php 
                if (isset($_POST["comments"])) echo htmlspecialchars($_POST['comments']); 
                ?></textarea>
            <span><?php echo $comments_err ?></span>
            <label>Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="yes" <?php 
                    if (isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked"';
                    ?>>Yes</li>
            </ul>
            <span><?php echo $privacy_err ?></span>
            <input type="submit" value="Submit">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    </main>
</div>
<?php include('./includes/footer.php');
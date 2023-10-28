<?php

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today){
    case 'Sunday':
        $title = 'Chamomile Tea';
        $pic = 'pic.jpg';
        $alt = 'alt description';
        $content = 'body';
        break;
    
    case 'Monday':
        $title = 'Green Tea';
        $pic = 'pic.jpg';
        $alt = 'alt description';
        $content = 'body';
        break;
        
    case 'Tuesday':
        $title = 'Peppermint Tea';
        $pic = 'pic.jpg';
        $alt = 'alt description';
        $content = 'body';
        break;
    
    case 'Wednesday':
        $title = 'Earl Grey';
        $pic = 'pic.jpg';
        $alt = 'alt description';
        $content = 'body';
        break;
    
    case 'Thursday':
        $title = 'Oolong Tea';
        $pic = 'pic.jpg';
        $alt = 'alt description';
        $content = 'body';
        break;
    
    case 'Friday':
        $title = 'Matcha';
        $pic = 'pic.jpg';
        $alt = 'alt description';
        $content = 'body';
        break;
    
    case 'Saturday':
        $title = 'Herbal Tea';
        $pic = 'pic.jpg';
        $alt = 'alt description';
        $content = 'body';
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Class Exercise</title>
    <style>
        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
        }

        #wrapper {
            width:940px;
            margin:20px auto;
        }

        h1, h2, img {
            margin-bottom:10px
        }

        p {
            margin-bottom:20px
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Switch Exercise</h1>
        <h2><?php echo $title; ?></h2>
        <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <p><?php echo $content; ?></p>
        <h2>Daily Tea Specials</h2>
        <ul>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>
    </div>
</body>
</html>
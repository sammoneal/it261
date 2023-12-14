<?php
include("./includes/session.php");
include("./includes/gate.php");
include('./includes/header.php');

if(isset($_GET['today'])){
  $today = $_GET['today'];
} else {
  $today = date('l');
}

switch($today){
  case 'Sunday':
      $tea = 'Chamomile Tea';
      $pic = './images/chamomile.jpeg';
      $color = 'HoneyDew';
      $content = 'A calming tea made from the Chamomile flower.';
      break;
  
  case 'Monday':
      $tea = 'Green Tea';
      $pic = './images/green.jpeg';
      $color = 'Chartreuse';
      $content = 'An earthy tea with a small amount of caffeine.';
      break;
      
  case 'Tuesday':
      $tea = 'Peppermint Tea';
      $pic = './images/chamomile.jpeg';
      $color = 'lightgreen';
      $content = 'A refreshing tea made from peppermint leaves.';
      break;
  
  case 'Wednesday':
      $tea = 'Earl Grey';
      $pic = './images/earl.webp';
      $color = 'Tan';
      $content = 'Black tea flavored with bergamont oil.';
      break;
  
  case 'Thursday':
      $tea = 'Oolong Tea';
      $pic = './images/oolong.webp';
      $color = 'Thistle';
      $content = 'A complex tea made from partially fermented tea leaves.';
      break;
  
  case 'Friday':
      $tea = 'Matcha';
      $pic = './images/matcha.webp';
      $color = 'SpringGreen';
      $content = 'Green tea made from matcha powder.';
      break;
  
  case 'Saturday':
      $tea = 'Herbal Tea';
      $pic = './images/herbal.jpeg';
      $color = 'MistyRose';
      $content = 'A tea blend made from herbs, spices, and dried fruit.';
      break;
}

?>
    <div id="wrapper">
      <main style="background:<?php echo $color; ?>">
        <h1><?php echo $today.' is '.$tea; ?></h1>
        <img src="<?php echo $pic; ?>" alt="<?php echo $tea.' image.'; ?>">
        <p><?php echo $content; ?></p>
      </main>
      <aside>
        <h3>Daily Tea Specials</h3>
        <ul style="list-style-type:none; margin-left:20px">
            <li><a href="daily.php?today=Sunday">Sunday</a></li>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
        </ul>
      </aside>
    </div>
    <?php
    include('./includes/footer.php');
    ?>

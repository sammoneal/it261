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
      $tea = 'Saurian Brandy';
      $pic = './images/switch/7.jpeg';
      $color = 'HoneyDew';
      $content = 'No Federation credits.';
      break;
  
  case 'Monday':
      $tea = 'Raktajino';
      $pic = './images/switch/1.jpeg';
      $color = 'Chartreuse';
      $content = 'TABS DUE MONDAY';
      break;
      
  case 'Tuesday':
      $tea = 'Bloodwine';
      $pic = './images/switch/2.jpeg';
      $color = 'lightgreen';
      $content = 'Customers will be charged for damages.';
      break;
  
  case 'Wednesday':
      $tea = 'Kanar';
      $pic = './images/switch/3.jpeg';
      $color = 'Tan';
      $content = 'All other items full price!';
      break;
  
  case 'Thursday':
      $tea = 'Romulan Ale';
      $pic = './images/switch/4.jpeg';
      $color = 'Thistle';
      $content = 'Compliant with all import restrictions.';
      break;
  
  case 'Friday':
      $tea = 'Synthehol';
      $pic = './images/switch/5.jpeg';
      $color = 'SpringGreen';
      $content = 'No free refills, no special orders.';
      break;
  
  case 'Saturday':
      $tea = 'Prune Juice';
      $pic = './images/switch/6.jpeg';
      $color = 'MistyRose';
      $content = 'For warriors.';
      break;
}

?>
    <div id="wrapper">
      <main style="background:<?php echo $color; ?>">
        <h1><?php echo '10% off '.$tea.' on '.$today; ?></h1>
        <img src="<?php echo $pic; ?>" alt="<?php echo $tea.' image.'; ?>">
        <p><?php echo $content; ?></p>
      </main>
      <aside>
        <h3>Quark's Drink Specials</h3>
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

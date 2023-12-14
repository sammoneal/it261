<?php
include("./includes/session.php");
include("./includes/gate.php");
include("./includes/config.php");
include('./includes/header.php');

$sql = 'SELECT * from trek_movies';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

?>

<div id="wrapper">
    <main>
        <h1 class="section-title">Star Trek Movies</h1>
        <?php if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)): ?>
                <div class="movie-container">
                    <h3><span class="title"><?php echo ''.$row['title'].' ('.$row['year'].')' ?></span></h3>
                    <div class="detail-container">
                        <ul>
                            <li><a href="view.php?id=<?php echo $row['id']?>">More information</a></li>
                        </ul>
                    </div>
                </div>
            <?php endwhile;
        } ?>
    </main>
    <aside>
        <img src="./images/movies/splash.jpeg" alt="Movie theatre">
    </aside>
</div>

<?php

include('./includes/footer.php');

@mysqli_free_result($result);
@mysqli_close($iConn);
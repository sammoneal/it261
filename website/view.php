<?php

include('./includes/config.php');
include('./includes/header.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
} else {
    header('Location:movies.php');
}

$sql = 'SELECT * FROM movies WHERE id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
}
?>

<div id="wrapper">
    <main>
        <h1><?php echo $row['title'] ?></h1>
        <div class="detail-container">
            <h3><span class="key">Released:</span> <?php echo $row['year'] ?></h3>
            <h3><span class="key">Runtime:</span> <?php echo $row['runtime'] ?> minutes</h3>
            <h3><span class="key">Genre:</span> <?php echo $row['genre'] ?></h3>
            <h3><span class="key">Directed by</span> <?php echo $row['director'] ?></h3>
            <h3><span class="key">Starring:</span> <?php echo $row['starring'] ?></h3>
            <h3><span class="key">Cast:</span> <?php echo $row['cast'] ?></h3>
            <p><a href="movies.php">Return</a></p>
        </div>
    </main>
    <aside>
        <img src="./images/movies/<?php echo $id ?>.jpeg" alt="<?php echo $row['title'] ?> poster">
    </aside>
</div>

<?php

include('./includes/footer.php');

mysqli_free_result($result);
@mysqli_close($iConn);
<?php

include("config.php");

$sql = 'SELECT * from people';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
        echo '
            <h2>Information about '.$row['first_name'].' '.$row['last_name'].'</h2>
            <ul>
                <li>'.$row['birthdate'].'</li>
                <li>'.$row['email'].'</li>
            </ul>
            <p>More information: <a href="people-view.php?id='.$row['people_id'].'"></a></p>';
    }
}

@mysqli_free_result($result);
@mysqli_close($iConn);
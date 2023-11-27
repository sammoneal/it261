<?php

$people['Steven_Spielberg'] = 'spiel_Director from Ohio, USA';
$people['Wes_Anderson'] = 'ander_Director from Texas, USA';
$people['Werner_Herzog'] = 'herzo_Director from Munich, Germany';
$people['Martin_Scorsese'] = 'scors_Director from New York, USA';
$people['Denis_Villeneuve'] = 'ville_Director from Quebec, Canada';
$people['Alejandro_Gonzalez_Inarritu'] = 'inarr_Director from Mexico City, Mexico';

include('./includes/header.php');

?>

<h1 class="gallery-header">Great Living Directors</h1>
<table>
    <?php foreach($people as $name => $image) :?>
        <tr>
            <td><img src="./images/<?php echo substr($image,0,5) ?>.jpg" alt="<?php echo $name ?>"></td>
            <td><strong><?php echo str_replace('_', ' ', $name) ?></strong></td>
            <td><?php echo substr($image, 6) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include('./includes/footer.php');
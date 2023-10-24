<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Table</title>
    <style>
        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
        }

        table {
            width:500px;
            margin: 20px auto;
            border-collapse:collapse;
            border: 1px solid blue;
        }
        
        td {
            padding: 5px;
            border-collapse:collapse;
            border: 1px solid lightblue;
        }

    </style>
</head>
<body>
    <h1>Celcius/Fahrenheit Table</h1>
    <table>
        <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php
        for ($cel = 0; $cel <= 100; $cel+=5) {
            $far = ($cel *9/5) + 32;
            echo "<tr>";
            echo "<td>'.$cel.' degrees</td>";
            echo "<td>'.$far.' degrees</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
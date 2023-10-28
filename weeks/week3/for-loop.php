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
        for ($cel = 0; $cel <= 100; $cel+=3) {
            $far = ($cel *9/5) + 32;
            echo "<tr>";
            echo "<td>".$cel." degrees</td>";
            echo "<td>".number_format($far,0)." degrees</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <h1>Kilometer/Mile Table</h1>
    <table>
        <tr>
            <th>Kilometers</th>
            <th>Miles</th>
        </tr>
        <?php
        for ($kilo = 0; $kilo <= 100; $kilo+=5) {
            $mile = $kilo * 0.621371;
            echo "<tr>";
            echo "<td>".$kilo." kilometers</td>";
            echo "<td>".number_format($mile,2)." miles</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
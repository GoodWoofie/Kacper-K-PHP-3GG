<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 10px;
        }
        td:first-child() {
            text-align: right;
        }
        td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>
<body>
    <?php 
    $odliczanie = 10;
    while($odliczanie > 0) {
        echo "odliczamy... $odliczanie<br>";
        $odliczanie--; //$odliczanie = $odlicanie - 1;
    }
    echo "<table>";
    $liczba = 156;
    while($liczba > 0) {
        echo "<tr>";
        if($liczba % 2 == 0){ //liczba jest parzysta
            echo "<td>$liczba </td><td>  0</td>";
            $liczba = $liczba / 2;
        }  else { //liczba jest nieparzysta
            echo "<td>$liczba </td><td>  1</td>";
            $liczba = ($liczba - 1) / 2;
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

    <?php
    $liczba = 5;
    do {
        echo "odliczamy: $liczba<br>";
        $liczba--;
    }while($liczba >= 0)
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tablica = array();
    while(count($tablica) < 5) {
        $liczba = rand(1, 20);
        array_push($tablica, $liczba);
    }
    echo '<pre>';
    //var_dump($tablica);
    foreach($tablica as $wynik) {
        if ($wynik % 2 == 0) {
            echo "Cyfra $wynik jest parzysta <br>";
        } else {
            echo "Cyfra $wynik jest nieparzysta <br>";
        }
    }
    echo "suma liczb to: ".array_sum($tablica)."<br>";
    echo "średnia liczb to: ".array_sum($tablica)/count($tablica)."<br>";
    foreach ($tablica as $wynik2) {
        $plus = $wynik2 + 41;
        $string = chr($plus);
        echo "$string";
    }
    ?>
</body>
</html>
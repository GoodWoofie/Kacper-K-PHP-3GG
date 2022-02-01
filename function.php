<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function dodaj($a, $b) {
        global $suma;
        $suma = $a + $b;
    }
    function roznica($a, $b) {
        $roznica = $a - $b;
        return $roznica;
    }
    function liniatekstu($tekst) {
        echo $tekst."<br>";
    }
    function czydodatnia($liczba) {
        if($liczba > 0) return true;
        else return false;
    }
    function czypierwsza($liczba) {
        for($i = $liczba - 1; $i > 1; $i--)
            if($liczba % $i == 0) return false;
        return true;
    }
    $suma = 0;
    dodaj(2,3);

    $roznica = roznica(5,2);

    liniatekstu("Zapamiętana suma wynosi $suma");
    liniatekstu("Zapamiętana różnica wynosi $roznica");

    $liczba = -13;
    if(czydodatnia($liczba))
        liniatekstu("Liczba $liczba jest dodatnia");
    else
        liniatekstu("liczba $liczba nie jest dodatnia");

    if(czypierwsza($liczba))
        liniatekstu("liczba $liczba jest liczbą pierwszą");
    else
        liniatekstu("liczba $liczba nie jest liczbą pierwszą");
    ?>
</body>
</html>
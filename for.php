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
    for ($i=0; $i < 10; $i++) {
        echo "to jest $i wywołanie pętli<br>";
    }

    for ($i=0; $i <= 10; $i++) {
        $wynik = pow(2, $i);
        echo "2 podniesione do $i potęgi wynosi $wynik<br>";
    }
    ?>
</body>
</html>
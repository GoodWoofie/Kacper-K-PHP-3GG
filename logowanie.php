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
    if(isset($_REQUEST['wyloguj'])) {
        unset($_SESSION['login']);
        session_destroy();
    }
    ?>
    <?php
        if(isset($_REQUEST['login']) && isset($_REQUEST['login'])) { //sprawdza czy wysłane było hasło i login z formularza
            $login = $_REQUEST['login'];
            $haslo = $_REQUEST['haslo']; //zapisuje do lokalnych zmiennych

            $prawidlowylogin = 'jkowalski';
            $prawidlowehaslo = 'tajnehaslo';

            if($login == $prawidlowylogin && $haslo == $prawidlowehaslo) { //sprawdza czy login i hasło są prawidłowe
                echo 'zalogowano poprawnie';
                $_SESSION['login'] = $login;
            } else {
                echo 'Błędny login i hasło';
            }
        }
    ?>
    <?php if(isset($_SESSION['login'])) : ?>
    <form action="logowanie.php" method="post">
        Login: <input type="text" name="login" id=""><br>
        Hasło: <input type="password" name="haslo" id=""><br>
        <button type="submit">Zaloguj</button>
    </form>
    <?php else : ?>
        <a href="logowanie.php?wyloguj">Wyloguj</a>
    <?php endif; ?>
    <pre>
        $_SESSION
        <?php var_dump($_REQUEST); ?>
        $$_REQUEST
        <?php var_dump($_REQUEST); ?>
    </pre>
</body>
</html>
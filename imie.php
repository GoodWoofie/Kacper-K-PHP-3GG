<?php
    session_start();
?>
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
        unset($_SESSION['imie']);
        session_destroy();
    }
    ?>
    <?php
    if(isset($_REQUEST['imie'])) {
        $_SESSION['imie'] = $_REQUEST['imie'];
    }
    ?>
    <?php if(!isset($_SESSION['imie'])) : ?>
    <form action="imie.php" method="get">
        Podaj imię: <input type="text" name="imie">
        <input type="submit" value="Wyślij">
    </form>
    <?php else : ?>
        Witaj <?php echo $_SESSION['imie']; ?>!
        <a href="imie.php?wyloguj">Wyloguj się ze strony</a>
        <?php endif; ?>
</body>
</html>
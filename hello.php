<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cross.css">
</head>
<body>
<?php
//łączenie bazy danych
$db = new mysqli("localhost", "root", "", "zakupy");

if(isset($_REQUEST['newThing']) && $_REQUEST['newThing'] != '') {
//wywyoła się tylko jeżeli wywołano przez post lub coś jest w "newThing"
    echo "dodaje pozycje";
    /*
    $newThing = $_REQUEST['newThing'];
    $q = "INSERT INTO zakupy (ID, Produkt) VALUES (NULL, '$newThing')";
    */
    $q = $db->prepare("INSERT INTO zakupy(ID, Produkt) VALUES(NULL, ?)");
    $q->bind_param('s', $_REQUEST['newThing']);
    $q->execute();
}

//USUWANIE
if(isset($_REQUEST['delete'])) {
    echo "Usuwam";
    $q = $db->prepare("DELETE FROM zakupy WHERE ID=?");
    $q->bind_param('i', $_REQUEST['delete']);
    $q->execute();
}

if(isset($_REQUEST['mark'])) {
    echo "skreślam";
    $q = $db->prepare("UPDATE zakupy SET kupione = 1 WHERE ID=?");
    $q->bind_param('i', $_REQUEST['mark']);
    $q->execute();
}

//kwerenda do wywołania
$q = "SELECT * FROM zakupy";
//wywyołanie kwerendy i odbór danych
$result = $db->query($q);

//początek listy
echo '<ul>';
//po kolei wyciąganie każdej listy
while($row = $result->fetch_assoc()){
    //początek pozycji
    //czy zaliczone
    if ($row['kupione']) {
        echo '<li class="Complete">';
    }else{
        echo '<li>';
    }
    //pozycja listy
    echo $row["Produkt"];
    echo '<a href="hello.php?delete='.$row['ID'].'">Usuń</a>';
    echo '<a href="hello.php?mark='.$row['ID'].'">Skreśl</a>';
    //koniec pozycji
    echo '</li>';
}
//koniec listy
echo '</ul>';


//debug
//echo "<pre>";
//var_dump($_REQUEST);

?>
<form action="hello.php" method="get">
    <label for="input"></label>
    <input type="text" name="newThing" id="input">
    <input type="submit" value="Dodaj do listy">
</form>

</body>
</html>

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
//łączenie bazy danych
$db = new mysqli("localhost", "root", "", "zakupy");
//kwerenda do wywołania
$q = "SELECT * FROM zakupy";
//wywyołanie kwerendy i odbór danych
$result = $db->query($q);
//wyciąganie jednej linji z odebranych danych
//$row = $result->fetch_assoc();
echo '<ul>';
while($row = $result->fetch_assoc()){
    echo '<li>';
    echo $row["Produkt"];
    echo '</li>';
}
echo '</ul>';
//debug
echo "<pre>";
?>
</body>
</html>

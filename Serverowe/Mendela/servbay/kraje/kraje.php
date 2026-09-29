<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        button {
            all: unset;
        }
    </style>
</head>

<body>

    <?php
    $user = 'root';
    $password = 'ServBay.dev';
    $host = "localhost";
    $dbname = "mendela";
    ?>
    <pre>
<?php
/*
$user = 'root';
$password = 'ServBay.dev';
$host = "localhost";
$dbname = "test";
*/
//sinclude("passwd.php");
$mysqli = mysqli_connect($host, $user, $password, $dbname);
//print_r($mysqli);
mysqli_query($mysqli, "set names utf8");

$zbior = mysqli_query($mysqli, "select * from zbior");
$kraje = mysqli_query($mysqli, "select * from kraje");
$stopy = mysqli_query($mysqli, "select * from stopy");

//print_r($result);
/*
$row = mysqli_fetch_row($result);
print_r($row);
$row = mysqli_fetch_row($result);
print_r($row);
$row = mysqli_fetch_assoc($result);
print_r($row);
*/
/*
while ($row = mysqli_fetch_assoc($result)) print_r($row);
*/
$all = mysqli_fetch_all($zbior, MYSQLI_BOTH);
// print_r($all);
$calosc = mysqli_query($mysqli, 'SELECT kraje.src,zbior.nominal,zbior.nr_kat,stopy.nazwa,zbior.rok,zbior.id FROM zbior INNER JOIN kraje ON zbior.id_kraj = kraje.id INNER JOIN stopy ON zbior.id_stop = stopy.id;');
echo "<table border='1'>";
foreach ($calosc as $a) {
    echo "<tr>
        <td> <img src='" . $a['src'] . "' alt=''> </td>
        <td>" . $a['nominal'] . "</td>
        <td>" . $a['nr_kat'] . "</td>
        <td>" . $a['nazwa'] . "</td>
        <td>" . $a['rok'] . "</td>
        <td><form method='POST'><button name='kraj' value=" . $a['id'] . "><img src='./u.gif'></button></form></td>
    <tr>";
}
echo "</table>";

mysqli_close($mysqli);
?>

</body>
</html>
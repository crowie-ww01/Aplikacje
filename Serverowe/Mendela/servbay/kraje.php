<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
if (isset($_POST["kraj"])) {
    $delete = mysqli_prepare($mysqli, "DELETE FROM zbior WHERE id=?;");
    mysqli_stmt_bind_param($delete, "s", $_POST['kraj']);
    mysqli_stmt_execute($delete);
}
if (isset($_POST["id_kraj"]) && isset($_POST["nominal"]) && isset($_POST["nr_kat"]) && isset($_POST["id_stop"]) && isset($_POST["rok"])) {
    $add = mysqli_prepare($mysqli, "INSERT INTO zbior (id_kraj, nominal, nr_kat, id_stop, rok) VALUES(?, ?, ?, ?, ?);");
    mysqli_stmt_bind_param($add, "issii", $_POST['id_kraj'], $_POST['nominal'], $_POST['nr_kat'], $_POST['id_stop'], $_POST['rok']);
    mysqli_stmt_execute($add);
}
$calosc = mysqli_query($mysqli, 'SELECT kraje.src,zbior.nominal,zbior.nr_kat,stopy.nazwa,zbior.rok,zbior.id FROM zbior INNER JOIN kraje ON zbior.id_kraj = kraje.id INNER JOIN stopy ON zbior.id_stop = stopy.id;');
echo "<table border='1'>";
?>
<tr>Dodawanie rekordu</tr>
<tr>
    <form action="" method="POST" id="form">
    <td><select name="id_kraj">
        <?php
        foreach ($kraje as $kraj) {
            echo "<option value=" . $kraj['id'] . ">" . $kraj['nazwa'] . "</option>";
        }
        ?>        
    </select></td>
    <td><input type="text" name="nominal"></td>
    <td><input type="text" name="nr_kat"></td>
    <td><select name="id_stop" id="">
        <?php
        foreach ($stopy as $stop) {
            echo "<option value=" . $stop['id'] . ">" . $stop['nazwa'] . "</option>";
        }
        ?>   
    </select></td>
    <td><input type="number" name="rok"></td>
    <td><button type="submit" value="add" name="add"><img src="./kraje/faja.png" alt=""></button></td>
    </form>
</tr>
<?php
foreach ($calosc as $flaga) {
    echo "<tr id='" . $flaga['id'] . "' class='rekord'>
        <td> <img src='./kraje/" . $flaga['src'] . "' class='flaga' > </td>
        <td class='nominal'>" . $flaga['nominal'] . "</td>
        <td class='nr_kat'>" . $flaga['nr_kat'] . "</td>
        <td class='nazwa'>" . $flaga['nazwa'] . "</td>
        <td class='rok'>" . $flaga['rok'] . "</td>
        <td><form method='POST'><button name='kraj' value=" . $flaga['id'] . "><img src='./kraje/u.gif'></button></form></td>
    <tr>";
}
echo "</table>";
?>
<script>
    const rekordy = document.getElementsByClassName("rekord");
    for (let i=0; i<rekordy.length;i++) {
        const flaga = rekordy[i].getElementsByClassName("flaga")[0];
        const nominal = rekordy[i].getElementsByClassName("nominal")[0].innerHTML;
        const nr_kat = rekordy[i].getElementsByClassName("nr_kat")[0].innerHTML;
        const nazwa = rekordy[i].getElementsByClassName("nazwa")[0].innerHTML;
        const rok = rekordy[i].getElementsByClassName("rok")[0].innerHTML;

        flaga.onclick = function () {
            rekordy[i].innerHTML = `<form action="" method="POST" id="form">
                <td><select name="id_kraj" value="">
                    <?php
                    foreach ($kraje as $kraj) {
                        echo "<option value=" . $kraj['id'] . ">" . $kraj['nazwa'] . "</option>";
                    };
                    ?>        
                </select></td>
                <td><input type="text" name="nominal" value="${nominal}"></td>
                <td><input type="text" name="nr_kat"  value="${nr_kat}"></td>
                <td><select name="id_stop" id=""  value="${nazwa}">
                    <?php
                    foreach ($stopy as $stop) {
                        echo "<option value=" . $stop['id'] . ">" . $stop['nazwa'] . "</option>";
                    };
                    ?>   
                </select></td>
                <td><input type="number" name="rok"  value="${rok}"></td>
                <td><button type="submit" value="add" name="add"><img src="./kraje/faja.png" alt=""></button></td>
                </form>`;
        };
    }
</script>
<?php

mysqli_close($mysqli);
?>

</body>
</html>
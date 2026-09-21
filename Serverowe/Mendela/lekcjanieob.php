<?php
$user = 'root';
$password = 'ServBay.dev';
$host = "localhost";
$dbname = "test";


?>
<pre>
<?php
/*
$user = 'root';
$password = 'ServBay.dev';
$host = "localhost";
$dbname = "test";
*/
include("passwd.php");
$mysqli = mysqli_connect($host, $user, $password, $dbname);
//print_r($mysqli);
mysqli_query($mysqli, "set names utf8");

$result = mysqli_query($mysqli, "select * from imiona");
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
$all = mysqli_fetch_all($result);
print_r($all);
echo $all[0][1]; // Maciej

$imie = $_GET['imie'];
//mysqli_query($mysqli, "insert into imiona(imie) values('$imie')"); // !!!!
// UWAGA INIEKCJA SQL!!!!!!
/*
$ins="' or 1=1 --'";
select count(*) from users where user='        $ins            ' and password='     {OD KLIENTA np. w POST}         '
// property BINDING!!!!
*/
$stmt = mysqli_prepare($mysqli, "insert into imiona(imie) values(?)");
mysqli_stmt_bind_param($stmt, "s", $_GET['imie']);
mysqli_stmt_execute($stmt);
//$result=mysqli_stmt_get_result($stmt);
//$all=mysqli_fetch_all($result);

mysqli_close($mysqli);

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="test.php" method="post">
        Imie: <input name="name" value="Maciej">
        Płeć urodzeniowa: <input name="gender" type="radio" value="M" checked> M <input type="radio" name="gender" value="W"> K
        Obecnosc: <input name="pres" type="checkbox">
        Klasa: <select name="class">
            <option>4Ia
            <option value="ib" selected>4Ib
        </select>
        <input type="submit" value="Send Me!">
    </form>
    <?php
    echo '<b>';
    echo "LOL"; // srednik wymagany!!!!!!!
    echo "</b>";
    ?>
    <br />
    <?
    // short open tag
    /*

    */
    echo "sot";
    ?>
    <?= "<br/>Ale jazda!!!!" ?>
    <?php
    // powyzej echo w formie "fast"
    $wiek = 44; // typy domyslnie dynamiczne
    echo $wiek; // $ - zmienna
    var_dump($wiek);
    $str = "Stringggg";
    var_dump($str);
    define("PLANETA", "Ziemia");
    var_dump(PLANETA);
    $x = 7;
    $y = ++$x;
    echo "<br/>$y";
    echo "<br/>" . $y;
    echo '<br/>$y'; // $y 
    echo "Mam 100 $$\$y";
    ?>
</body>
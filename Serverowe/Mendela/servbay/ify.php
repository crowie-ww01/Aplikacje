<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main {
            display: flex;
        }

        .smaller {
            width: 50px;
        }

        .small {
            width: 30px;
        }

        .between {
            /* display: inline-block; */
            width: 25%;
            max-width: 100%;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;"> Pobieranie wartosci z formularza, instrukcja warunkowa</h1>
    <!-- <div class="main">
        <div>
            <h1>1</h1>
            <form action="" method="post">
                <input type="text" name="imie">
                <input type="submit" value="ok">
                <br>
                wypisano: <?php
                            if (isset($_POST['imie']))
                                echo $_POST['imie'];
                            ?>
            </form>
        </div>
        <div>
            <h1>2</h1>
            <form action="wiek.php" method="post">
                <input type="text" name="wiek">
                <input type="submit" value="ok">
            </form>
        </div>
        <div>
            <h1>3</h1>
            <form action="" method="post">
                Czy lubisz zimę?
                <br>
                <select name="zima" id="">
                    <option value="true">TAK</option>
                    <option value="false">NIE</option>
                    <input type="submit" value="ok">
                </select>
            </form>
            <br>
            <?php
            if (isset($_POST['zima']))
                if ($_POST['zima'] == 'false')
                    echo 'szkoda :(';
                else
                    echo 'ja też';
            ?>
        </div>
        <div>
            <h1>4a</h1>
            <form action="" method="post">

                <input type="number" name="liczba">
                <select name="znak" id="">
                    <option value="<">&lt;</option>
                    <option value="<=">&lt;=</option>
                    <option value="=">=</option>
                    <option value=">=">>=</option>
                    <option value=">">></option>
                </select>
                <input type="number" name="liczba2">?
                <input type="submit" value="ok">
                <?php
                $wynik = "nie";
                if (isset($_POST['liczba']) & isset($_POST['liczba2']) && isset($_POST['znak'])) {
                    if ($_POST['znak'] == "<" && $_POST['liczba'] < $_POST['liczba2'])
                        $wynik = "tak";
                    if (($_POST['znak'] == "<=" && $_POST['liczba'] <= $_POST['liczba2']))
                        $wynik = "tak";
                    if (($_POST['znak'] == "=" && $_POST['liczba'] == $_POST['liczba2']))
                        $wynik = "tak";
                    if (($_POST['znak'] == ">=" && $_POST['liczba'] >= $_POST['liczba2']))
                        $wynik = "tak";
                    if (($_POST['znak'] == ">" && $_POST['liczba'] > $_POST['liczba2']))
                        $wynik = "tak";
                    echo $wynik;
                }
                ?>
            </form>
        </div>
        <div>
            <h1>4b</h1>
            <form action="" method="post">
                <input type="number" name="liczba3">
                <select name="znak" id="">
                    <option value="<" <?php if (isset($_POST['znak']) && $_POST['znak'] == "<")
                                            echo "selected"; ?>>&lt;</option>
                    <option value="<=" <?php if (isset($_POST['znak']) && $_POST['znak'] == "<=")
                                            echo "selected"; ?>>&lt;=</option>
                    <option value="=" <?php if (isset($_POST['znak']) && $_POST['znak'] == "=")
                                            echo "selected"; ?>>=</option>
                    <option value=">=" <?php if (isset($_POST['znak']) && $_POST['znak'] == ">=")
                                            echo "selected"; ?>>>=</option>
                    <option value=">" <?php if (isset($_POST['znak']) && $_POST['znak'] == ">")
                                            echo "selected"; ?>>></option>
                </select>
                <input type="number" name="liczba4">?
                <input type="image" src="https://img.freepik.com/premium-wektory/znak-ok-z-ikona-symbolu-reki_423491-228.jpg?semt=ais_hybrid&amp;w=740&amp;q=80" style="width:30px;position: relative; top: 7px;">
                <br>
                <?php
                $wynik = "nie";
                if (isset($_POST['liczba3']) & isset($_POST['liczba4']) && isset($_POST['znak'])) {
                    if ($_POST['znak'] == "<" && $_POST['liczba3'] < $_POST['liczba4'])
                        $wynik = "tak";
                    if (($_POST['znak'] == "<=" && $_POST['liczba3'] <= $_POST['liczba4']))
                        $wynik = "tak";
                    if (($_POST['znak'] == "=" && $_POST['liczba3'] == $_POST['liczba4']))
                        $wynik = "tak";
                    if (($_POST['znak'] == ">=" && $_POST['liczba3'] >= $_POST['liczba4']))
                        $wynik = "tak";
                    if (($_POST['znak'] == ">" && $_POST['liczba3'] > $_POST['liczba4']))
                        $wynik = "tak";

                    echo $wynik;
                }
                ?>
            </form>
        </div>
        <div>
            <h1>5a</h1>
            <form action="" method="post">
                Wpisz wspolczynniki rownania kwadratowego
                <br>
                <input type="number" name="a">x<sup>2</sup>+
                <input type="number" name="b">x+
                <input type="number" name="c">=0
                <input type="submit" value="oblicz pierwiastki">
            </form>

            <?php
            $delta = 0;
            $x1 = 0;
            $x2 = 0;
            $x0 = 0;
            // var_dump($_POST);
            // var_dump(isset($_POST['a']));
            if (
                isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) &&
                !empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c'])
            ) {
                $delta = ((($_POST['b']) * ($_POST['b'])) - (4 * ($_POST['a']) * ($_POST['c'])));

                echo ("delta=");
                echo $delta;
                if ($delta > 0) {
                    $x1 = (((-1) * ($_POST['b'])) - sqrt($delta)) / (2 * ($_POST['a']));
                    echo ("<br>x1=");
                    echo $x1;
                    $x2 = (((-1) * ($_POST['b'])) + sqrt($delta)) / (2 * ($_POST['a']));
                    echo ("<br>x2=");
                    echo $x2;
                } else if ($delta == 0) {
                    $x0 = ((-1) * ($_POST['b'])) / (2 * ($_POST['a']));
                    echo ("<br>x0=");
                    echo $x0;
                } else {
                    echo ("<br>brak pierwiastków");
                }
            }
            ?>
        </div>
        <div>
            <h1>5b</h1>
            <form action="" method="post">
                Wpisz wspolczynniki rownania kwadratowego
                <br>
                <input type="number" name="a1">x<sup>2</sup>+
                <input type="number" name="b1">x+
                <input type="number" name="c1">=0
                <input type="submit" value="oblicz pierwiastki">
            </form>
            <?php
            $delta = 0;
            $x1 = 0;
            $x2 = 0;
            $x0 = 0;
            // var_dump($_POST);
            // var_dump(isset($_POST['a']));
            if (
                isset($_POST['a1']) && isset($_POST['b1']) && isset($_POST['c1']) &&
                !empty($_POST['a1']) && !empty($_POST['b1']) && !empty($_POST['c1'])
            ) {
                $delta = ((($_POST['b1']) * ($_POST['b1'])) - (4 * ($_POST['a1']) * ($_POST['c1'])));

                echo ("Δ=<input disabled size='1' value='$delta' style='color:red'>");
                if ($delta > 0) {
                    $x1 = (((-1) * ($_POST['b1'])) - sqrt($delta)) / (2 * ($_POST['a1']));
                    echo ("<br>x1=<input disabled value='$x1'style='color:green'>");
                    $x2 = (((-1) * ($_POST['b1'])) + sqrt($delta)) / (2 * ($_POST['a1']));
                    echo ("<br>x2=<input disabled value='$x2'style='color:green'>");
                } else if ($delta == 0) {
                    $x0 = ((-1) * ($_POST['b1'])) / (2 * ($_POST['a1']));
                    echo ("<br>x0=<input disabled value='$x0'style='color:green'>");
                } else {
                    echo ("<br>brak pierwiastków");
                }
            }
            ?>
        </div>
    </div> -->
    <div class="main">
        <div>
            <div>
                <h1>1</h1>
                <form action="" method="post">
                    <input type="text" name="imie">
                    <input type="submit" value="ok">
                    <br>
                    wypisano: <?php
                                if (isset($_POST['imie']))
                                    echo $_POST['imie'];
                                ?>
                </form>
            </div>
            <div>
                <h1>3</h1>
                <form action="" method="post">
                    Czy lubisz zimę?
                    <br>
                    <select name="zima" id="">
                        <option value="true">TAK</option>
                        <option value="false">NIE</option>
                        <input type="submit" value="ok">
                    </select>
                </form>
                <br>
                <?php
                if (isset($_POST['zima']))
                    if ($_POST['zima'] == 'false')
                        echo 'szkoda :(';
                    else
                        echo 'ja też';
                ?>
            </div>
            <div>
                <h1>4a</h1>
                <form action="" method="post">

                    <input type="number" name="liczba" class="smaller">
                    <select name="znak" id="">
                        <option value="<">&lt;</option>
                        <option value="<=">&lt;=</option>
                        <option value="=">=</option>
                        <option value=">=">>=</option>
                        <option value=">">></option>
                    </select>
                    <input type="number" name="liczba2" class="smaller">?
                    <input type="submit" value="ok">
                    <?php
                    $wynik = "nie";
                    if (isset($_POST['liczba']) & isset($_POST['liczba2']) && isset($_POST['znak'])) {
                        if ($_POST['znak'] == "<" && $_POST['liczba'] < $_POST['liczba2'])
                            $wynik = "tak";
                        if (($_POST['znak'] == "<=" && $_POST['liczba'] <= $_POST['liczba2']))
                            $wynik = "tak";
                        if (($_POST['znak'] == "=" && $_POST['liczba'] == $_POST['liczba2']))
                            $wynik = "tak";
                        if (($_POST['znak'] == ">=" && $_POST['liczba'] >= $_POST['liczba2']))
                            $wynik = "tak";
                        if (($_POST['znak'] == ">" && $_POST['liczba'] > $_POST['liczba2']))
                            $wynik = "tak";
                        echo $wynik;
                    }
                    ?>
                </form>
            </div>
            <div>
                <h1>5a</h1>
                <form action="" method="post">
                    Wpisz wspolczynniki rownania kwadratowego
                    <br>
                    <input type="number" name="a" class="small">x<sup>2</sup>+
                    <input type="number" name="b" class="small">x+
                    <input type="number" name="c" class="small">=0
                    <input type="submit" value="oblicz pierwiastki">
                </form>

                <?php
                $delta = 0;
                $x1 = 0;
                $x2 = 0;
                $x0 = 0;
                // var_dump($_POST);
                // var_dump(isset($_POST['a']));
                if (
                    isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) &&
                    !empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c'])
                ) {
                    $delta = ((($_POST['b']) * ($_POST['b'])) - (4 * ($_POST['a']) * ($_POST['c'])));

                    echo ("<br>delta=");
                    echo $delta;
                    if ($delta > 0) {
                        $x1 = (((-1) * ($_POST['b'])) - sqrt($delta)) / (2 * ($_POST['a']));
                        echo ("<br>x1=");
                        echo $x1;
                        $x2 = (((-1) * ($_POST['b'])) + sqrt($delta)) / (2 * ($_POST['a']));
                        echo ("<br>x2=");
                        echo $x2;
                    } else if ($delta == 0) {
                        $x0 = ((-1) * ($_POST['b'])) / (2 * ($_POST['a']));
                        echo ("<br>x0=");
                        echo $x0;
                    } else {
                        echo ("<br>brak pierwiastków");
                    }
                }
                ?>
            </div>
        </div>
        <div class="between"></div>
        <div>
            <div>
                <h1>2</h1>
                <form action="wiek.php" method="post">
                    <input type="text" name="wiek">
                    <input type="submit" value="ok">
                </form>
            </div>
            <div>
                <h1>4b</h1>
                <form action="" method="post">
                    <input type="number" name="liczba3" class="smaller">
                    <select name="znak" id="">
                        <option value="<" <?php if (isset($_POST['znak']) && $_POST['znak'] == "<")
                                                echo "selected"; ?>>&lt;</option>
                        <option value="<=" <?php if (isset($_POST['znak']) && $_POST['znak'] == "<=")
                                                echo "selected"; ?>>&lt;=</option>
                        <option value="=" <?php if (isset($_POST['znak']) && $_POST['znak'] == "=")
                                                echo "selected"; ?>>=</option>
                        <option value=">=" <?php if (isset($_POST['znak']) && $_POST['znak'] == ">=")
                                                echo "selected"; ?>>>=</option>
                        <option value=">" <?php if (isset($_POST['znak']) && $_POST['znak'] == ">")
                                                echo "selected"; ?>>></option>
                    </select>
                    <input type="number" name="liczba4" class="smaller">?
                    <input type="image" src="https://img.freepik.com/premium-wektory/znak-ok-z-ikona-symbolu-reki_423491-228.jpg?semt=ais_hybrid&amp;w=740&amp;q=80" style="width:30px;position: relative; top: 7px;">
                    <br>
                    <?php
                    $wynik = "nie";
                    if (isset($_POST['liczba3']) & isset($_POST['liczba4']) && isset($_POST['znak'])) {
                        if ($_POST['znak'] == "<" && $_POST['liczba3'] < $_POST['liczba4'])
                            $wynik = "tak";
                        if (($_POST['znak'] == "<=" && $_POST['liczba3'] <= $_POST['liczba4']))
                            $wynik = "tak";
                        if (($_POST['znak'] == "=" && $_POST['liczba3'] == $_POST['liczba4']))
                            $wynik = "tak";
                        if (($_POST['znak'] == ">=" && $_POST['liczba3'] >= $_POST['liczba4']))
                            $wynik = "tak";
                        if (($_POST['znak'] == ">" && $_POST['liczba3'] > $_POST['liczba4']))
                            $wynik = "tak";

                        echo $wynik;
                    }
                    ?>
                </form>
            </div>
            <div>
                <h1>5b</h1>
                <form action="" method="post">
                    Wpisz wspolczynniki rownania kwadratowego
                    <br>
                    <input type="number" name="a1" class="small">x<sup>2</sup>+
                    <input type="number" name="b1" class="small">x+
                    <input type="number" name="c1" class="small">=0
                    <input type="submit" value="oblicz pierwiastki">
                </form>
                <?php
                $delta = 0;
                $x1 = 0;
                $x2 = 0;
                $x0 = 0;
                // var_dump($_POST);
                // var_dump(isset($_POST['a']));
                if (
                    isset($_POST['a1']) && isset($_POST['b1']) && isset($_POST['c1']) &&
                    !empty($_POST['a1']) && !empty($_POST['b1']) && !empty($_POST['c1'])
                ) {
                    $delta = ((($_POST['b1']) * ($_POST['b1'])) - (4 * ($_POST['a1']) * ($_POST['c1'])));

                    echo ("<br>Δ=<input disabled size='1' value='$delta' style='color:red'>");
                    if ($delta > 0) {
                        $x1 = (((-1) * ($_POST['b1'])) - sqrt($delta)) / (2 * ($_POST['a1']));
                        echo ("<br>x1=<input disabled value='$x1'style='color:green'>");
                        $x2 = (((-1) * ($_POST['b1'])) + sqrt($delta)) / (2 * ($_POST['a1']));
                        echo ("<br>x2=<input disabled value='$x2'style='color:green'>");
                    } else if ($delta == 0) {
                        $x0 = ((-1) * ($_POST['b1'])) / (2 * ($_POST['a1']));
                        echo ("<br>x0=<input disabled value='$x0'style='color:green'>");
                    } else {
                        echo ("<br>brak pierwiastków");
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
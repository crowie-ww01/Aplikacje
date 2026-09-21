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

        .szach {
            background-color: black;
            height: 40px;
            width: 40px;

        }

        .mat {
            background-color: white;
            height: 40px;
            width: 40px;

        }
    </style>
</head>

<body>
    <h1 style="text-align: center;"> Pętle</h1>

    <div class="main">
        <div>
            <div>
                <h1>1a</h1>
                <form action="" method="post">
                    Ile cyfr wypisać:
                    <input type="text" name="ilość">
                    <input type="submit" value="ok">
                    <br>
                    <?php
                    if (isset($_POST['ilość'])) {
                        $ile = $_POST['ilość'];
                        if ($ile > 0) {
                            for ($i = 1; $i <= $ile; $i++) {
                                echo ($i);
                                echo (" ");
                            }
                        }
                    }
                    ?>
                </form>
            </div>
            <div>
                <h1>1c</h1>
                <form action="" method="post">
                    Od ilu maleć:
                    <input type="number" name="maleć" id="">
                    <input type="submit" value="ok">
                    </select>
                </form>
                <br>
                <?php

                if (isset(($_POST['maleć']))) {
                    $malec = ($_POST['maleć']);
                    if ($malec > 0) {
                        for ($i = $malec; $i > 0; $i--) {
                            echo ($i);
                            echo (" ");
                        }
                    }
                }
                ?>
            </div>
            <div>
                <h1>2</h1>
                <form action="" method="post">
                    Ile masz lat?
                    <br>
                    <select name="wiek" id="">
                        <?php
                        for ($i = 1; $i < 130; $i++) {
                            echo "<option value=\"$i\">";
                            echo $i;
                            echo '</option>';
                        }
                        ?>
                        <input type="submit" value="ok">
                    </select>
                </form>
                <br>
                <?php
                if (isset($_POST['wiek'])) {
                    echo $_POST['wiek'];
                    echo ': w kwiecie wieku';
                }
                ?>
            </div>

            <div>
                <h1>4</h1>
                <form action="" method="post">
                    Wierszy:
                    <input type="text" name="wiersz" id="">
                    kolumn:
                    <input type="text" name="kolumna" id="">
                    <input type="submit" value="ok">
                    </select>
                </form>
                <br>
                <?php
                if (isset($_POST['wiersz']) && isset($_POST['kolumna'])) {
                    if (!empty($_POST['wiersz']) && !empty($_POST['kolumna'])) {
                        $wiersz = intval($_POST['wiersz']);
                        $kolumna = intval($_POST['kolumna']);
                        echo ('<table border="1">');
                        for ($i = 1; $i <= $wiersz; $i++) {
                            echo ('<tr>');
                            for ($j = 1; $j <= $kolumna; $j++) {
                                echo ('<td>');
                                echo ($j + ($i * $kolumna) - $kolumna);
                                echo ('</td>');
                            }
                            echo ('</tr>');
                        }
                        echo ('</table>');
                    }
                }

                ?>
            </div>
            <div>
                <h1>6a</h1>
                <form action="" method="post">
                    Rozmiar:
                    <input type="text" name="rozmiar" id="">

                    <input type="submit" value="ok">
                    </select>
                </form>
                <br>
                <?php
                if (isset($_POST['rozmiar'])) {
                    if (!empty($_POST['rozmiar'])) {
                        $rozmiar = intval($_POST['rozmiar']);
                        echo ('<table border="1">');
                        for ($i = 1; $i <= $rozmiar; $i++) {
                            echo ('<tr>');
                            for ($j = 1; $j <= $rozmiar; $j++) {
                                echo ('<td>');
                                echo ($j * $i);
                                echo ('</td>');
                            }
                            echo ('</tr>');
                        }
                        echo ('</table>');
                    }
                }

                ?>
            </div>

        </div>
        <div class="between"></div>
        <div>
            <div>
                <h1>1b</h1>
                <form action="" method="post">
                    Ile cyfr wypisać:
                    <input type="text" name="ilośćpion">
                    <input type="submit" value="ok">
                    <br>
                    <?php
                    if (isset($_POST['ilośćpion'])) {
                        $ile = $_POST['ilośćpion'];
                        if ($ile > 0) {
                            for ($i = 1; $i <= $ile; $i++) {
                                echo ($i);
                                echo ("<br> ");
                            }
                        }
                    }
                    ?>
                </form>
            </div>
            <div>
                <h1>1d</h1>
                <form action="" method="post">
                    start:
                    <input type="number" name="start">
                    krok:
                    <input type="number" name="skok">
                    koniec:
                    <input type="number" name="koniec">

                    <input type="submit" value="ok">
                    <br>
                    <?php
                    if (isset($_POST['start']) && isset($_POST['skok']) && isset($_POST['koniec'])) {
                        if (!empty($_POST['start']) && !empty($_POST['skok']) && !empty($_POST['koniec'])) {
                            $start = intval($_POST['start']);
                            $koniec = intval($_POST['koniec']);
                            $skok = intval($_POST['skok']);
                            for ($i = $start; $i <= $koniec; $i = ($i + $skok)) {
                                echo ($i);
                                echo (" ");
                            }
                        }
                    }

                    ?>
                </form>
            </div>
            <div>
                <h1>3</h1>
                <form action="" method="post">
                    Ile cyfr:
                    <input type="text" name="ilośćW">
                    pion/poziom:
                    <select name="orientation" id="">
                        <option value="pion">Pion</option>
                        <option value="poziom">Poziom</option>
                    </select>
                    krok:
                    <input type="text" name="krok">

                    <input type="submit" value="ok">
                    <br>
                    <?php
                    if (isset($_POST['ilośćW'])) {
                        $ileW = $_POST['ilośćW'];
                        if ($ileW > 0) {
                            if ($_POST['orientation'] == "pion") {
                                for ($i = 1; $i <= $ileW; $i = ($i + $_POST['krok'])) {
                                    echo ($i);
                                    echo ("<br> ");
                                }
                            } else {
                                for ($i = 1; $i <= $ileW; $i = ($i + $_POST['krok'])) {
                                    echo ($i);
                                    echo (" ");
                                }
                            }
                        }
                    }

                    ?>
                </form>
            </div>
            <div>
                <h1>5</h1>
                SZACHOWNICA:
                <br>
                <form action="" method="post">
                    Wierszy:
                    <input type="text" name="row">
                    kolumn:
                    <input type="text" name="column">

                    <input type="submit" value="ok">
                </form>
                <?php
                if (isset($_POST['row']) && isset($_POST['column'])) {
                    if (!empty($_POST['row']) && !empty($_POST['column'])) {
                        $wiersz = intval($_POST['row']);
                        $kolumna = intval($_POST['column']);
                        echo ('<table border="1">');
                        for ($i = 1; $i <= $wiersz; $i++) {
                            echo ('<tr>');
                            for ($j = 1; $j <= $kolumna; $j++) {
                                if ($kolumna % 2 == 0) {
                                    $wartosc = $j + ($i * $kolumna) + $i - 1 - $kolumna;
                                    if ($wartosc % 2 == 0) {
                                        echo ('<td class="szach">');
                                        echo ('</td>');
                                    } else {
                                        echo ('<td class="mat">');
                                        echo ('</td>');
                                    }
                                } else {
                                    $wartosc = $j + ($i * $kolumna) - $kolumna;
                                    if ($wartosc % 2 == 0) {
                                        echo ('<td class="szach">');
                                        echo ('</td>');
                                    } else {
                                        echo ('<td class="mat">');
                                        echo ('</td>');
                                    }
                                }
                            }
                            echo ('</tr>');
                        }
                        echo ('</table>');
                    }
                }

                ?>
            </div>
            <div>
                <h1>6b</h1>
                <form action="" method="post">
                    Rozmiar:
                    <input type="text" name="value">
                    <input type="submit" value="ok">
                </form>
                <?php
                if (isset($_POST['value'])) {
                    if (!empty($_POST['value'])) {
                        $rozmiar = intval($_POST['value']);
                        echo ('<table border="1">');
                        for ($z = 0; $z <= $rozmiar; $z++) {

                            echo ('<th>');
                            echo ($z);
                            echo ('</th>');
                        }
                        for ($i = 1; $i <= $rozmiar; $i++) {
                            echo ('<tr>');
                            echo ('<th>');
                            echo ($i);
                            echo ('</th>');
                            for ($j = 1; $j <= $rozmiar; $j++) {

                                echo ('<td>');
                                echo ($j * $i);
                                echo ('</td>');
                            }
                            echo ('</tr>');
                        }
                        echo ('</table>');
                    }
                }

                ?>
            </div>

        </div>
    </div>
</body>

</html>
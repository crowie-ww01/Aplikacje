<?php
if ($_POST['wiek'] < 18)
    echo "dziecko";
else if ($_POST['wiek'] == 18)
    echo "średni wiek";
else
    echo "staruch";

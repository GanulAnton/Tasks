<?php
echo '<table border = 1 >';


$z = 1;
$n = 18;

for ($a = 0; $a < ceil($n / 5); $a++) {

    echo '<tr>';

    for ($b = 0; $b < 5; $b++) {
        echo '<td>' . $z . '</td>';
        $z++;
        if ($z > $n) break;

    }
    echo '</tr>';


}

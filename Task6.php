<?php
echo '<table border = 1 >';

$y=0;
$z = 0;
$n = 101;
$row = ceil ($n /5);
$row1 = $row+1;
for ($a = 0; $a < $row; $a++) {
    $y++;
    echo '<tr>';
    $z = $y;
    for ($b = 0; $b < 5; $b++) {

        if ($z > $n) break;
        echo '<td>' . $z . '</td>';
        $z+=$row;

    }

    echo '</tr>';


}



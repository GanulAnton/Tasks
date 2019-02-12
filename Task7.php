<?php
echo '<table border = 1 >';

echo '<tr><th>' . 'P' . '</th><th>' . 'P/12' . '</th></tr>';

$s = 100;
$p = 10;
$n = 5;
$p = $p / 100;
for ($a = 1; $a <= $n; $a++) {
    echo '<tr>';
    $p1=$p;
    $s1 = $s;
    $s1 += $s1 * $p1;
    echo '<td>' . $s1 . '</td>';
    $s2 = $s;
    $p2=$p;
    $p2= $p2 / 12;
    $s2 += $s2 * $p2;
    $s2 = $s2 * 12;
    echo '<td>' . $s2 . '</td>';
    echo '</tr>';

}


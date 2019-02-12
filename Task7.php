<!-- Задание 3. Имеется 2 варианта размещения вклада суммой S в банк.
 В первом случае ежегодно начисляется p процентов.
 Во втором случае ежемесячно начисляется p/12 процентов.
Напишите скрипт, который вычисляет и выводит сумму вклада по первому и
второму вариантам через 1, 2 , 3, … n лет. -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<form name="authForm" method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
    <p> Введите сумму вклада:<input type="text" name="s"></p>
    <p> Введите процентную ставку:<input type="text" name="p"></p>
    <p> Введите кол-во лет:<input type="text" name="n"></p>
    <input type="submit">
</form>
<?php
echo '<table border = 1 >';

echo '<tr><th>' . 'P' . '</th><th>' . 'P/12' . '</th></tr>';

$s = $_GET['s'];
$p = $_GET['p'];
$p = $p / 100;
$n = $_GET['n'];
$s2 = $s;
$s1 = $s;

for ($a = 1; $a <= $n; $a++) {
    echo '<tr>';

    $s1 += $s1 * $p;

    echo '<td>' . $s1 . '</td>';

    for ($c = 0; $c < 12; $c++) {

        $s2 += $s2 * $p / 12;

    }
    echo '<td>' . $s2 . '</td>';
    echo '</tr>';

}


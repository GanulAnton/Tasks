
<!-- Создайте аналогичные таблицы, обеспечив плавное изменение
фона строк от белого к черному средствами PHP (без градиента
CSS), цвет текста должен
изменяться таким образом,
чтобы обеспечить читаемость. -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Test</title>
    <style>
        .active1 {
            background: #ffa69a;
        }

        .active2 {
            background: #ff806e;
        }

        .active3 {
            background: #ff3635;
        }

        .active4 {
            background: #ff0f00;
        }

    </style>
</head>
<body>
<form name="authForm" method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
    Ввведите кол-во столбцов:<input type="text" name="n">
    <input type="submit">
</form>
<?php
$n = $_GET['n'];
echo '<table border="1"></br>';
echo '<tr><th>' . 'Номер п/п' . '</th><th colspan= "1000">' . 'Число' . '</th></tr>';

echo '<tr class="active1">';
if (!empty($n)) {
    echo '<td>' . '1' . '</td>';
}
for ($a = 1; $a <= $n; $a++) {

    echo '<td>' . mt_rand(10, 99) . '</td>';
}

echo '<tr class="active2">';
if (!empty($n)) {
    echo '<td>' . '2' . '</td>';
}
for ($a = 1; $a <= $n; $a++) {
    echo '<td>' . mt_rand(10, 99) . '</td>';
}

echo '<tr class="active3">';
if (!empty($n)) {
    echo '<td>' . '3' . '</td>';
}
for ($a = 1; $a <= $n; $a++) {
    echo '<td>' . mt_rand(10, 99) . '</td>';
}

echo '<tr class="active4">';
if (!empty($n)) {
    echo '<td>' . '4' . '</td>';
}
for ($a = 1; $a <= $n; $a++) {
    echo '<td>' . mt_rand(10, 99) . '</td>';
}

echo '</table>';
?>
</body>
</html>
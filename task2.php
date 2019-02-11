<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Test</title>
    <style>
        .active {
            background: #7b7c7c;
        }

    </style>
</head>
<body>
<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
Введите кол-во столбцов:<input type="text" name="n">
  <input type="submit">
</form>
<?php
$n = $_GET['n'];
echo '<table border="1"></br>';

echo'<tr><th>'.'Номер п/п'.'</th><th colspan= "1000">'.'Число'.'</th></tr>';
for ($a = 1; $a <= 4; $a++) {

    if($a%2 == 0){
        echo '<tr>';

    }
    else {
        echo '<tr class="active">';
    }

    for ($b = 1; $b <= $n ; $b++) {
        echo '<td>'.mt_rand(10,99). '</td>';

    }

    echo '</tr>';

}
echo '</table>';
?>
</body>
</html>

<p> Задание 1. Напишите скрипт, которой для числа $x вычисляет значение $y, равное
    1 – если $x положительно
    0 – если $x равно 0 и
    -1 – если $x отрицательно:  </p>

<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
    x:<input type="text" name="x">
    <input type="submit">
</form>
<?php
$x = $_GET['x'];
if(!empty($x) ) {
    switch ($x)  {
        case $x > 0 :
            $y = 1;

            break;
        case $x == 0 :
            $y = 0;

            break;
        case $x < 0 :
            $y = -1;

            break;
    }
    echo "1)Ответ c пощью Switch: $y";

    $y = $x <=> 0;
    echo "<p>2)Ответ с помощью Spaceship:  $y </p>";

    if ($x != 0) {
        if ($x > 0) {
            $y = 1;
        }
        else {
            $y = -1;
        }
    }
    else {
        $y = 0;
    }
    echo "<p>3)Ответ с помощью if else: $y</p>";
}
else
{
    echo 'ОТВЕТ: данные задания 1 не введены';
}

?>

</br>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

<p></br> Задание 2. Напишите скрипт, определяющий сумму максимального и минимального из трех
    чисел $a, $b, $c.:  </p>
<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
    a:<input type="text" name="a">
    b:<input type="text" name="b">
    c:<input type="text" name="c">
    <input type="submit">
</form>
<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];

if(!empty($a) && !empty($b) && !empty($c)) {
    if (($a >= $c && $c >= $b) || ($b >= $c && $c >= $a)) {
        $sum = $a + $b;
    }
    elseif (($c >= $b && $b >= $a) || ($a >= $b && $b >= $c)) {
        $sum = $c + $a;
    }
    elseif (($b >= $a && $a >= $c) || ($c >= $a && $a >= $b)) {
        $sum = $b + $c;
    }
    echo "Сумма чисел: $sum";
}
else{
    echo '<p>ОТВЕТ: данные задания 2 не введены</p>';
}
?>





</br>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<p></br> Задание 3. Напишите скрипт, определяющий максимальное из четырех чисел $a, $b, $c, $d.:  </p>
<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
    a:<input type="text" name="a">
    b:<input type="text" name="b">
    c:<input type="text" name="c">
    d:<input type="text" name="d">
    <input type="submit">
</form>
<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$c=$_GET['d'];
if(!empty($a) && !empty($b) && !empty($c) && !empty($d)) {
    if ($a >= $b && $a >= $c && $a >= $d) {
        $res = $a;
    }
    elseif ($b >= $a && $b >= $c && $b >= $d) {
        $res = $b;
    }
    elseif ($c >= $b && $c >= $a && $c >= $d) {
        $res = $c;
    }
    elseif ($d >= $b && $d >= $c && $d >= $a) {
        $res = $d;
    }
    echo "Максимальное число: $res";
}
else{
echo '</br>ОТВЕТ: данные задания 3 не введены';
}
?>








</br>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------



<p></br> Задание 4. Известны длина и ширина сумки $a, $b, а также длина и ширина товара $c, $d.
    Напишите скрипт, определяющий, можно ли товар упаковать в сумку. Предусмотреть
    возможность ввода длины и ширины в произвольном порядке, например, 20, 30 или 30, 20.  </p>
<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
    a:<input type="text" name="a">
    b:<input type="text" name="b">
    c:<input type="text" name="c">
    d:<input type="text" name="d">
    <input type="submit">
</form>

<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$c=$_GET['d'];
if(!empty($a) && !empty($b) && !empty($c) && !empty($d)) {
    if ($a >= $b) {
        if ($c >= $d) {
            if (($a > $c) && ($b > $d)) {

                echo 'Ответ задания 4: Товар влез!';

            }
            else {
                echo ' Ответ задания 4: Товар не влез!';
            }
        }
        else {
            if (($a > $d) && ($b > $c)) {
                echo ' Ответ задания 4: Товар влез!';
            }
            else {
                echo ' Ответ задания 4: Товар не влез!';
            }
        }

    }
    else {
        if ($d >= $c) {
            if (($a > $c) && ($b > $d)) {
                echo ' Ответ задания 4: Товар влез!';
            }
            else {
                echo ' Ответ задания 4: Товар не влез';
            }

        }
        else {
            if (($a > $d) && ($b > $c)) {
                echo ' Ответ задания 4: Товар влез!';
            }
            else {
                echo ' Ответ задания 4: Товар не влез';
            }

        }

    }
}
else{
    echo '</br>ОТВЕТ: данные задания 4 не введены';
}
?>









</br>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<p></br> Доп задание к задаче 4: </br>Задайте размер товара и сумки </p>
<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
    Длина сумки:<input type="text" name="a">
    Высота сумки:<input type="text" name="b">
    Ширина сумки:<input type="text" name="c">
    <p>Длина товара:<input type="text" name="d">
    Высота товара:<input type="text" name="e">
    Ширина товара:<input type="text" name="f"></p>
    <input type="submit">
</form>
<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];
$e=$_GET['e'];
$f =$_GET['f'];

if(!empty($a) && !empty($b) && !empty($c) && !empty($d) && !empty($e) && !empty($f)) {
    if ($a >= $c && $c >= $b){
        $maxs = $a;
        $mins = $b;
        $mids = $c;
    }
    elseif ($b >= $c && $c >= $a){
        $maxs = $b;
        $mins = $a;
        $mids = $c;
    }
    elseif ($c >= $b && $b >= $a){
        $maxs = $c;
        $mins = $a;
        $mids = $b;
    }
    elseif($a >= $b && $b >= $c) {
        $maxs = $a;
        $mins = $c;
        $mids = $b;
    }
    elseif ($b >= $a && $a >= $c){
        $maxs = $b;
        $mins = $c;
        $mids = $a;
    }
    elseif ($c >= $a && $a >= $b){
        $maxs = $c;
        $mins = $b;
        $mids = $a;
    }
    elseif ($d >= $e && $e >= $f){
        $maxt = $d;
        $mint = $f;
        $midt = $e;
    }
    if ($f >= $e && $e >= $d){
        $maxt = $f;
        $mint = $d;
        $midt = $e;
    }
    elseif ($d >= $f && $f >= $e){
        $maxt = $d;
        $mint = $e;
        $midt = $f;
    }
    elseif ($e >= $f && $f >= $d){
        $maxt = $e;
        $mint = $d;
        $midt = $f;
    }
    elseif ($f >= $d && $d>= $e){
        $maxt = $f;
        $mint = $d;
        $midt = $e;
    }
    elseif ($e >= $d && $d >= $f){
        $maxt = $e;
        $mint = $f;
        $midt = $d;
    }
    if($maxs>$maxt && $mids>$midt && $mins > $mint){

        echo '<p> Ответ доп. задания 4: Товар влез!</p>';
        }
    else{

        echo ' Ответ доп. задания 4: Товар не влез!';
    }


}
else{
    echo '<p>ОТВЕТ: данные не введены</p>';
}
?>





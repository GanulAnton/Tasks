
<!-- Задание 1. Напишите скрипт, выводящий квадраты и кубы чисел от 2 до n в
следующем виде.-->
<?php
echo '<table border = 1 >';

echo '<tr><th>' . 'Число' . '</th><th>' . 'Квадрат числа' . '</th><th>' . 'Куб числа' . '</th></tr>';

$z=2;
$n=5;
    for($a=1; $a<=$n;$a++){

        echo '<tr>';

                echo'<td>'.$z.'</td>';
                echo'<td>'.pow($z,2).'</td>';
                echo'<td>'.pow($z,3).'</td>';

        echo '</tr>';
        $z++;

    }

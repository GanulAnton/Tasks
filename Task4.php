<?php
echo '<table border = 1 >';

echo '<tr><th>' . 'Число' . '</th><th>' . 'Квадрат числа' . '</th><th>' . 'Куб числа' . '</th></tr>';

$z=2;
$n=5;
$y=2;
    for($a=1; $a<=$n;$a++){

        echo '<tr>';

                echo'<td>'.$z.'</td>';
                echo'<td>'.pow($z,2).'</td>';
                echo'<td>'.pow($z,3).'</td>';

        echo '</tr>';
        $z++;

    }

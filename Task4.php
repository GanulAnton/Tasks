<?php
echo '<table border = 1 >';

echo '<tr><th>' . 'Число' . '</th><th>' . 'Квадрат числа' . '</th><th>' . 'Куб числа' . '</th></tr>';



    for($a=1; $a<=100;$a++){

        echo '<tr>';

            for($b=1; $b<=3;$b++){

                echo'<td>'.pow(2,2).'</td>';

            }



        echo '</tr>';
    }

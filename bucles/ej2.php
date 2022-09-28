<?php
/**
 * @author Jose Luis Pérez Lara
 * Sumar los 3 primeros números pares.
*/
$sum = 0;
for ($i=0; $i <= 6; $i++) { 
    if ($i % 2 == 0) {
        $sum += $i;
    }
}
echo "La suma de los 3 primeros números pares es $sum";
echo '</br>Enlace a <a href="https://github.com/JoseLuixrax/DWESUd3/blob/main/bucles/ej2.php" target="_blank">GitHub</a>';
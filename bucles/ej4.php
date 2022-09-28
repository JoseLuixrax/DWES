<?php
/**
 * @author Jose Luis Pérez Lara
 * Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor hexadecimal que le corresponde. 
 * Cada celda será un enlace a una página que mostrará un fondo de pantalla con el color seleccionado. 
 * ¿Puedes hacerlo con los conocimientos que tienes?
 */
$n = 10;
$m = 10;
echo '<table border="1">';
for ($i=1; $i <= $n; $i++) { 
    echo '<tr>';
    for ($j=1; $j <= $m; $j++) { 
        echo '<td>';
        echo $i * $j;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '</br>Enlace a <a href="https://github.com/JoseLuixrax/DWESUd3/blob/main/bucles/ej4.php" target="_blank">GitHub</a>';


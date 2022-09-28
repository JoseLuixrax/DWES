<?php
/**
 * @author Jose Luis Pérez Lara
 * Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas
 */
echo '<table border="1">';
for ($i=1; $i <= 10; $i++) { 
    echo '<tr>';
    for ($j=1; $j <= 10; $j++) { 
        echo '<td>';
        echo $i * $j;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '</br>Enlace a <a href="https://github.com/JoseLuixrax/DWESUd3/blob/main/bucles/ej3.php" target="_blank">GitHub</a>';

<?php
/**
 * @author Jose Luis Pérez Lara
 * Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas
 */
$n = 10;
$m = 10;
echo '<table border="1">';
// Cabeceras
echo '<th bgcolor="#0000FF">';
echo '1';
echo '</th>';
for ($i=1; $i <= $n; $i++){
    echo '<td bgcolor="#0000FF">';
    echo "$i";
    echo '</td>';
}
// Tablas
for ($i=1; $i <= $n; $i++) { 
    echo '<tr >';
    echo '<td bgcolor="#0000FF">';
    echo "$i";
    echo '</td>';

    for ($j=1; $j <= $m; $j++) { 
        echo '<td>';
        echo $i * $j;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '</br>Enlace a <a href="https://github.com/JoseLuixrax/DWESUd3/blob/main/bucles/ej3.php" target="_blank">GitHub</a>';

<?php
/**
 * @author Jose Luis Pérez Lara
 * Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor hexadecimal que le corresponde. 
 * Cada celda será un enlace a una página que mostrará un fondo de pantalla con el color seleccionado. 
 * ¿Puedes hacerlo con los conocimientos que tienes?
 */
for ($r=0; $r < 255; $r++) { 
    for ($g=0; $g < 255; $g++) { 
        for ($b=0; $b < 255; $b++) { 
            echo '<a href="ej4.php?r='.$r.'&g='.$g.'&b='.$b.'">';
            echo '<div style="width: 50px; height: 50px; background-color: rgb('.$r.','.$g.','.$b.');"></div>';
            echo '</a>';
        }
    }
}

echo '</table>';
echo '</br>Enlace a <a href="https://github.com/JoseLuixrax/DWESUd3/blob/main/bucles/ej4.php" target="_blank">GitHub</a>';
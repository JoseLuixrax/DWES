<?php
/**
 * Ud3 EJ2
 * @author Jose Luis Pérez Lara
 * 2. Carga en variables mes y año e indica el número de días del mes. Utiliza la estructura de control switch
 */
$year = 2020;
$value = 0;
$month = 3;
$month31 = [1,3,5,7,8,10,12];
$month30 = [4,6,9,11];
if (in_array($month,$month31)) {
    $value = 1;
} elseif (in_array($month,$month30)) {
    $value = 2;
} elseif($month == 2 && $year % 4 == 0 && ($year % 100 != 0 && $year % 400 == 0)){
    $value = 3;
} else {
    $value = 4;
}


switch ($value) {
    case '1':
        echo "Tiene 31";
        break;
    case '2':
        echo "Tiene 30";
        break;
    case '3':
        echo "Tiene 29";
        break;
    default:
        echo "Tiene 28";
        break;
}


echo '</br>Enlace a <a href="https://github.com/JoseLuixrax/DWESUd3/blob/main/ej2.php" target="_blank">GitHub</a>';
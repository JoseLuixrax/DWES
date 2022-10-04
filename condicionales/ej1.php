<?php
/**
 * Ud3 EJ1
 * @author Jose Luis Pérez Lara
 * 1. Almacena tres números en variables y escribirlos en pantalla de manera ordenada.
 */
$num1 = 1;
$num2 = 20;
$num3 = 3;

if ($num1 > $num2 && $num1 > $num3) {
    echo "$num1,";
    if ($num2 > $num3) {
        echo "$num2, $num3";
    } else {
        echo "$num3, $num2";
    }
}   elseif ($num2 > $num1 && $num2 > $num3) {
    echo "$num2, ";
    if ($num1 > $num3) {
    echo "$num1, $num3";
    }   else {
        echo "$num3, $num1";
    }
} else {
    echo "$num3, ";
    if ($num1 > $num2) {
        echo "$num1, $num2";
    } else{
        echo "$num2, $num1";
    }
}
echo '</br>Enlace a <a href="https://github.com/JoseLuixrax/DWESUd3/blob/main/ej1.php" target="_blank">GitHub</a>';
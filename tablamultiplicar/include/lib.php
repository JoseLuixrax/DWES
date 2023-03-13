<?php

/**
 * existeCoordenadas. Determina si dos coordenadas están en un array
 */

function existeCoordenada($fila, $columna, $array): bool
{
    $existe = false;
    foreach ($array as $clave => $valor) {
        if (($valor["f"] == $fila) && ($valor["c"] == $columna)) {
            $existe = true;
        }
    }
    return $existe;
}

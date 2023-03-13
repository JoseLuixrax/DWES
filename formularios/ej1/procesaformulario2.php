<?php
/**
 * Procesado del formulario generado dinamicamente
 * @author Jose Luis Pérez Lara
 */

// var_dump($_POST);
foreach ($_POST as $key => $value){
    if ($key != "send"){
        echo $key. " es: ". $value . "<br/>";
    }
}

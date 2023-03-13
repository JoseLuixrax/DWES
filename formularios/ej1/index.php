<?php

/**
 * Generación dinámica de formulario
 * @author Jose Luis Pérez Lara
 */
$aDatosPersonales = array("nombre", "apellidos", "telefono");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="procesaformulario2.php" method="post">
        <?php
        foreach ($aDatosPersonales as $key => $value) {
            echo '<input type="text" name="' . $value . '" value=""/>';
        }
        ?>
        <input type="submit" name="send" value="send" />
        
    </form>
</body>

</html>




<!-- <form action="procesaformulario1.php" method="post">
        <input type="number" name="number1" value="numero 1 a sumar"/>
        <input type="number" name="number2" value=" numero 2 a sumar"/>
        
    </form> -->
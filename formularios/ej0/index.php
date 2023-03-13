<?php

/**
 * @author Jose Luis Pérez Lara
 */

$numero1 = 0;
$numero2 = 0;

$mensajeError1 = "";
$mensajeError2 = "";

$procesaForm = false;

if(isset($_POST["enviar"])){
    $procesaForm = true;
    $number1 = $_POST["numero1"];
    $number2 = $_POST["numero2"];
    // Validamos input 1
    if (empty($number1)){
        $mensajeError1 = "Campo requerido";
        $mensajeError2 = "Campo requerido";
        $procesaForm = false;
    } 
}
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
    <?php
    if ($procesaForm) {
        echo $numero1 + $numero2;
    } else {
    ?> <form action="" method="post">
            <input type="number" name="numero1" value="<?php echo $number1; ?>" /> <?php echo $mensajeError1; ?>
            <br/>
            <input type="number" name="numero2" value="<?php echo $number2; ?>" /> <?php echo $mensajeError2; ?>
            <br/>
            <input type="submit" name="enviar" />
        </form>
    <?php 
    }

    ?>

</body>

</html>
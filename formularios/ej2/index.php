<?php

/**
 * Generación dinámica de formulario
 * @author Jose Luis Pérez Lara
 */
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
        <input type="checkbox" id="cbox1" value="first_checkbox" name="cbox1"> <label> Este es mi primer checkbox </label> <br>
        <input type="checkbox" id="cbox2" value="second_checkbox" name="cbox2"> <label> Este es mi segundo checkbox </label> <br>
        <!-- <select name="select">
            <option value="value1" selected>Value 1</option>
            <option value="value2">Value 2</option>
            <option value="value3">Value 3</option>
        </select> -->
        <input type="submit" name="send">
    </form>
</body>

</html>
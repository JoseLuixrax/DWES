<?php
/**
 * @author Jose Luis Pérez Lara
 */
$index = "Tema 3";
$contador = 3;
$ejercicios = array(
    "Tema 3"=> array(
            array(
                "Titulo"=>"Ejercicio 1",
                "Enlace"=>"./ud3/bucles/ej1.php",
                "Descripcion"=>"Ejercicio 1",
                "Tags"=>"bucles",
                "Fecha"=>"03/10/2022",
                "Github"=>"https://github.com/JoseLuixrax/DWESUd3/blob/main/bucles/ej1.php"
            ),
            array(
                "Titulo"=>"Ejercicio 2",
                "Enlace"=>"./ud3/bucles/ej2.php",
                "Descripcion"=>"Ejercicio 2",
                "Tags"=>"bucles",
                "Fecha"=>"03/10/2022",
                "Github"=>"https://github.com/JoseLuixrax/DWESUd3/blob/main/bucles/ej2.php"
            ),
            array(
                "Titulo"=>"Ejercicio 3",
                "Enlace"=>"./ud3/bucles/ej3.php",
                "Descripcion"=>"Ejercicio 3",
                "Tags"=>"bucles",
                "Fecha"=>"03/10/2022",
                "Github"=>"https://github.com/JoseLuixrax/DWESUd3/blob/main/bucles/ej3.php"
            ),
        ),
    // "Tema 4"=> array(
    //         array(
    //             "Titulo"=>"Ejercicio 1",
    //             "Enlace"=>"./ud4/bucles/ej1.php",
    //             "Descripcion"=>"Ejercicio 1",
    //             "Tags"=>"bucles",
    //             "Fecha"=>"04/10/2022",
    //             "Github"=>""
    //         )
    //     )
);
foreach ($ejercicios as $tema => $value) {
    echo "<h1>".$tema. "</h1>";
    foreach ($ejercicios[$index] as $clave => $valor) {
        echo "<h2><a href='" . $valor["Enlace"] . "'>" . $valor["Titulo"] . "</a><br><h2/>";
    }
    $contador++;
    $index = "Tema " . $contador;
}
echo '</br>Enlace a <a href="https://github.com/JoseLuixrax/DWESUd3/blob/main/index.php" target="_blank">GitHub</a>';
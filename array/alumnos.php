<?php
/**
 * @author Jose Luis Pérez Lara
 */

$aAlumnos = array(
            array('nombre'=>'a1','foto'=>'img1.jpg'),
            array('nombre'=>'a2','foto'=>'img2.jpg'),
            array('nombre'=>'a3','foto'=>'img3.jpg'),
            array('nombre'=>'a4','foto'=>'img4.jpg')
);

$n = rand(0,4 -1);
echo $aAlumnos[$n]['nombre'];

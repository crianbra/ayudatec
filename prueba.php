<?php
require_once("rol.php");
$idRol = "100";
$descripcion = "administracion";
$test = new rol();
$test->setIdRol($idRol);
$test->setDescripcion($descripcion);
echo "el id es: ". $test->getIdRol();
echo " la descripcion del rol es: ". $test->getDescripcion();
?>

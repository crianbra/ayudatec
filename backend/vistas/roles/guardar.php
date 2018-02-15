<?php
session_start();
?>
<html>
<head>
</head>
<body>

<div id="main">

<?php
$descripcion = $_POST['descripcion'];

//echo 'Hola ' .htmlspecialchars($descripcion) . '!';
include_once("../../collectors/rolCollector.php");

$RolCollectorObj = new RolCollector();
$ObjRol = $RolCollectorObj->createRol($descripcion);

echo "Se ha guardado correctamente </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

<?php
session_start();

include_once("../constantes.php");
?>

<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Eliminar</title>
</head>
<body>

<div id="main">

<?php
    
$id=$_GET["id"];
$nombre=$_GET["nombre"];

echo "Edicion en proceso..... </br>";
    
include_once("../../collectors/personaCollector.php");
include_once("../../models/persona.php");
                                    
$PersonaObj = new PersonaCollector();
$PersonaObj->deletePersona($id);

echo "valor id:".htmlspecialchars($id)." se borro " .$nombre." </br>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>

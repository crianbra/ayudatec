<html>
<head>
</head>
<body>

<div id="main">

<?php
    
$valor = $_POST['descripcion'];

echo 'Hola ' .htmlspecialchars($valor) . '!';
include_once("../../collectors/rolCollector.php");
    
$RolCollectorObj = new RolCollector();

echo "Se ha guardado correctamente </br>";
    
     if (isset($_POST["descripcion"])) {
     $descripcion =($_POST["descripcion"]);
     

     if ($RolCollectorObj->createRol($descripcion)) {
         //var_dump($obj);
     	echo "Se ha guardado correctamente </br>";
         header("Location: index.php");
         exit();
     } else {
         
     }
 } else {
    echo "Hubo un error al intentar crear el usuario.";
}
    
    

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>

<?php
  session_start();
?>

<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Administrador</title>
</head>

<body>
	

<?php
	if(isset($_SESSION['MiSesion'])){
	echo "<p> Hola usuario:(" . $_SESSION['MiSesion']. ")
			[<a href='salir.php'>Salir</a>]";
	
?>

	</br></br>
	<a href='index_demo.php'>Demo</a></br></br>
	<a href='index_demo.php'>Demo_Ciudad</a></br></br>
	<a href='index_demo.php'>Ciudad</a></br>
        
	 

<?php } else { ?>

<br/>
error con la sesion
<?php } ?>

</body>
</html>

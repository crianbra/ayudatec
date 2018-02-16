<?php
include_once('../../collectors/rolCollector.php');
include_once('../../models/rol.php');

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Insertar</title>
</head>
<body>

<h1>Insertar Rol</h1>


<form action="guardar.php" method="post">
    <fieldset>        
		<label for="descripcion">Descripcion</label>
		<input type="text" id="descripcion" name="descripcion" placeholder="Descripcion" autofocus required />
        <br />
        <button type="submit">Guardar</button>        
    </fieldset>
</form>

 

</body>
</html>

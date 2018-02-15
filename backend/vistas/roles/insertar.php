<?php
  session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/ayudatec/backend/collectors/rolCollector.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ayudatec/backend/models/rol.php';

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
		<label>Descripcion</label>
		<input type="text" id="descripcion" name="descripcion" autofocus required />
        <br />
        <button type="submit">Guardar</button>        
    </fieldset>
</form>

 

</body>
</html>

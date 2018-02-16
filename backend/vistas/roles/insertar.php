<?php
include_once('../../collectos/rolCollector.php');
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
        
        <div class="form-group">
            <label for="descricpion">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" rows="6" autofocus required>
        </div>
        
        <button type="submit">Guardar</button>        
    </fieldset>
</form>

 

</body>
</html>

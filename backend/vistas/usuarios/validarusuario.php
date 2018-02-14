<?php

include_once(RUTA_BACKEND.'collectors/usuarioCollector.php');

session_start();


$username = $_POST['nombreusuario'];
$pass = $_POST['contrasenia'];
$UsuarioCollectorObj = new UsuarioCollector();

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        
            
    </head>
    <body>
        
        
        <?php
        foreach ($UsuarioCollectorObj->showUsuarios() as $c){
            
            if($c->getNombreusuario() == $username && $c->getContrasenia() == $pass){
               
                $_SESSION['user']= $username;
                $_SESSION['rol']= $c->getIdrol();
                 
                
            if($c->getIdrol() == 1){
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=backend/vistas/roles/index.php'>";

            }
            if($c->getIdrol() == 2){
                echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=registro.php'>";

            }
            }
        }
        
        if (!isset($_SESSION['user'])){
        ?>

            <h4>Usuario o contraseña incorrecta</h4>
            <a href="registro.php"><button class="boton">Regresar</button></a>




            <?php
             
        }
        
       ?>
	
    </body>
</html>



<?php

include_once("usuarioCollector.php");
include_once("../../models/usuario.php");

session_start();

//$_SESSION['MiSession']= $_POST['nombreusuario'];

$nombreusuario = $_POST['nombreusuario'];
$contrasenia = $_POST['contrasenia'];
$UsuarioCollectorObj = new UsuarioCollector();

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        
            
    </head>
    <body>
        
        
        <?php
        foreach($UsuarioCollectorObj->showUsuarios() as $c){
            
            if($c->getNombreusuario()==$nombreusuario && $c->getContrasenia()==$contrasenia){
               
                $_SESSION['user']= $nombreusuario;
                $_SESSION['rol']= $c->getRolid();
                 
                
                if($c->getRolid() == 1){
                    //echo "session creada exitosamente";
                    //echo "<a href='admin.php'> Administracion</a>";
                    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../admin/admin.php'>";

                }
                if($c->getRolid() == 2){
                    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../registro.html'>";

                }
            }
        }
        
        if (!isset($_SESSION['user'])){
        ?>
            
            <h4>Usuario o contraseña incorrecta</h4>
            <a href="../../../registro.php"><button class="boton">Regresar</button></a>




            <?php
             
        }
        
       ?>
	
    </body>
</html>



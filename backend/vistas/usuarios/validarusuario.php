<?php

include_once("../../collectors/usuarioCollector.php");
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
                
               
                $_SESSION['user']= $c;
                $_SESSION['rol']= $c->getRolid();
                
                //echo $c->getRolid()->getIdrol(); 
                //exit();
                if($c->getRolid()->getIdrol() == 1){
                    //echo "session creada exitosamente";
                    //echo "<a href='admin.php'> Administracion</a>";
                    //exit();
                    /* echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../admin/admin.php'>"; */
                    if($_SERVER["SERVER_NAME"] == "localhost")
                    {
                        header("Location: http://localhost/ayudatec/backend/vistas/admin/admin.php", true, 301);
                        exit();
                    }
                    else
                    {
                        header("Location: http://ayudatec.herokuapp.com/backend/vistas/admin/admin.php", true, 301);
                        exit();
                    }
                    

                }
                if($c->getRolid()->getIdrol() == 2){
                    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../../registro.php'>";

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
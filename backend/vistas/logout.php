<?php
session_start();

    define("RUTA_PRINCIPAL", $_SERVER['DOCUMENT_ROOT'].'/ayudatec/');
    define("RUTA_BACKEND", RUTA_PRINCIPAL.'backend/');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="../assets/images/favicon.png">

    <title>Administrador</title>

    <!--Core CSS -->
    <link href="../assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/js/data-tables/DT_bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet" />

</head>

<body class="body-500">
    <div class="error-head"> </div>

    <div class="container ">

        <section class="error-wrapper text-center">
            <h1><img src="../../assets/images/mascota.svg" alt=""></h1>
            <div class="error-desk">

                <div class="intro-message">

                        <div id="logout">

                            <?php
                                if (isset($_SESSION['user'])){
                                    session_destroy();
                                echo '<h2>Ha terminado la sesión </h2>';
                                }else{       
                                }
                            ?>
                        </div>
                </div>
                <p>Gracias por ser parte de la primera comunidad de técnicos en el Ecuador.</p>
            
                <a href="../../index.php" class="back-btn"><i class="fa fa-home"></i> Ir al inicio</a>
            </div>
        
        </section>

    </div>
    
</body>
</html>

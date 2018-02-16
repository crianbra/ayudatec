<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="../admin/admin.php" class="logo">
        <img src="../../assets/images/logo_ayudatec_bn.png" alt="Ayudatec">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->


<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
       
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <!-- <img alt="" src="../../assets/images/avatar1_small.jpg"> -->
                <?php
                    include_once("../../collectors/usuarioCollector.php");
                    $UsuarioCollectorObj = new UsuarioCollector();
                    $usuarios = $UsuarioCollectorObj->showUsuarios();
                    foreach ($usuarios as $c){
                                ?>
                <span class="username"><?=$c->getNombreusuario();?></span>
                <b class="caret"></b>
            </a>
            
            <?php
                                    }
                                ?>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-male"></i>Perfil</a></li>
                <li><a href="#"><i class="fa fa-lock"></i> Seguridad</a></li>
                <li><a href="../logout.php"><i class="fa fa-key"></i> Cerrar sesión</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->

    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->

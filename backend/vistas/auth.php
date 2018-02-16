<?php

include_once("../../models/usuario.php");

session_start();

if (!isset($_SESSION['user'])) {
    if($_SERVER["SERVER_NAME"] == "localhost")
    {
        header("Location: http://localhost/ayudatec/", true, 301);
        exit();
    }
    else
    {
        header("Location: http://ayudatec.herokuapp.com", true, 301);
        exit();
    }
}

?>
<?php

if (isset($_POST['vista']) && $_POST['vista'] !=="") {

    switch ($_POST['vista']) {
        case 'preregistro':
            echo "i es igual a 0";
            break;
    }
} else {
    header('Location: /backend/vistas/citas/index.php');
}
    
?>
<?php
    
    require_once "conexion.php";
    
    $con = new conector_pg();
    $sql1 = 'SELECT * FROM calificacion';
    $result=$con->consultar($sql1);
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                foreach ($line as $col_value) {
                    echo $col_value;
                }
            }
    $con->__destruct();
?>
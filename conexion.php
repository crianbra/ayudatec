<?php
    class conector_pg
    {
        var $host; //direccion ip del host donde nos conectamos a la bd
        var $bd; //nombre de la base de datos
        var $usuario; //usuario de conexion
        var $password; //clave del usuario de conexion
        var $link; //almacenamos el link para luego destruirlo

        //constructor
        function __construct($host='127.0.0.1', $bd='ayudatec', $user='postgres', $pass='postgres')
        {
            $this->host = $host;
            $this->bd = $bd;
            $this->usuario = $user;
            $this->password = $pass;
        }

        // funcion que ejecuta la consulta en la base de datos
        // en esta funcion envio el sql puede ser insert, update, select
        function consultar($sql)
        {
            //ensamblamos el string de conexion
            $datos_bd = "host ='$this->host' dbname='$this->bd' user='$this->usuario' password='$this->password'";
            //establecemos el link
            $link = pg_connect($datos_bd);
            //cargamos la variable para el destructor el cual elimina la conexion
            $this->link = $link;
            //ejecutamos la consulta
            $query = pg_query($link, $sql);
            if (!$query) echo $sql; //si no ejecuta la consulta imprimo el sql que llega solo cuando hacemos pruebas
            return $query;
            
        }

        //destructor: aca elimino la conexion con postgres
        function __destruct()
        {
            pg_close($this->link);
        }
    }
?>
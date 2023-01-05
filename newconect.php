<?php
    conectarmysql();
    function conectarmysql(){
        $server = 'dbseminario.mysql.database.azure.com';
        $user = 'administrador@dbseminario';
        $pass = 'Gabriellah26';
        $db = 'seminario2023';
        $conectar = mysqli_connect($server, $user, $pass, $db) or die ("error en conexión");
        return $conectar;
    }

?>
<?php
$conexion=mysqli_init();
mysqli_ssl_set($conexion, NULL, NULL, "ssl/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
mysqli_real_connect($conexion, "dbseminario.mysql.database.azure.com",
"administrador@dbseminario", "Gabriellah26", "seminario2023", 3306, 
MYSQLI_CLIENT_SSL) or die ("error al conectar " . mysqli_error());
?>
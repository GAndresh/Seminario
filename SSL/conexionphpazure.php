<?php
$con=mysqli_init(); 
mysqli_ssl_set($con, NULL, NULL, "BaltimoreCyberTrustRoot.crt.pem", NULL, NULL); 
mysqli_real_connect($con, "dbseminario.mysql.database.azure.com", "administrador@dbseminario", "Gabriellah26", "seminario2023", 3306,
MYSQLI_CLIENTE_SSL) or die ("Error al conectar" . mysqli_error());
?>
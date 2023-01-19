<?php
require "csv/Exception.php";
require "csv/PHPMailer.php";
require "csv/SMTP.php";

use csv\PHPMailer.php;
use csv\csv/Exception.php;

$oMail = new PHPMailer();
$omail -> Host="smtp.gmail.com";
$omail -> Port=587;
$oMail -> SMTPSecure="tls";
$oMail -> SMTPAuth = true;
$oMail -> Username="programacionwebg2@gmail.com";
$oMail -> Password="Gabriellah2";
$oMail -> setFrom("programacionwebg2@gmail.com", "Sistema de Alertas");
$oMail -> addAddress("programacionwebg2@gmail.com", "Sistema de Alertas2");
$oMail -> Subject= "Bienvenido al sistema";
$oMail -> msgHTML("Hola soy un mensaje");

if($oMail -> send()){
    echo $oMail -> ErrorInfo;
}



?>
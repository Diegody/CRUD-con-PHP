<?php 

session_start();

$host = "localhost";
$user = "root";
$password = "";
$bd = "databaseweb";

$con = mysqli_connect($host, $user, $password, $bd) or die('Falló la conexion');

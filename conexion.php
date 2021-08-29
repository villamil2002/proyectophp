<?php
session_start();

$servername = "LAPTOP-1A1A3CUB";
$username = "taller";
$password = "desa";
$dbname = "proyecto";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if  (!$conn){
    die (" Conexion fallida: " . mysqli_connect_error());
}
echo"Conectada";
?>

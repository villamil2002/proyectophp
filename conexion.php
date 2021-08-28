<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "villamil2002";
$dbname = "proyecto";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if  (!$conn){
    die (" Conexion fallida: " . mysqli_connect_error());
}
echo"Conectada";
?>
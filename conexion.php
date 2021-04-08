<?php
$servername="localhost";
$username="root";
$password="";
$dbname="juego";

$conn=new mysqli($servername,$username,$password,$dbname,3307);
    if($conn->connect_error){
        die("Conexion fallida:".$conn->connect_error);
    }
    echo "Conexion aceptada";




?>
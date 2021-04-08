<?php
include('conexion.php');

$loginUser=$_POST["loginUser"];
$loginPass=$_POST["loginPass"];

$sql="SELECT contrasena FROM usuarios WHERE nombreID='".$loginUser."'";
$result=$conn->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        if($row["contrasena"]==$loginPass){
            echo "Bienvenido";
        }else{
            echo "Wrong Credentials";
        }
    }
}else{
    echo "Usuario no Existe";
}
$conn->close();
?>

<?php
include('conexion.php');
$loginName=$_POST["nombre"];
$loginLastName=$_POST["apellido"];
$loginUser=$_POST["nombreID"];
$loginAge=$_POST["edad"];
$loginPassword=$_POST["contrasena"];
$loginPassword=hash('sha512',$loginPassword);


$sql="SELECT nombreID FROM usuarios WHERE nombreID='".$loginUser."'";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo "Usuario ya existe";
}else{
    echo "Usuario creado";

    $sql2="INSERT INTO usuarios(nombre,apellido,nombreID,contrasena,edad) VALUES('".$loginName."','".$loginLastName."','".$loginUser."','".$loginPassword."','".$loginAge."')";
    if($conn->query($sql2)==TRUE){
        echo "New record create succesfully";
    }else{
        echo "Error".$sql2."<br>".$conn->error;
    }
}
$conn->close();




?>
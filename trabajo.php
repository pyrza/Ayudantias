<?php

$conexxx=mysqli_connect("db.inf.uct.cl","A2021_ibustos","A2021_ibustos","A2021_ibustos");

$emp=$_POST['empresa'];
$Nom=$_POST['nombre'];
$correo=$_POST['correo'];
$tell=$_POST['tell'];
$cargo=$_POST['cargo'];
$Com=$_POST['Comentario'];
$fech = date("d/m/y");
$Insert="INSERT INTO `trabajos`(`NomEmpresa`, `NomApeContacto`, `correo`, `telefono`, `cargo`, `texto`, `fecha`) 
        VALUES ('$emp','$Nom','$correo','$tell','$cargo','$Com','$fech')";

echo mysqli_query($conexxx,$Insert);



?>
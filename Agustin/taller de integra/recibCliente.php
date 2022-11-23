<?php
include('config.php');
$nombreEmpresa = $_REQUEST['nombreEmpresa'];
$nombreContacto = $_REQUEST['nombreContacto'];
$apellidoContacto = $_REQUEST['apellidoContacto'];
$correo = $_REQUEST['correo'];
$numeroTelefono = $_REQUEST['numeroTelefono'];
$cargoARealizar = $_REQUEST['cargoARealizar'];
$descripcion = $_REQUEST['descripcion'];



$QueryInsert = ("INSERT INTO trabajos(
    nombreEmpresa,
    nombreContacto,
    apellidoContacto,
    correo,
    numeroTelefono,
    cargoARealizar,
    descripcion
    

)
VALUES (
    '".$nombreEmpresa. "',
    '".$nombreContacto. "',
    '".$apellidoContacto."',
    '".$correo. "',
    '".$numeroTelefono. "',
    '".$cargoARealizar. "',
    '".$descripcion. "'


)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:index.php");
?>

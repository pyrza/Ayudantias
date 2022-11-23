
<?php
include('config.php');
$nombreEmpresa = $_REQUEST['nombreEmpresa'];
$nombreContacto = $_REQUEST['nombreContacto'];
$apellidoContacto = $_REQUEST['apellidoContacto'];
$correo = $_REQUEST['correo'];
$numeroTelefono = $_REQUEST['numeroTelefono'];
$cargoARealizar = $_REQUEST['cargoARealizar'];
$descripcion = $_REQUEST['descripcion'];


$update = ("UPDATE trabajos 
	SET 
	nombreEmpresa  ='" .$nombreEmpresa. "',
	nombreContacto  ='" .$nombreContacto. "',
	apellidoContacto ='" .$apellidoContacto. "' ,
	correo ='" .$correo. "' ,
	numeroTelefono ='" .$numeroTelefono. "' ,
	cargoARealizar ='" .$cargoARealizar. "' ,
	descripcion ='" .$descripcion. "' ,

WHERE id='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>



<?php
include_once('db.php');

        $nombreEmpresa = $_POST['nombreEmpresa'];
        $nombreContacto = $_POST['nombreContacto'];
        $apellidoContacto = $_POST['apellidoContacto'];
        $correo = $_POST['correo'];
        $numeroTelefono = $_POST['numeroTelefono'];
        $cargoARealizar = $_POST['cargoARealizar'];
        $descripcion = $_POST['descripcion'];
        
        
        echo "los datos son los siguentes: <br>";
        echo "$nombreEmpresa, $nombreContacto , $apellidoContacto, $correo, $numeroTelefono, $cargoARealizar, $descripcion";


        $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);      
        $sql = "INSERT INTO  practica(nombreEmpresa, nombreContacto, apellidoContacto, correo, numeroTelefono, cargoARealizar, descripcion)
        VALUES  ('$nombreEmpresa', '$nombreContacto' , '$apellidoContacto', '$correo', '$numeroTelefono', '$cargoARealizar', '$descripcion')";
    
        $result = mysqli_query($conectar, $sql) or trigger_error("Querry failed! SQL Error: ".mysqli_error($conectar), E_USER_ERROR);
        echo "$sql";
       

?>

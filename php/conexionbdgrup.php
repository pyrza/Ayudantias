<?php
function conectar(){
    $conex=mysqli_connect("db.inf.uct.cl","A2022_ejaramillo","A2022_ejaramillo","A2022_ejaramillo");
    //$conexion=mysqli_connect("localhost","root","","test1");

    if($conexion){
        return $conexion;
    }
    else{
        echo "Error al conectar a la BD";
    }
}
?>

<?php

$conexion=mysqli_connect("db.inf.uct.cl","A2022_ejaramillo","A2022_ejaramillo","A2022_ejaramillo");

$nombre=$_POST['nombre'];

$apellido=$_POST['apellido'];

$correo=$_POST['correo'];

$telefono=$_POST['telefono'];

$carrera=$_POST['carrera'];

$asignatura=$_POST['asignatura'];


$db="INSERT INTO ayudantia(nombre, apellido, correo, telefono, carrera, asignatura) 
        VALUES ('$nombre','$apellido','$correo','$telefono','$carrera','$asignatura')";

echo mysqli_query($conexion,$db);
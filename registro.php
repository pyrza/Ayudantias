<?php
include("conexion.php");
$conexion=conectar();
/// Obtenemos el json enviado
$data = file_get_contents('php://input');
// Los convertimos en un array
$datos=json_decode($data,true);

$nombre=$datos['nombre'];
$email=$datos['email'];
$usernick=$datos['usernick'];
$password=$datos['password'];

$consultaEmail = "SELECT * FROM inte_user_register WHERE email='$email'";
$validateEmail = mysqli_query($conexion,$consultaEmail);

$consultaUser = "SELECT * FROM inte_user_register WHERE usernick='$usernick'";
$validateUser = mysqli_query($conexion,$consultaUser);




if(mysqli_num_rows($validateEmail) > 0 ){
    ?>
    <script>
        Window.alert("Correo En uso");
    </script>
    <?php
}elseif(mysqli_num_rows($validateUser) > 0 ){
    ?>
    <script>
        Window.alert("Usuario en uso");
    </script>
    <?php
}else{
    $sql = "INSERT INTO inte_user_register(nombre, email, usernick, `password`) 
                VALUES ('$nombre','$email','$usernick','$password')";
    if (mysqli_query($conexion , $sql)){
            echo "New record created successfully";
            ?>
            <script>
                Window.alert("Registro exitoso");
                document.getElementById('formulario').reset();
            </script>
            <?php

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        ?>
        <script>
            Window.alert("error al intentar registrar");
        </script>
        <?php
    }
}

?>
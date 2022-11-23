<?php

require 'Conexion.php';

/* Se crea un arreglo con los nombre de las columnas a mostrar de la BS */
$columns = [ 'nombre', 'apellido', 'correo', 'telefono', 'carrera', 'asignatura', 'fecha','hora'];

/* Asignamos otra variable con el nombre de la tabla que ocuparemos*/
$table = "ayudantia";

$campo = isset($_POST['campo']) ? $conex->real_escape_string($_POST['campo']) : null;




/* Hacemos la consulta a la tabla de la BS*/
$sql = "SELECT nombre, apellido, correo, telefono, carrera, asignatura, fecha, hora FROM ayudantia";
$resultado = $conexion->query($sql);
$num_rows = $resultado->num_rows;


/* Por ultimo, mostramos los resultados en la tabla de nuestra pagina */
$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<div class="contenedorinfo">';
        $html .= '<h2 class="empresa mostr">' . $row['nombre'] . '</h2>';
        /* $html .= '<p class="fecha mostr">' . $row['fecha'] . '</p>';
        $html .= '<p class="texto mostr">' . $row['asignatura'] . '</p>';
        $html .= '<p class="texto mostr">' . $row['hora'] . '</p>';
        $html .= '<p class="palabras mostr">Encargado:</p>';
        $html .= '<p class="contacto mostr">' . $row['apellido'] . '</p>';
        $html .= '<p class="palabras mostr">Cargo Solicitado:</p>';
        $html .= '<p class="cargo mostr">' . $row['carrera'] . '</p>';
        $html .= '<p class="palabras mostr">Telefono:</p>';
        $html .= '<p class="tell mostr">' . $row['telefono'] . '</p>';
        $html .= '<a class="correo mostr" href="mailto:'. $row['correo'] .'">Enviar Correo</a>';
        $html .= '<button class="boton-editar" type="button" onclick="editar(${value.id}) ">Editar</button>';
        $html .= '<button class="boton-eliminar" type="button" onclick="eliminar(${value.id})">Eliminar</button>'; */
        $html .= '</div>';
        
    }
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);

?>
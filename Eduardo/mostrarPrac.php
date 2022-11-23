<?php

require 'php/conect_BD.php';

/* Se crea un arreglo con los nombre de las columnas a mostrar de la BS */
$columns = [ 'nombreEmpresa', 'nombreContacto', 'apellidoContacto', 'correo', 'numeroTelefono', 'cargoARealizar', 'descripcion'];

/* Asignamos otra variable con el nombre de la tabla que ocuparemos*/
$table = "practica";

$campo = isset($_POST['campo']) ? $conex->real_escape_string($_POST['campo']) : null;




/* Hacemos la consulta a la tabla de la BS*/
$sql = "SELECT nombreEmpresa, nombreContacto, apellidoContacto, correo, numeroTelefono, cargoARealizar, descripcion FROM practica";
$resultado = $conex->query($sql);
$num_rows = $resultado->num_rows;


/* Por ultimo, mostramos los resultados en la tabla de nuestra pagina */
$html = '';


// 'NomEmpresa', 'NomApeContacto', 'correo', 'telefono', 'cargo', 'texto', 'fecha'
if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<div class="contenedorinfo">';
        $html .= '<h2 class="empresa mostr">' . $row['nombreEmpresa'] . '</h2>';
        //$html .= '<p class="fecha mostr">AAA</p>';
        $html .= '<p class="desc mostr">' . $row['descripcion'] . '</p>';
        $html .= '<p class="palabras mostr">Encargado:</p>';
        $html .= '<p class="contacto mostr">' . $row['nombreContacto'] . '</p>';
        $html .= '<p class="palabras mostr">Cargo Solicitado:</p>';
        $html .= '<p class="cargo mostr">' . $row['cargoARealizar'] . '</p>';
        $html .= '<p class="palabras mostr">Telefono:</p>';
        $html .= '<p class="tell mostr">' . $row['numeroTelefono'] . '</p>';
        $html .= '<a class="correo mostr" href="mailto:'. $row['correo'] .'">Enviar Correo</a>';
        $html .= '<button class="boton-editar" type="button" onclick="editar(${value.id}) ">Editar</button>';
        $html .= '<button class="boton-eliminar" id="boton-eliminar" type="button">Eliminar</button>';
        $html .= '</div>';
        
    }
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);

?>
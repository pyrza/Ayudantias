<?php

require 'php/conect_BD.php';

/* Se crea un arreglo con los nombre de las columnas a mostrar de la BS */
$columns = [ 'NomEmpresa', 'NomApeContacto', 'correo', 'telefono', 'cargo', 'texto', 'fecha'];

/* Asignamos otra variable con el nombre de la tabla que ocuparemos*/
$table = "trabajos";

$campo = isset($_POST['campo']) ? $conex->real_escape_string($_POST['campo']) : null;




/* Hacemos la consulta a la tabla de la BS*/
$sql = "SELECT " . implode(", ", $columns) . "
FROM $table";
$resultado = $conex->query($sql);
$num_rows = $resultado->num_rows;


/* Por ultimo, mostramos los resultados en la tabla de nuestra pagina */
$html = '';


// 'NomEmpresa', 'NomApeContacto', 'correo', 'telefono', 'cargo', 'texto', 'fecha'
if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<div class="contenedorinfo">';
        $html .= '<h2 class="empresa mostr">' . $row['NomEmpresa'] . '</h2>';
        $html .= '<p class="fecha mostr">' . $row['fecha'] . '</p>';
        $html .= '<p class="palabras mostr">Encargado:</p>';
        $html .= '<p class="contacto mostr">' . $row['NomApeContacto'] . '</p>';
        $html .= '<p class="palabras mostr">Cargo Solicitado:</p>';
        $html .= '<p class="cargo mostr">' . $row['cargo'] . '</p>';
        $html .= '<p class="texto mostr">' . $row['texto'] . '</p>';
        $html .= '<p class="tell mostr">Telefono: ' . $row['telefono'] . '</p>';
        $html .= '<a class="correo mostr" href="mailto:'. $row['correo'] .'">Enviar Correo</a>';
        $html .= '</div>';
        
    }
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);

?>
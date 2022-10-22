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
        $html .= '<div>';
        $html .= '<h2>' . $row['NomEmpresa'] . '</h2>';
        $html .= '<p>' . $row['NomApeContacto'] . '</p>';
        $html .= '<p>' . $row['correo'] . '</p>';
        $html .= '<p>' . $row['telefono'] . '</p>';
        $html .= '<p>' . $row['cargo'] . '</p>';
        $html .= '<p>' . $row['texto'] . '</p>';
        $html .= '<p>' . $row['fecha'] . '</p>';
        $html .= '</div>';
        
    }
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);

?>
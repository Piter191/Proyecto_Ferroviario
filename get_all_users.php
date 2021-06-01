<?php
include('funciones/setup.php');

$sql = "SELECT * FROM usuario";
$data = mysqli_query(conectar(), $sql);
$jsondata = array();
while($datos=mysqli_fetch_array($data)) {
    array_push($jsondata, array(
        'nombre' => $datos['nombre'],
        'rut' => $datos['rut'],
        'id_usuario' => $datos['id_usuario'],
        'tipo_usuario' => $datos['tipo_usuario'],
        'clave' => $datos['clave'],
    ));
}
header('Content-type: application/json');
echo json_encode($jsondata)
?>
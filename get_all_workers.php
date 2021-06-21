<?php
include('funciones/setup.php');

$sql = "SELECT * FROM trabajador";
$data = mysqli_query(conectar(), $sql);
$jsondata = array();
while($datos=mysqli_fetch_array($data)) {
    array_push($jsondata, array(
        'nombre' => $datos['nombre'],
        'rut' => $datos['rut'],
        'id_trabajador' => $datos['id_trabajador'],
        'telefono' => $datos['telefono'],
        'clave' => $datos['clave'],
    ));
}
header('Content-type: application/json');
echo json_encode($jsondata)
?>
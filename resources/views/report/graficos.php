<?php
header('Content-type: application/json');
include_once 'conexion.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$result = array();

$consulta = "SELECT age_patient, COUNT(*) FROM vaccines GROUP BY age_patient";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
    array_push($result, array($fila["age_patient"], $fila["COUNT(*)"] ));
}
// echo $result;
// echo $resultado;
print json_encode($result, JSON_NUMERIC_CHECK);
$conexion=null;

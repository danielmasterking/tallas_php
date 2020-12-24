<?php
$id =$_GET['id'];

$sql = "DELETE FROM persona WHERE id=" .$id;

$mysqli->query($sql);

$response['mensaje'] = 'Registro eliminado exitosamente';

echo json_encode($response);
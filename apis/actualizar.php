<?php
$datosJson = file_get_contents("php://input");
$post = json_decode($datosJson);

$update = "UPDATE persona set cedula = '".$post->cedula."' , talla = '".$post->talla."' WHERE id = " . $post->id;
//echo $update;
$mysqli->query($update);

$response['mensaje'] = 'Registro actualizado exitosamente';

echo json_encode($response);
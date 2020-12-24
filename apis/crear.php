<?php 

$datosJson = file_get_contents("php://input");
$post = json_decode($datosJson);
//print_r($datosJson);
$sqlPersona = 'SELECT * FROM persona WHERE cedula = "'. $post->cedula .'"';
$resultado = $mysqli->query($sqlPersona);
$numeroResultados = $mysqli->affected_rows;

if($numeroResultados > 0) {
    $response['code'] = '500';
    $response['mensaje'] = 'Esta cedula ya fue registrada';
    
    echo json_encode($response);
}else {

    $insert = "INSERT INTO persona (cedula , talla) VALUES ('". $post->cedula ."', '". $post->talla ."')";
    //echo $insert;
    $mysqli->query($insert);

    $response['code'] = '200';
    $response['mensaje'] = 'Registro creado exitosamente';

    echo json_encode($response);
}


 /*$sql = "INSERT INTO persona (cedula,talla)VALUES()";

 $resultado = $mysqli->query($sql);

 $rows = $resultado->fetch_All();

 echo json_encode($rows);*/
<?php 
 $sql = "SELECT * FROM persona";

 $resultado = $mysqli->query($sql);

 $rows = $resultado->fetch_All();
 //print_r($rows);
 $response = [];
 foreach($rows as $row) {
    $response[] = [
        'id' => $row[0],
        'cedula' => $row[1] ,
        'talla' => $row[2] 
    ];
 }
 echo json_encode($response);
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM persona where id = " .$id;

$resultado = $mysqli->query($sql);

$rows = $resultado->fetch_Assoc();

echo json_encode($rows);
<?php

require "conexion.php";
$objSeleccion = new stdClass();
$objSeleccion->nombre = null;
$objSeleccion->telefono = null;
$objSeleccion->S100 = null;
$objSeleccion->S1 = null;
$objSeleccion->S2 = null;
$objSeleccion->S3 = null;
$objSeleccion->S4 = null;
$objSeleccion->S5 = null;
$objSeleccion->S6 = null;
$objSeleccion->S7 = null;
$objSeleccion->S8 = null;

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$listaCheck = $_POST['check'];
$PYT = $_POST['PYT'];

for ($i = 0; $i < count($listaCheck); $i++) {
    if ($listaCheck[$i] == 'S100') {
        $objSeleccion->S100 = true;
    }
    if ($listaCheck[$i] == 'S1') {
        $objSeleccion->S1 = true;
    }
    if ($listaCheck[$i] == 'S2') {
        $objSeleccion->S2 = true;
    }
    if ($listaCheck[$i] == 'S3') {
        $objSeleccion->S3 = true;
    }
    if ($listaCheck[$i] == 'S4') {
        $objSeleccion->S4 = true;
    }
    if ($listaCheck[$i] == 'S5') {
        $objSeleccion->S5 = true;
    }
    if ($listaCheck[$i] == 'S6') {
        $objSeleccion->S6 = true;
    }
    if ($listaCheck[$i] == 'S7') {
        $objSeleccion->S7 = true;
    }
    if ($listaCheck[$i] == 'S8') {
        $objSeleccion->S8 = true;
    }
    echo "ITEM LISTA ==> " . $listaCheck[$i] . "<br />";
}

$sql = "INSERT INTO lead (nombre,telefono,S100,S1,S2,S3,S4,S5,S6,S7,S8,PYT) VALUES ('$nombre','$telefono','$objSeleccion->S100','$objSeleccion->S1','$objSeleccion->S2','$objSeleccion->S3','$objSeleccion->S4','$objSeleccion->S5','$objSeleccion->S6','$objSeleccion->S7','$objSeleccion->S8','$PYT')";
$resultado = $mysqli->query($sql);

if ($resultado > 0) {
    echo "REGISTRO AGREGADO";
} else {
    echo "NO REGISTRO AGREGADO";
}

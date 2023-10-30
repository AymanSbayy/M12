<?php 
$errors = "";
$html = "";
if (isset($_POST['continente'])) {
    $continente = $_POST['continente'];
} else {
    $continente = "";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = htmlspecialchars($_POST['fecha_ida']);
    $num_pasajeros = htmlspecialchars($_POST['num_pasajeros']);
    $nombre_cliente = htmlspecialchars($_POST['nombre_cliente']);
    $nif_cliente = htmlspecialchars($_POST['nif_cliente']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $telefono = htmlspecialchars($_POST['telefono']);
    
    require_once "controlador/validacions.php";

    if ($continente == "america") {
        require_once "model/America.php";
        $html = getAmerica();
    } elseif ($continente == "europa") {
        
    } elseif ($continente == "asia") {
        
    } elseif ($continente == "africa") {
        include "model/Africa.php";
        $html = getAfrica();
    } else {
        
    }
}

include "Vista/index.vista.php"

?>
<?php
require('Models/Conexion.php');

$con = new Conexion();


// Obtener los valores del formulario POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $principal = $_POST["principal"];
    $tasaInteres = $_POST["tasaInteres"];
    $plazo = $_POST["plazo"];
    
    // Ahora que tienes los valores, puedes usarlos en tu lógica.
    $cuota = $con->calcularCuotaMensual($principal, $tasaInteres, $plazo);
}


require('Views/VerCuota.php');

?>
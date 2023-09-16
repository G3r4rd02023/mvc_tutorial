<?php
class Conexion{

    private $con;

    public function __construct() {
        $this->con = new mysqli('localhost','root','','prestamo_bd');
    }

    public function calcularCuotaMensual($principal, $tasaInteres, $plazo) {
        $sql = "CALL calcular_cuota_mensual(?, ?, ?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ddd", $principal, $tasaInteres, $plazo);
        $stmt->execute();
        $stmt->bind_result($cuotaMensual);
        $stmt->fetch();
        $stmt->close();

        return $cuotaMensual;
    }

}


?>
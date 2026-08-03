<?php

require_once "conexion.php";

$ip = $_SERVER['REMOTE_ADDR'];
$endpoint = $_SERVER['PHP_SELF'];

$stmt = $conexion->prepare("SELECT * FROM rate_limit WHERE ip=? AND endpoint=?");
$stmt->bind_param("ss", $ip, $endpoint);
$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows == 0) {

    $stmt = $conexion->prepare("INSERT INTO rate_limit(ip,endpoint,intentos) VALUES(?,?,1)");
    $stmt->bind_param("ss",$ip,$endpoint);
    $stmt->execute();

} else {

    $fila = $resultado->fetch_assoc();

    if ($fila["intentos"] >= 20 &&
        strtotime($fila["ultimo_intento"]) > time()-60) {

        http_response_code(429);

        die("Demasiadas solicitudes. Intente nuevamente en un minuto.");
    }

    if(strtotime($fila["ultimo_intento"]) < time()-60){

        $stmt=$conexion->prepare("UPDATE rate_limit SET intentos=1 WHERE id=?");
        $stmt->bind_param("i",$fila["id"]);
        $stmt->execute();

    }else{

        $stmt=$conexion->prepare("UPDATE rate_limit SET intentos=intentos+1 WHERE id=?");
        $stmt->bind_param("i",$fila["id"]);
        $stmt->execute();

    }

}

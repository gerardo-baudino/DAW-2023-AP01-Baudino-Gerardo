<?php

// Ejercicio 7: Cuenta regresiva hasta una fecha
function cuentaRegresiva($fecha) {
    $fechaActual = time();
    $fechaObjetivo = strtotime($fecha);
    
    $diferencia = $fechaObjetivo - $fechaActual;
    
    $dias = floor($diferencia / (60 * 60 * 24));
    $horas = floor(($diferencia % (60 * 60 * 24)) / (60 * 60));
    $minutos = floor(($diferencia % (60 * 60)) / 60);
    $segundos = $diferencia % 60;
    
    return "Faltan {$dias} días, {$horas} horas, {$minutos} minutos y {$segundos} segundos.";
}

// Ejemplo de uso
$fechaObjetivo = '2023-09-01 15:00:00';
$resultado = cuentaRegresiva($fechaObjetivo);

echo $resultado;

?>

<?php

// Ejercicio 8: Calcular segundos entre dos fechas
function segundosEntreFechas($fecha1, $fecha2) {
    $fecha1 = strtotime($fecha1);
    $fecha2 = strtotime($fecha2);
    
    $diferencia = abs($fecha2 - $fecha1);
    
    return $diferencia;
}

// Ejemplo de uso
$fecha1 = '2023-08-01 12:00:00';
$fecha2 = '2023-08-15 15:30:00';
$resultado = segundosEntreFechas($fecha1, $fecha2);

echo $resultado;

?>

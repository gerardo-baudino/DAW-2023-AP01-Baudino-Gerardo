<?php

// Ejercicio 2: Convertir matriz a mayúsculas
function convertirMatrizMayusculas($matriz) {
    $resultado = array_map(function($fila) {
        return convertirMayusculas($fila);
    }, $matriz);
    return $resultado;
}

// Ejemplo de uso
$matriz = [['hola', 'mundo'], ['esto', 'es', 'una', 'prueba']];
$resultado = convertirMatrizMayusculas($matriz);

foreach ($resultado as $fila) {
    echo implode(', ', $fila) . '<br>';
}

// Resultado:
// HOLA, MUNDO
// ESTO, ES, UNA, PRUEBA

?>

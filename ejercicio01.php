<?php

// Ejercicio 1: Convertir elementos de un array a mayúsculas
function convertirMayusculas($array) {
    $resultado = array_map('strtoupper', $array);
    return $resultado;
}

// Ejemplo de uso
$array = ['hola', 'mundo', 'php'];
$resultado = convertirMayusculas($array);

echo $resultado;

?>

<?php

// Ejercicio 3: Convertir contenido recursivo a mayúsculas
function convertirRecursivoMayusculas($array) {
    foreach ($array as &$elemento) {
        if (is_array($elemento)) {
            $elemento = convertirRecursivoMayusculas($elemento);
        } else {
            $elemento = strtoupper($elemento);
        }
    }
    return $array;
}

function imprimirArrayRecursivo($array) {
    foreach ($array as $elemento) {
        if (is_array($elemento)) {
            imprimirArrayRecursivo($elemento);
        } else {
            echo $elemento . ' ';
        }
    }
}

// Ejemplo de uso
$array = [['hola', 'mundo'], 'php', ['prueba', 'array']];
$resultado = convertirRecursivoMayusculas($array);

imprimirArrayRecursivo($resultado);

// Resultado:
// HOLA MUNDO PHP PRUEBA ARRAY

?>

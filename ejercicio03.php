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

// Ejemplo de uso
$array = [['hola', 'mundo'], 'php', ['prueba', 'array']];
$resultado = convertirRecursivoMayusculas($array);

echo $resultado;

?>

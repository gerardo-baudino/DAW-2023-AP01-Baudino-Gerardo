<?php

// Ejercicio 4: Producto cartesiano de matrices
function productoCartesiano($matriz1, $matriz2) {
    $resultado = [];
    foreach ($matriz1 as $fila1) {
        foreach ($matriz2 as $fila2) {
            $resultado[] = array_merge($fila1, $fila2);
        }
    }
    return $resultado;
}

// Ejemplo de uso
$matriz1 = [[1, 2], [3, 4]];
$matriz2 = [['a', 'b'], ['c', 'd']];
$resultado = productoCartesiano($matriz1, $matriz2);

echo $resultado;

?>

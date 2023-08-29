<?php

// Ejercicio 10: Sucesión de Fibonacci
function fibonacci($n) {
    if ($n <= 0) {
        return [];
    } elseif ($n == 1) {
        return [0];
    } elseif ($n == 2) {
        return [0, 1];
    }
    
    $fibonacci = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    return $fibonacci;
}

// Ejemplo de uso
$n = 10;
$resultado = fibonacci($n);

echo implode(', ', $resultado);

// Resultado:
// 0, 1, 1, 2, 3, 5, 8, 13, 21, 34

?>

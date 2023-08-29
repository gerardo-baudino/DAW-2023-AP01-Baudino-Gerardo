<?php

// Ejercicio 9: Número a texto
function dineroATexto($importe) {
    $partes = explode('.', $importe);
    $parteEntera = (int)$partes[0];
    $parteDecimal = isset($partes[1]) ? (int)$partes[1] : 0;
    
    $textoEntero = num2words($parteEntera);
    $textoDecimal = num2words($parteDecimal);
    
    $monedaEntero = ($parteEntera == 1) ? 'peso' : 'pesos';
    $monedaDecimal = ($parteDecimal == 1) ? 'centavo' : 'centavos';
    
    $texto = "{$textoEntero} {$monedaEntero}";
    if ($parteDecimal > 0) {
        $texto .= " con {$textoDecimal} {$monedaDecimal}";
    }
    
    return $texto;
}

function num2words($num) {
    $unidades = ['cero', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve'];
    $decenas = [null, 'diez', 'veinte', 'treinta', 'cuarenta', 'cincuenta', 'sesenta', 'setenta', 'ochenta', 'noventa'];
    $centenas = ['cien', 'doscientos', 'trescientos', 'cuatrocientos', 'quinientos', 'seiscientos', 'setecientos', 'ochocientos', 'novecientos'];

    if ($num < 10) {
        return $unidades[$num];
    } elseif ($num < 20) {
        return $unidades[$num - 10 + 1] . ' y ' . $unidades[0];
    } elseif ($num < 100) {
        $unidad = $num % 10;
        $decena = (int)($num / 10);
        $texto = $decenas[$decena];
        if ($unidad > 0) {
            $texto .= ' y ' . $unidades[$unidad];
        }
        return $texto;
    } else {
        $centena = (int)($num / 100);
        $resto = $num % 100;
        $texto = $centenas[$centena - 1];
        if ($resto > 0) {
            $texto .= ' ' . num2words($resto);
        }
        return $texto;
    }
}

// Ejemplo de uso
$importe = '1233.75';
$resultado = dineroATexto($importe);

echo $resultado;

// Resultado:
// mil doscientos treinta y tres pesos con setenta y cinco centavos

?>

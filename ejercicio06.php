<?php

// Ejercicio 6: Evaluar fortaleza de contraseña
function evaluarFortalezaContrasena($contrasena) {
    $longitud = strlen($contrasena);
    $mayusculas = preg_match('/[A-Z]/', $contrasena);
    $minusculas = preg_match('/[a-z]/', $contrasena);
    $numeros = preg_match('/[0-9]/', $contrasena);
    $caracteresEspeciales = preg_match('/[!@#$%^&*()_+=-]/', $contrasena);
    
    if ($longitud >= 8 && $mayusculas && $minusculas && $numeros && $caracteresEspeciales) {
        return 'Muy Fuerte';
    } elseif ($longitud >= 6 && $mayusculas && $minusculas && ($numeros || $caracteresEspeciales)) {
        return 'Fuerte';
    } elseif ($longitud >= 4 && ($mayusculas || $minusculas) && $numeros) {
        return 'Normal';
    } elseif ($longitud >= 2 && ($mayusculas || $minusculas || $numeros)) {
        return 'Débil';
    } else {
        return 'Muy Débil';
    }
}

// Ejemplo de uso
$contrasena = 'P@ssw0rd';
$resultado = evaluarFortalezaContrasena($contrasena);

echo $resultado;

// Resultado:
// Muy Fuerte

?>

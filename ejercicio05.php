<?php

// Ejercicio 5: Generar contraseña alfanumérica aleatoria
function generarContrasena($longitud) {
    $caracteresEspeciales = '!@#$%^&*()_+=-';
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    
    $contrasena = '';
    $contrasena .= $caracteresEspeciales[rand(0, strlen($caracteresEspeciales) - 1)];
    $contrasena .= $caracteres[rand(0, strlen($caracteres) - 1)];
    
    for ($i = 2; $i < $longitud; $i++) {
        $contrasena .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    
    return str_shuffle($contrasena);
}

// Ejemplo de uso
$resultado = generarContrasena(10);

echo $resultado;

?>

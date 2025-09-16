<?php
// 1. Problema de Lista Invertida
function listaInvertida($array) {
    return array_reverse($array);
}
$numeros = [1, 2, 3, 4, 5];
print_r(listaInvertida($numeros));

// 2. Problema de Suma de Números Pares
function sumaPares($array) {
    $suma = 0;
    foreach ($array as $num) {
        if ($num % 2 == 0) {
            $suma += $num;
        }
    }
    return $suma;
}
echo "Suma de pares: " . sumaPares([1, 2, 3, 4, 5, 6]) . "\n";

// 3. Problema de Frecuencia de Caracteres
function frecuenciaCaracteres($texto) {
    $resultado = [];
    for ($i = 0; $i < strlen($texto); $i++) {
        $char = $texto[$i];
        if (isset($resultado[$char])) {
            $resultado[$char]++;
        } else {
            $resultado[$char] = 1;
        }
    }
    return $resultado;
}
print_r(frecuenciaCaracteres("programacion"));

// 4. Problema de Bucle Anidado (pirámide)
function imprimirPiramide($niveles) {
    for ($i = 1; $i <= $niveles; $i++) {
        for ($j = 1; $j <= $niveles - $i; $j++) {
            echo " ";
        }
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "\n";
    }
}
imprimirPiramide(5);
?>

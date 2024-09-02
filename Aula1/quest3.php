<?php

function celsiusFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}


function fahrenheitCelsius($fahrenheit) {
    return ($fahrenheit - 32) * 5/9;
}


function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


function imparoupar($num) {
    return ($num % 2 == 0) ? "par" : "ímpar";
}


function calculaData($anonascimento, $anocorrente) {
    return $anocorrente - $anonascimento;
}


function converter($minuto) {
    $horas = floor($minuto / 60);
    $minutosrestantes = $minuto % 60;
    return "$horas hora(s) e $minutosrestantes minuto(s)";
}


function tabuada($num) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "\n";
    }
}


function fator($num) {
    $resultado = 1;
    for ($i = $num; $i > 1; $i--) {
        $resultado *= $i;
    }
    return $resultado;
}


$celsius = 25;
$fahrenheit = celsiusFahrenheit($celsius);
echo "$celsius graus Celsius é igual a $fahrenheit graus Fahrenheit\n";

$fahrenheit = 77;
$celsius = fahrenheitCelsius($fahrenheit);
echo "$fahrenheit graus Fahrenheit é igual a $celsius graus Celsius\n";


$num = 7;
echo "$num é " . (isPrime($num) ? "primo" : "não é primo") . "\n";


$num = 10;
echo "$num é " . imparoupar($num) . "\n";


$anonascimento = 1990;
$anocorrente = 2024;
$idade = calculaData($anonascimento, $anocorrente);
echo "Idade: $idade anos\n";


$minutes = 130;
echo "$minuto minutos é igual a " . converter($minuto) . "\n";


$num = 5;
echo "Tabuada do $num:\n";
tabuada($num);


$num = 5;
echo "Fatorial de $num é " . fator($num) . "\n";
?>

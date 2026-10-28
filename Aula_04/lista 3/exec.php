<?php


function Fahrenheit($nmr)
{
    return $nmr * 1.8 + 32;
}

function Fatorial($nmr)
{
    if ($nmr >= 1) {
        $soma = $nmr;
        for ($i = $nmr - 1; $i > 0; $i--) {
            $soma *= $i;
        }
        $nmr = $soma;
    } else {
        $nmr = 0;
    }
    return $nmr;
}

function Funcao($nmr)
{
        if ($nmr >= 1) {
            $nmr = (($nmr * $nmr) + (2 * $nmr) + 4) / (2 * $nmr);
        } else {
            $nmr = 0;
        }
    return $nmr;
}

function Imprime($var)
{
    foreach ($var as $k => $v) {
        print " " . $v . ",";
    }
}


$var = [];
for ($i = 0; $i < 5; $i++) {
    $var[$i] = (int)readline("Informe o " . $i + 1 . " número :");
}
$var1 = [];
$var2 = [];
$var3 = [];

print "\nNúmeros iniciais:\n";
imprime($var);

print "\nFahrenheit:\n";
foreach ($var as $k => $v) {
    $var1[] = Fahrenheit($v);
}
imprime($var1);

print "\nFatorial:\n";
foreach ($var as $k => $v) {
    $var2[] = Fatorial($v);
}
imprime($var2);

print "\nFunção:\n";
foreach ($var as $k => $v) {
    $var3[] = Funcao($v);
}
imprime($var3);
print "\n";





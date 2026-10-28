<?php

function Sum($var)
{
    $soma = 0;
    foreach ($var as $k => $v) {
        $soma += $v;
    }
    return $soma;
}
function par($var)
{
    $nmr = 0;
    foreach ($var as $k => $v) {
        if ($v % 2 == 0) {
            $nmr++;
        }
    }
    return $nmr;
}
function impar($var)
{
    $nmr = 0;
    foreach ($var as $k => $v) {
        if ($v % 2 != 0) {
            $nmr++;
        }
    }
    return $nmr;
}

function divisoresPor5($var){
    $nmr = 0;
    foreach ($var as $k => $v) {
        if ($v % 5 == 0) {
            $nmr++;
        }
    }
    return $nmr;
}
function DiferencaMaiorMenor($var){

    $maior = PegarNumero($var,"Maior");
    $menor = PegarNumero($var,"Menor");
    return $maior - $menor;

}

function PegarNumero($var, $Funcao){
    foreach ($var as $k => $v) {
        $controle = 0;
        foreach ($var as $k2 => $v2) {
            if (($v >= $v2 && $Funcao == "Maior")|| ($v <= $v2 && $Funcao == "Menor")){
                $controle++;
            }
        }
        if ($controle == count($var)){
            return $v;
        }
    }
    return 0;
}

function Repeticoes($var){
    $nmr = 0;
    foreach ($var as $k => $v) {
        if($v == 3 || $v == 6 || $v == 9){
            $nmr++;
        }
    }
    return $nmr;
}

$var = [];
while (true) {
    $resp = readline("Informe o " . count($var) + 1 . "° Número: ");
    if ($resp <= 0) {
        break;
    } else {
        $var[] = $resp;
    }
}

if (count($var) == 0) {
    print "Vc n informou nenhum valor valido";
    exit;
}

$soma = Sum($var);
$Pares = par($var);
$Impares = impar($var);
$divisores = divisoresPor5($var);
$Diferenca = DiferencaMaiorMenor($var);
$Quantidades = Repeticoes($var);

print "A soma de todos eles é $soma\n";
print "Tem " . par($var) . " Números Pares\n";
print "Tem " . impar($var) . " Números Impares\n";
print "Tem " . divisoresPor5($var) . " Números Divisiveis Por 5\n";
print "A Diferença entre o Maior e Menor Número é " . DiferencaMaiorMenor($var) . "\n";
print "E Tem os Números 3, 6 ou 9: ". Repeticoes($var) . " vezes\n";



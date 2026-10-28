<?php

require_once("modelos/Circulo.php");
require_once("modelos/Quadrado.php");
require_once("modelos/Retangulo.php");

$formas = [];

$forma[0] = new Circulo(readline("Qual o raio do circulo? "));
$forma[1] = new Quadrado(readline("Qual o lado do quadrado? "));
$forma[2] = new Retangulo(readline("Qual a base do Retangulo? "), readline("E qual a altura do Retangulo?"));

echo "CIRCULO ------ \n\n" . $forma[0];
echo "\n\nQUADRADO ------ \n\n" . $forma[1];
echo "\n\nRETANGULO ------ \n\n" . $forma[2];
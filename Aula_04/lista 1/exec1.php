<?php

$var01 = array(0, 1, 2, 3, 4);
$var02 = array("vermelho", "amarelo", "verde", "azul", "laranja");
$var03 = array(10, 11, 12, 13, 14);
$var04 = array("pedras", "areias", "ondas", "praias", "felicidade");

function imprime($var)
{
    foreach ($var as $k){
        print ($k . " | ");
    }
    print ("\n");
}

imprime($var01);
imprime($var02);
imprime($var03);
imprime($var04);

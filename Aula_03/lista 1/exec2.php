<?php

function area($raio)
{
    $PI = 3.14;
    return ($PI * $raio * $raio);
}
function circuferencia($raio)
{
    $PI = 3.14;
    return (2 * $PI * $raio);
}

for ($i = 0; $i < 3; $i++) {
    $resp = readline("Informe o raio: ");
    echo "A área é " . area($resp);
    echo "\nE a circuferencia é " . circuferencia($resp) . "\n";
}



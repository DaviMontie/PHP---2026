<?php
function Area()
{
    $altura = readline("Qual a altura? ");
    $largura = readline("E base? ");
    return $altura * $largura;
}

function Perimetro()
{
    $lados = [];
    for ($i = 0; $i < 4; $i++) {
        $lados[$i] = readline("Informe o lado " . $i + 1 . ": ");
    }
    return $lados;
}


for ($i = 0; $i < 3; $i++) {
    echo "Retangulo " . 1 + $i . "\n";
    $area = Area();
    $perimetro = array_sum(Perimetro());
    echo "A área é $area cm² E perímetro é $perimetro cm²";
}

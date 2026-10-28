<?php
function calcular($Y)
{
    return $Y * 5 + $Y * 2 + 3;
}

for ($i = 1; $i < 6; $i++) {
    echo "o resultado é " . calcular(readline("Informe o " . $i . "° número: ")) . "\n";
}
<?php
function Divisores($nmr)
{
    echo "-Divisores | ";
    for ($i = $nmr; $i > 0; $i--) {
        if ($nmr %  $i == 0) {
            echo $i . " ";
        }
    }
    echo "\n\n";
}

while (true) {
    $resp = readline("-Número Lido | ");

    if ($resp > 1) {
        Divisores($resp);
    } else {
        break;
    }

}
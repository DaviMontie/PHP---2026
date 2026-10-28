<?php
    $num1 = readline("Informe o 1° Num: ");
    $num2 = readline("Informe o 2° Num: ");

    echo "Do primeiro Número é ";
    divisores_5($num1);

    echo "\nDo segundo Número é ";
    divisores_5($num2);

    function divisores_5($inicio){
        for($i = $inicio; $i > -1; $i--){
            if($i % 5 == 0){
                echo $i . " ";
            }
        }
    }
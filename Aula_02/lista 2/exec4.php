<?php
    $numeros[] = 0;
    $par = 0;
    $impar = 0;
    for($i = 0;$i < 10; $i++){
        $numeros[$i] = (int)readline("Informe o " . $i+1 . "° número: ");
        if($numeros[$i] != 0){
            if($numeros[$i]%2 == 0){
                $par++;
            } else {
                $impar++;
            }
        }
    }
    echo "Vc informou $par Números pares e $impar Números impares\n";
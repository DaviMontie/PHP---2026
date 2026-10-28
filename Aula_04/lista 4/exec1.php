<?php
    

    function Area($base,$altura){
        return $base * $altura;
    }

    $retangulos = [];
    for ($i = 0; $i < 5; $i++) {
        $retangulos[$i]["base"] = readline("Informe a Base do " . $i+1 . "° Retangulo: ");
        $retangulos[$i]["altura"] = readline("Informe a Altura do " . $i+1 . "° Retangulo: ");
        print("\n");
    }

    foreach ($retangulos as $i => $valor) {
        print "\nÁrea do Retangulo " . $i+1 . ": ";
        print Area($valor["base"], $valor["altura"]);
    }
    print("\n");
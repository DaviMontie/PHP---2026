<?php
    $bd = array();

    for ($i = 0; $i < 4; $i++) {
        print "\nPessoa " . $i+1 . "\n";
        $bd[$i]["Nome"] = readline("Informe o Nome Da pessoa:");
        $bd[$i]["Idade"] = readline("Informe a Idade Da pessoa:");
        $bd[$i]["CidadeNatal"] = readline("Informe a Cidade Natal Da pessoa:");
        $bd[$i]["Profissão"] = readline("Informe a Profissão Da pessoa:");
    }

    $idades = array();
    for ($i = 0; $i < 4; $i++) {
        $idades[] = $bd [$i]["Idade"];
    }

    $controle = max($idades);
    for ($i = 0; $i < 4; $i++) {
        if($idades[$i] == $controle){
            $controle = $i;
            break;
        }
    }

    print "\nO perfil com a maior Idade é:\n";
    print $bd[$controle]["Nome"] . " || " . $bd[$controle]["Idade"] . " || " . $bd[$controle]["CidadeNatal"] . " || " . $bd[$controle]["Profissão"] . "\n";

    




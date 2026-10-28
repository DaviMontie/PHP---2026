<?php

    function imprimeDados($nome, $habitantes, $area, $altitude, $estado ){
        echo $nome ." | ". $habitantes ." | ". $area ."km² | ". $altitude ."m | ". $estado;
    }

    imprimeDados(readline("Nome da cidade: "), readline("Habitante da cidade: "), readline("Área da cidade: "), readline("Altitude da cidade: "), readline("Estado da cidade: ")) ;
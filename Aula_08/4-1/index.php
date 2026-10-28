<?php

require_once("modelo/Filme.php");

function Busca_Titulo($Filmes, $titulo){
    $filme = [];
    foreach($Filmes as $i => $val){
        if($val->getTitulo() == $titulo){
            $filme[] = $i;
        }
    }

    return $filme;
}

function Busca_Genero($Filmes, $genero){
    $filme = [];
    foreach($Filmes as $i => $val){
        if($val->getGenero() == $genero){
            $filme[] = $i;
        }
    }
    return $filme;
}

function digitar($var, $Filme){
    echo "\nOs filme n°: \n";
    foreach($var as $i){
        echo "---------- ". $i+1 . " -------\n\n" . $Filme[$i];
    }
}


$Filmes = [];

for ($i=0; $i < 5; $i++) { 
    $Filmes[] = new Filme(readline("Titulo: "), readline("Diretor: "), readline("ano de lançamento: "), readline("Gênero: "));
    echo("\n\n");
}

while (true){
    echo("1 - Buscar por Título\n2 - Buscar por Gênero\n");
    $resp = readline(false);
    switch($resp){
        case 1:
            $titulo = readline("Procurar por:");
            $controle = Busca_Titulo($Filmes, $titulo);
            if(isset($controle[0])){
                digitar($controle, $Filmes);
                echo ("\n\nTem o título de $titulo\n\n");
            } else {
                echo "\nFilme não encontrado\n\n";
            }
            break;
        case 2:
            $genero = readline("Procurar por:");
            $controle = Busca_Genero($Filmes, $genero);
            if(isset($controle[0])){
                digitar($controle, $Filmes);
                echo ("\n\nTem o gênero de $genero\n\n");
            } else {
                echo "\nFilme não encontrado\n\n";
            }
            break;
        case 0:
            exit;
    }
}
<?php
    $var = array( 0 => array("nome" => "Manuel de Medeiros", "Endereço" => "Rua das Acácias", "Cidade" => "Foz do Iguaçu", "UF" => "PR"),
                  1 => array("nome" => "Juliana de Amaral", "Endereço" => "Rua das Pinheiros", "Cidade" => "Florianópolis", "UF" => "SC"),
                  2 => array("nome" => "Rodrigo Baidek", "Endereço" => "Rua das Dom Pedro I", "Cidade" => "Petrópolis", "UF" => "RJ"),
                  3 => array("nome" => "Fabíola da Silva", "Endereço" => "Rua Chile", "Cidade" => "Guarulhos", "UF" => "SP"));

    print("NOME         ||      ENDEREÇO     ||     CIDADE     ||   UF\n");
    foreach( $var as $numero => $v){
        foreach( $v as $chave => $valor ){
            print $valor . " | ";
        }
        print "\n";
    }
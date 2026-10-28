<?php
require_once 'modelos/PessoaFisica.php';
require_once 'modelos/PessoaJuridica.php';
require_once 'modelos/Pessoa.php';

$Pessoas = array();

do{
    $resp = readline("1 - Cadastrar Pessoa Física\n2 - Cadastrar Pessoa Jurídica\n3 - Listar Pessoas\n4 - Sair\nEscolha uma opção: ");
    switch($resp){
        case 1:
            $nome = readline("Nome: ");
            $idade = readline("Idade: ");
            $cpf = readline("CPF: ");
            $pessoa = new PessoaFisica($nome, $idade, $cpf);
            $Pessoas[] = $pessoa;
            break;
        case 2:
            $nome = readline("Nome: ");
            $nomeFantasia = readline("Nome Fantasia: ");
            $cnpj = readline("CNPJ: ");
            $pessoa = new PessoaJuridica($nome, $nomeFantasia, $cnpj);
            $Pessoas[] = $pessoa;
            break;
        case 3:
            foreach($Pessoas as $pessoa){
                echo $pessoa . "\n";
            }
            break;
        
        
    }

} while($resp != 4);
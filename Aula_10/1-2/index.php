<?php

require_once("modelos/Jogador.php");
require_once("modelos/Atacante.php");
require_once("modelos/Meia.php");
require_once("modelos/Defensor.php");
require_once("modelos/Goleiro.php");


$jogadores = [];

do {
    echo "\n==============================\n";
    echo "     SISTEMA FUTEBOL 2.0      \n";
    echo "==============================\n";
    echo "1. Criar novo jogador\n";
    echo "2. Listar jogadores\n";
    echo "3. Selecionar jogador para realizar ação\n";
    echo "4. Sair\n";
    
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case '1':
            echo "\n--- CADASTRAR JOGADOR ---\n";
            $nome = readline("Nome: ");
            $idade = (int) readline("Idade: ");
            $nacionalidade = readline("Nacionalidade: ");

            echo "Escolha a Posição:\n";
            echo "1. Goleiro\n";
            echo "2. Defensor\n";
            echo "3. Meia\n";
            echo "4. Atacante\n";
            $tipo = readline("Opção da posição: ");

            $novoJogador = null;

            switch ($tipo) {
                case '1':
                    $altura = (float) readline("Altura (ex: 1.85): ");
                    $novoJogador = new Goleiro($nome, $idade, $nacionalidade, $altura);
                    break;
                case '2':
                    $altura = (float) readline("Altura (ex: 1.80): ");
                    $novoJogador = new Defensor($nome, $idade, $nacionalidade, $altura);
                    break;
                case '3':
                    $velocidade = (float) readline("Velocidade km/h (ex: 30.5): ");
                    $novoJogador = new Meia($nome, $idade, $nacionalidade, $velocidade);
                    break;
                case '4':
                    $velocidade = (float) readline("Velocidade km/h (ex: 34.2): ");
                    $novoJogador = new Atacante($nome, $idade, $nacionalidade, $velocidade);
                    break;
                default:
                    echo "\n[Erro] Posição inválida! Jogador não criado.\n";
                    continue 3;
            }

            $jogadores[] = $novoJogador;
            echo "\n[Sucesso] Jogador criado com sucesso!\n";
            break;

        case '2':
            echo "\n--- LISTA DE JOGADORES ---\n";
            if (empty($jogadores)) {
                echo "Nenhum jogador cadastrado ainda.\n";
            } else {
                foreach ($jogadores as $index => $j) {
                    echo "$j\n\n";
                }
            }
            break;

        case '3':
            if (empty($jogadores)) {
                echo "\n[Aviso] Cadastre pelo menos um jogador primeiro.\n";
                break;
            }

            echo "\n--- SELECIONAR JOGADOR ---\n";
            foreach ($jogadores as $index => $j) {
                echo "[$index] $j\n\n";
            }

            $idSelecionado = (int) readline("Digite o número do jogador: ");

            if (!isset($jogadores[$idSelecionado])) {
                echo "\n[Erro] Jogador inválido!\n";
                break;
            }

            $jogadorAtual = $jogadores[$idSelecionado];

            echo "\n--- AÇÕES PARA: $jogadorAtual\n";
            echo "Ações Comuns:\n";
            echo "1. Correr\n";
            echo "2. Chutar\n";
            
            $acoesEspecificas = $jogadorAtual->listarAcoesEspecificas();
            $offset = 3;
            $mapaAcoes = [
                1 => 'correr',
                2 => 'chutar'
            ];

            foreach ($acoesEspecificas as $num => $nomeAcao) {
                $idReal = $offset + ($num - 1);
                echo "$idReal. $nomeAcao (Específica)\n";
                $mapaAcoes[$idReal] = $num;
            }

            $acaoEscolhida = (int) readline("Escolha a ação: ");

            echo "\n--- AÇÃO EXECUTADA ---\n";
            if ($acaoEscolhida === 1) {
                echo $jogadorAtual->correr() . "\n";
            } elseif ($acaoEscolhida === 2) {
                echo $jogadorAtual->chutar() . "\n";
            } elseif (isset($mapaAcoes[$acaoEscolhida])) {
                $numEspecifico = $mapaAcoes[$acaoEscolhida];
                echo $jogadorAtual->executarAcaoEspecifica($numEspecifico) . "\n";
            } else {
                echo "[Erro] Ação inválida!\n";
            }
            break;

        case '4':
            echo "\nEncerrando o sistema Futebol 2.0. Até logo!\n";
            break;

        default:
            echo "\n[Erro] Opção inválida! Tente novamente.\n";
            break;
    }

} while ($opcao != '4');
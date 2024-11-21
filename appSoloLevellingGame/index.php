<?php

require_once("./models/Arqueiro.php");
require_once("./models/Dragao.php");
require_once("./models/Esqueleto.php");
require_once("./models/Goblin.php");
require_once("./models/Guerreiro.php");
require_once("./models/Mago.php");
require_once("./models/MainCharacter.php");
require_once("./models/Monstro.php");

$opcao = readline("Escolha o tipo de Personagem: 1 - Arqueiro || 2 - Mago: ");
$personagem = null;
$monstro = new Dragao("Dragão", 200, 30);

switch ($opcao) {
    case 1:
        $personagem = new Arqueiro("Arco", 50);
        break;
    case 2:
        $personagem = new Mago("Cajado", 30); 
        break;
    default:
        echo "Opção inválida!";
        exit;
}

batalhar($personagem, $monstro);

function batalhar($personagem, $monstro){
    while ($personagem->getVida() > 0 && $monstro->getVida() > 0) {
        
        
        echo "\nEscolha uma ação:\n";
        echo "1 - Atacar\n";
        echo "2 - Desviar\n";
        $acao = readline("Digite sua escolha (1 ou 2): ");
        
        
        if ($acao == 1) {
            
            $chanceCritico = rand(1, 100); 
            $danoFinal = $personagem->calcularDanoAtaque(); 

            if ($chanceCritico <= 20) { 
                echo "$personagem->getNome() causou um CRÍTICO!\n";
                $danoFinal *= 2;  
            }

            // Atacar o monstro
            $personagem->atacar($monstro);
            $monstro->receberDano($danoFinal);
            if ($monstro->getVida() <= 0) {
                echo $monstro->getNome() . " foi derrotado!\n";
                break;
            }
        }
        

        elseif ($acao == 2) {

            $chanceFalha = rand(1, 100);  
            if ($chanceFalha <= 20) { 
                echo "$personagem->getNome() falhou ao desviar!\n";
           
                $personagem->receberDano($monstro->getDanoAtaque());
            } else {
                echo "$personagem->getNome() desviou do ataque!\n";
         
                $cura = $personagem->getVida() * 0.10; 
                $personagem->setVida($personagem->getVida() + $cura);
                echo "$personagem->getNome() se curou em $cura pontos de vida!\n";
            }
        }
        
  
        if ($monstro->getVida() > 0) {
        
            echo $monstro->atacar() . "\n";
            if ($acao != 2) { 
                $personagem->receberDano($monstro->getDanoAtaque());
            }
        }
        
        if ($personagem->getVida() <= 0) {
            echo $personagem->getNome() . " foi derrotado!\n";
            break;
        }
    }
}



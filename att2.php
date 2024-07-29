<?php

class Pokemon
{
    //setando atributos
    public $nome;
    public $tipos;  
    public $forca;
    public $fraquezas; 
    public $peso;
    public $altura;
    public $vida; 
    public $nivel; 
    public $evolucao;

    //setando construtor
    function __construct($nome, $tipos, $counter, $peso, $alt, $vida, $forca, $lvl, $evo)
    {
        $this->nome = $nome;
        $this->tipos = $tipos;
        $this->forca = $forca;
        $this->fraquezas = $counter;
        $this->peso = $peso;
        $this->altura = $alt;
        $this->vida = $vida;
        $this->nivel = $lvl;
        $this->evolucao = $evo;
    }

    //setando metodos
    function upar(){
        $this->nivel++;
    }

    function atacar(){
        $var = rand(1, 10);
        print "Você atacou e deu " . $var . " de dano.\n\n";
        $this -> vida -= $var;
    }

    function curar(){
        $var = rand(1, 10);
        print "Você se curou e recebeu " . $var . " de vida.\n\n";
        $this -> vida += $var;
    }

    function batalhar(){
        $var = rand(1, 10);
        print "Você está em uma luta, se prepare!\n";
        $escolha = readline("Você escolhe: \n1.ATACAR\n2.CURAR\n");
        if ($escolha == 1) 
        {
            print "Você atacou e deu " . $var . " de dano.\n\n";
            $this -> vida -= $var;
        }else if($escolha == 2){
            print "Você se curou e recebeu " . $var . " de vida.\n\n";
            $this -> vida += $var;
        }else{
            print "Opcao Invalida. Insira novamente\n";
            $escolha = readline("Você escolhe: \n1.ATACAR\n2.CURAR\n");
        }
    }

    function imprimirDados(){
        print"\n\nO Pokémon escolhido é o " . $this ->nome . "\nSeus tipos são: " . $this ->tipos . "\nSeus counters são: " . $this ->fraquezas . "\nPesa cerca de: " . $this ->peso . "kg". "\nTem: " . $this ->altura . " centímetros de altura\nPossui: " . $this ->vida . " de vida\n" . $this ->forca . " de forca\n" . "Level atual: " . $this ->nivel . "\nSua evolucao anterior é o: " . $this ->evolucao . "\n\n";
    }
}

$pokemon1 = new Pokemon("Lucario", "Lutador e Metal", "Fogo, Lutador e Terrestre", 54, 120, 100, 50, 0, "Riolu");
$pokemon2 = new Pokemon("Zoroark", "Dark", "Lutador, Inseto e Fada", 81, 160, 100, 50, 0, "Zorua");

$pokemon1->imprimirDados();
$pokemon1->atacar();
$pokemon1->curar();
$pokemon1->batalhar();
$pokemon1->upar();

$pokemon2->imprimirDados();
$pokemon2->atacar();
$pokemon2->curar();
$pokemon2->batalhar();
$pokemon2->upar();

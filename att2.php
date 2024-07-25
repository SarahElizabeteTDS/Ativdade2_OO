<?php

class Pokemon
{
    //setando atributos
    public $nome;
    public $tipos;  
    public $fraquezas; 
    public $peso;
    public $altura;
    public $vida; 
    public $ataque;
    public $nivel; 
    public $defesa;
    public $evolucao;

    //setando construtor
    function __construct($nome, $tipos, $counter, $peso, $alt, $vida, $atq, $lvl, $def, $evo)
    {
        $this->nome = $nome;
        $this->tipos = $tipos;
        $this->fraquezas = $counter;
        $this->peso = $peso;
        $this->altura = $alt;
        $this->vida = $vida;
        $this->ataque = $atq;
        $this->nivel = $lvl;
        $this->defesa = $def;
        $this->evolucao = $evo;
    }

    //setando metodos
    function upar(){
        $this->nivel++;
    }

    function atacar(){
        //terminar em casa
    }
}

<?php

class Animal
{
    //setando os atributos
    public $especie;
    public $patas;
    public $pele;
    public $voa;

    //construtor
    function __construct($esp, $pa, $pe, $voa)
    {
        $this->especie = $esp;
        $this->patas = $pa;
        $this->pele = $pe;
        $this->voa = $voa;
    }

    //setando os metodos
    function emitirSons()
    {
        print "*Emite um som*";
    }

    function movimento()
    {
        if ($this->voa == true) 
        {
            print "*Animal voa*";
        }else{
            print "*Animal corre*";
        }
    }
        
}

$pato = new Animal("Pato", 2, "penas", true);
$cachorro = new Animal("Cachorro", 4, "pelos", false);
$galinha = new Animal("Galinha", 2, "penas", true);
$porco = new Animal("Porco", 4, "pelos", false);
$cavalo = new Animal("Cavalo", 4, "pelos", false);

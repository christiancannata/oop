<?php

class Cane
{
    public $nome;
    public $eta;
    public $zampe;

    public function __construct($nome, $eta)
    {
        $this->zampe = 4;
        $this->nome = $nome;
        $this->eta = $eta;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEta()
    {
        return $this->eta;
    }

    public function setEta($eta)
    {
        $this->eta = $eta;
    }

}


// setto valori attraverso i setters
$cane1 = new Cane();
$cane1->setNome('Pippo');
$cane1->setEta(3);

// setto valori attraverso il costruttore
$cane1 = new Cane('Pluto', 3);




<?php

class Cane
{
    public $nome;
    public $eta;
    public $zampe;


    //costruttore che contiene attributi opzionali che possiamo dare in fase di istanza
    public function __construct($nome = null, $eta = null)
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
$cane2 = new Cane('Pluto', 3);

//stampo i valori dei cani istanziati utilizzando i metodi getters

echo 'Cane 1: ' . $cane1->getNome();
echo PHP_EOL;
echo 'Cane 2: ' . $cane2->getNome();


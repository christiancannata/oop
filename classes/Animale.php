<?php

class Animale
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
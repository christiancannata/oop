<?php

class Dado
{
    public $facce;
    public $nome;

    public function __construct($facce = null)
    {
        $this->facce = $facce;

        //chiamo un metodo privato all'interno del costruttore
        $this->generateName();
    }

    public function getFacce()
    {
        return $this->facce;
    }

    public function setFacce($facce)
    {
        $this->facce = $facce;
    }

    public function lancia()
    {
        return rand(1, $this->facce);
    }

    // Questo metodo non è visibile dall'esterno ma solamente all'interno di questa classe definita,
    // se provo a chiamarlo da un'istanza mi dirà che non posso farlo
    private function generateName()
    {
        $this->nome = 'Dado ' . rand(1, 100000);
    }

}
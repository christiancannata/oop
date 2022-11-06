<?php

class Dado
{
    public $facce;

    public function __construct($facce = null)
    {
        $this->facce = $facce;
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

}
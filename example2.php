<?php

// ESEMPIO 2: Inclusione di una classe dall'esterno e istanza di due oggetti della classe importata
include_once 'classes/Cane.php';

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
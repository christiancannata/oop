<?php
// ESEMPIO 4: Istanze di classi che ereditano da una classe padre

include_once 'classes/Animale.php';
include_once 'classes/CaneEreditarieta.php';
include_once 'classes/GattoEreditarieta.php';

// setto valori attraverso i setters
$cane1 = new CaneEreditarieta();
$cane1->setNome('Pippo');
$cane1->setEta(3);

// setto valori attraverso il costruttore
$gatto = new GattoEreditarieta('Fuffi', 3);

//stampo i valori dei cani istanziati utilizzando i metodi getters

echo 'Cane: ' . $cane1->getNome();
echo PHP_EOL;
echo 'Gatto: ' . $gatto->getNome();
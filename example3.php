<?php

include_once 'classes/Dado.php';

// setto valori attraverso i setters
$dado = new Dado();
$dado->setFacce(6);

$numero = $dado->lancia();

echo "Numero: " . $numero;
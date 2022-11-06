<?php

include_once 'classes/Dado.php';

// setto valori attraverso i setters
$dado = new Dado();
$dado->setFacce(6);

$numero = $dado->lancia();


//$dado->generateName();
/*   Non posso chiamare questo metodo, mi restituirà un errore
 *   Uncaught Error: Call to private method Dado::generateName() from global scope
 */


echo "Numero: " . $numero;
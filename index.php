<?php

require_once 'classes/dipendente.php';
require_once 'classes/ruolo.php';

$dipendente1 = new Dipendente();
$dipendente1->setNome('Luca');
$dipendente1->setCognome('Riccio');
$dipendente1->setCf('RCCL');

$ruolo = new Ruolo('impiegato');



var_dump($dipendente1);
var_dump($ruolo);















?>

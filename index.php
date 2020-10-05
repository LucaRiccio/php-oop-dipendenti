<?php
declare(strict_types=1); // **PROVA** Dichiaro il tipo di dato, se differente blocca il programma
require_once 'classes/dipendente.php';
require_once 'classes/ruolo.php';

$dipendente1 = new Dipendente();
$dipendente1->setNome('Luca');
$dipendente1->setCognome('Riccio');
$dipendente1->setCf('RCCL');
$dipendente1->setContratto('tempo determinato');


$dipendente2 = new Dipendente();
$dipendente2->setNome('Franco');
$dipendente2->setCognome('Rossi');
$dipendente2->setCf('RSSF');
$dipendente2->setContratto('tempo determinato');

$dirigente = new Ruolo('Dirigente');
$dirigente->setNome('Gianni');
$dirigente->setCognome('Bianchi');
$dirigente->setCf('BNNA');
$dirigente->setContratto('tempo indeterminato');



var_dump($dipendente1);
var_dump($dipendente2);
var_dump($dirigente);
















?>

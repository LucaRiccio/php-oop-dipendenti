<?php
declare(strict_types=1); // **PROVA** Dichiaro il tipo di dato, se differente blocca il programma
require_once 'classes/dipendente.php';
require_once 'classes/ruolo.php';


$dipendente1 = new Dipendente();
$dipendente2 = new Dipendente();
$dirigente = new Ruolo('Dirigente');
try {
  $dipendente1->setNome('Luca');
  $dipendente2->setNome('Franco');
  $dirigente->setNome('Gianni');
  $dipendente1->setCognome('Riccio');
  $dipendente2->setCognome('Rossi');
  $dirigente->setCognome('Bianchi');
  $dipendente1->setCf('RCCL');
  $dipendente2->setCf('RSSF');
  $dirigente->setCf('BNNA');

} catch (Exception $e){
  echo $e->getMessage();

}

$dipendente1->setContratto('tempo determinato');

$dipendente2->setContratto('tempo determinato');

$dirigente->setContratto('tempo indeterminato');



var_dump($dipendente1);
var_dump($dipendente2);
var_dump($dirigente);
















?>

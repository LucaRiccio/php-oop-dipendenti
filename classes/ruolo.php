<?php
declare(strict_types=1); // **PROVA** Dichiaro il tipo di dato, se differente blocca il programma.


require_once 'dipendente.php';

class Ruolo extends Dipendente {

  protected $ruolo;

  public function __construct(string $_ruolo){
    parent:: __construct($_nome ='A', $_cognome = 'B', $_cf ='C'); // costruttore del padre
    $this->ruolo = $_ruolo;

  }

}

?>

<?php

require_once 'dipendente.php';

class Ruolo extends Dipendente {

  protected $ruolo;

  public function __construct($_ruolo){
    $this->ruolo = $_ruolo;

  }

}

 ?>

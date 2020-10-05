<?php

class Dipendente {
  public $nome;
  public $cognome;
  public $cf;


  public function __construct($_nome, $_cognome, $_cf){
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->cf = $_cf;
  }

  

}

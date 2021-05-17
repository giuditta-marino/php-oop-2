<?php

class Product {

  private $codice_prodotto;
  private $nome;
  private $marca;
  private $modello;
  private $descrizione;

  public function __construct($codice_prodotto, $nome, $marca, $modello, $descrizione) {
    $this->codice_prodotto = $codice_prodotto;
    $this->nome = $nome;
    $this->marca = $marca;
    $this->modello = $modello;
    $this->descrizione = $descrizione;
  }

  public function setCodiceProdotto($codice_prodotto){
    $this->codice_prodotto = $codice_prodotto;
  }
  public function getCodiceProdotto($codice_prodotto){
    return $this->codice_prodotto;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }
  public function getNome($nome){
    return $this->nome;
  }

  public function setMarca($marca){
    $this->marca = $marca;
  }
  public function getMarca($marca){
    return $this->marca;
  }

  public function setModello($modello){
    $this->modello = $modello;
  }
  public function getModello($modello){
    return $this->modello;
  }
}



 ?>

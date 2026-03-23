<?php
class Fruit
{
    // Properties
    private $nome;
    private $cor;

    public function __construct() {
        $this->nome = "";
        $this->cor = "";
    }
    // Method to set the properties
    public function setNome($nome) 
    {
        $this->nome = $nome;
    }
    public function setCor( $cor) {
        $this->cor = $cor;
    }
    // Method to display the properties
    public function getNome() 
    {
        return $this->nome;
    }
    public function getCor() {
        return $this->cor;
    }
    public function __toString() {
        return "Fruta:\n".
        "Name: {$this->nome} \n" .
        "Cor: ". $this->cor . "\n" ;
    }
}
?>
<?php
require_once("IFormaGeometrica.php");

class Quadrado implements IFormaGeometrica{
    private $lado;

    public function __toString(){
        return $this->getArea() . "\n\n" . $this->getDesenho();
    }
    public function __construct($ld){
        $this->lado = $ld;
    }
    public function getArea(){
        return $this->lado * $this->lado;
    }
    public function getDesenho(){
        return "┌────────┐\n│        │\n│        │\n│        │\n└────────┘";
    }
}
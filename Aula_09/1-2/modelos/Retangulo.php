<?php
require_once("IFormaGeometrica.php");

class Retangulo implements IFormaGeometrica{
    private $base;
    private $altura;

    public function __toString(){
        return $this->getArea() . "\n\n" . $this->getDesenho();
    }
    public function __construct($bs,$alt){
        $this->base = $bs;
        $this->altura = $alt;
    }
    public function getArea(){
        return $this->altura * $this->base;
    }
    public function getDesenho(){
        return "┌─────────────────┐\n│                 │\n│                 │\n└─────────────────┘";
    }
}
<?php
require_once("IFormaGeometrica.php");

class Circulo implements IFormaGeometrica{
    private $raio;


    public function __construct($raio){
        $this->raio = $raio;
    }

    public function __toString(){
        return $this->getArea() . "\n\n" . $this->getDesenho();
    }
    public function getArea(){
        return 3.14*($this->raio * $this->raio);
    }
    public function getDesenho(){
        return "
\n      .-*****-.
\n    .-**     **-.
\n   /**         **\
\n  /*             *\
\n |*               *|
\n |*               *|
\n |*               *|
\n  \*             */
\n   \**         **/
\n    '-**     **-'
\n      '-*****-'
\n";
}}
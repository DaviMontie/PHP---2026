<?php
require_once("Animal.php");
class Gato extends Animal{
    public function __construct($nm,$esp){
        parent::__construct($nm,$esp);
    }

    public function miar(){
        return "MIAUUUUUUUU";
    }
}
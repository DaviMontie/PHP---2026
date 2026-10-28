<?php
require_once("Animal.php");
class Cachorro extends Animal{
    public function __construct($nm, $esp){
        parent::__construct($nm,$esp);
    }

    public function Latir(){
        return "AUAUAU";
    }
}
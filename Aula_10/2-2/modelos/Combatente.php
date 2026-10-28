<?php
require_once('Mago.php');
require_once("Poder.php");
class Combatente extends Mago{
    private $forcaDeAtaque;

    public function __construct($nome, $poder,$atk){
        parent::__construct($nome,$poder);
        $this->forcaDeAtaque = $atk;
    }

    public function LancarPoder($ataque){
        if($ataque == 1){
            $this->setPoder(new Poder("Golpe Normal", 1));
        } else {
            $this->setPoder(new Poder("Golpe Especial", 1.20));
        }
    }


    /**
     * Get the value of forcaDeAtaque
     */
    public function getForcaDeAtaque()
    {
        return $this->forcaDeAtaque;
    }

    /**
     * Set the value of forcaDeAtaque
     */
    public function setForcaDeAtaque($forcaDeAtaque): self
    {
        $this->forcaDeAtaque = $forcaDeAtaque;

        return $this;
    }
}
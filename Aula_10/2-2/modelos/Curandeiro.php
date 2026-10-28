<?php
require_once ("Mago.php");
class Curandeiro extends Mago{
    private $forcaDeCura;

    public function __construct($nome, $poder, $cura){
        parent::__construct($nome,$poder);
        $this->forcaDeCura = $cura;
    }

    public function LancarPoder($ataque){
        if($ataque == 1){
            $this->setPoder(new Poder("Recuperar Energia", 1));
        } else {
            $this->setPoder(new Poder("Recuperar Energia Super", 1.20));
        }
    }


    /**
     * Get the value of forcaDeCura
     */
    public function getForcaDeCura()
    {
        return $this->forcaDeCura;
    }

    /**
     * Set the value of forcaDeCura
     */
    public function setForcaDeCura($forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }
}
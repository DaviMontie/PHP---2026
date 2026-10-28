<?php

class Cidade{
    private $nome;
    private $qtdHabitantes;
    private $altitude;
    private Estado $estado;

    public function __construct($nome,$qtdHab, $alt,$est){
        $this->nome = $nome;
        $this->qtdHabitantes = $qtdHab;
        $this->altitude = $alt;
        $this->estado = $est;
    }

    public function __tostring(){
        return "A cidade de " . $this->nome . ", localizada no estado " . $this->estado->getNome() . " - " . $this->estado->getSigla() . ", possui
" . $this->qtdHabitantes . " habitantes e uma altitude de " . $this->altitude . " metros";
    }
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of qtdHabitantes
     */
    public function getQtdHabitantes()
    {
        return $this->qtdHabitantes;
    }

    /**
     * Set the value of qtdHabitantes
     */
    public function setQtdHabitantes($qtdHabitantes): self
    {
        $this->qtdHabitantes = $qtdHabitantes;

        return $this;
    }

    /**
     * Get the value of altitude
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set the value of altitude
     */
    public function setAltitude($altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}
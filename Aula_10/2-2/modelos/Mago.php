<?php
require_once ("Poder.php");
class Mago{
    private $nome;
    private Poder $poder;

    public function __construct($nome,$poder){
        $this->nome = $nome;
        $this->poder = $poder;
    }

    public function __tostring(){
        $msg = "O mago $this->nome,";
        if($this instanceof Curandeiro){
            $msg .= "do tipo Curandeiro, possui força de ". $this->getForcaDeCura() ." e
lançou o poder " . $this->getPoder()->getDescricao(). " com força total de " . $this->getPoder()->getForcaTotal($this->getForcaDeCura());
        } elseif ($this instanceof Combatente){
            $msg .= "do tipo Combatente, possui força de ". $this->getForcaDeAtaque() ." e
lançou o poder " . $this->getPoder()->getDescricao(). " com força total de " . $this->getPoder()->getForcaTotal($this->getForcaDeAtaque());
        }
        return $msg;
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
     * Get the value of poder
     */
    public function getPoder()
    {
        return $this->poder;
    }

    /**
     * Set the value of poder
     */
    public function setPoder($poder): self
    {
        $this->poder = $poder;

        return $this;
    }
}
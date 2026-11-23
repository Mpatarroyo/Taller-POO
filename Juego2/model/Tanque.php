<?php

require_once __DIR__ . "/Personaje.php";

class Tanque extends Personaje
{

    private $redDano;

    public function __construct(int $velocidad, int $defensa, int $ataque, int $redDano)
    {
        parent::__construct($velocidad, $defensa, $ataque, "Tanque");
        $this->redDano = $redDano;
    }

    public function getRedDano()
    {
        return $this->redDano;
    }

    public function setRedDano(int $redDano)
    {
        $this->redDano = $redDano;
    }

    public function mostrarInfo()
    {
        return parent::mostrarInfo() . "| RedDaño: {$this->redDano}";
    }
}

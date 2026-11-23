<?php

require_once __DIR__ . "/Personaje.php";

class Guerrero extends Personaje
{

    private $fuerza;

    public function __construct(int $velocidad, int $defensa, int $ataque, int $fuerza)
    {
        parent::__construct($velocidad, $defensa, $ataque, "Guerrero");
        $this->fuerza = $fuerza;
    }

    public function getFuerza()
    {
        return $this->fuerza;
    }

    public function setFuerza(int $fuerza)
    {
        $this->fuerza = $fuerza;
    }

    public function mostrarInfo()
    {
        return parent::mostrarInfo() . " | Fuerza: {$this->fuerza}";
    }
}

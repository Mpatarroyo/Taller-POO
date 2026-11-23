<?php

require_once __DIR__ . "/Personaje.php";

class Mago extends Personaje
{
    private $mana;

    public function __construct(int $velocidad, int $defensa, int $ataque, int $mana)
    {
        parent::__construct($velocidad, $defensa, $ataque, "Mago");
        $this->mana = $mana;
    }

    public function getMana()
    {
        return $this->mana;
    }

    public function setMana(int $mana)
    {
        $this->mana = $mana;
    }

    public function mostrarInfo()
    {
        return parent::mostrarInfo() . " | Mana: {$this->mana}";
    }
}

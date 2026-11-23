<?php

class Personaje
{
    private $velocidad;
    private $defensa;
    private $ataque;
    private $rol;

    public function __construct(int $velocidad, int $defensa, int $ataque, string $rol)
    {
        $this->velocidad = $velocidad;
        $this->defensa = $defensa;
        $this->ataque = $ataque;
        $this->rol = $rol;
    }

    public function getVelocidad()
    {
        return  $this->velocidad;
    }

    public function getDefensa()
    {
        return $this->defensa;
    }

    public function getAtaque()
    {
        return $this->ataque;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setVelocidad(int $velocidad)
    {
        $this->velocidad = $velocidad;
    }

    public function setDefensa(int $defensa)
    {
        $this->defensa = $defensa;
    }

    public function setAtaque(int $ataque)
    {
        $this->ataque = $ataque;
    }

    public function setRol(string $rol)
    {
        $this->rol = $rol;
    }

    public function mostrarInfo()
    {
        return "| Velocidad: {$this->velocidad} | Defensa: {$this->defensa} | Ataque: {$this->ataque} | Rol: {$this->rol}";
    }
}

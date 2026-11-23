<?php

class VistaPersonaje
{

    /**
     * @param Personaje $personaje
     */

    public function mostrarPersonaje(Personaje $personaje)
    {
        echo $personaje->mostrarInfo() . PHP_EOL;
    }
}

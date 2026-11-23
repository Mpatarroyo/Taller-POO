<?php

require_once __DIR__ . "/../model/Personaje.php";
require_once __DIR__ . "/../model/Mago.php";
require_once __DIR__ . "/../model/Guerrero.php";
require_once __DIR__ . "/../model/Tanque.php";

require_once __DIR__ . "/../view/vistaPersonaje.php";

class personajeController
{
    private $vista;

    /**
     * @param vistaPersonaje $vista;
     */

    public function __construct(vistaPersonaje $vista)
    {
        $this->vista = $vista;
    }

    public function estadisticas()
    {
        $personajes = array(
            new mago(70, 50, 50, 100),
            new tanque(20, 100, 30, 80),
            new guerrero(50, 80, 100, 90),

        );

        foreach ($personajes as $personaje) {
            echo $personaje->mostrarInfo();
        }
    }
}

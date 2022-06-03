<?php

class DatosPersona
{
    public $Nombre;
    public $Apellido;
    public $Email;
    public $Edad;

    public function MostrarPropiedades()
    {
        echo 'Nombre: ' . $this->Nombre;
        echo 'Apellido: ' . $this->Apellido;
        echo 'Email: ' . $this->Email;
        echo 'Edad: ' . $this->Edad;
    }
}

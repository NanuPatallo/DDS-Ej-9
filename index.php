<?php

require_once 'Modelo/datosPersona.php';

$p1 = new DatosPersona();

$p1->Nombre = 'Daiana' . '<hr>';
$p1->Apellido = 'Patallo' . '<hr>';
$p1->Email = 'daianapatallo@gmail.com' . '<hr>';
$p1->Edad = '30' . '<hr>';

$p1->MostrarPropiedades();

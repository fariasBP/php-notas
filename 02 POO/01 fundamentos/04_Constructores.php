<?php
class Auto {
    // CREAMOS SUS PROPIEDADES  // ignoramos por el momento public (lo veremos en modificadores de acceso)
    public $marca;

    public $ruedas;
    public $puertas;
    public $aire_acondicionado;
    public $color;
    public $kilometraje;

    public $arranca;
    public $distancia_recoorrido;
    public $velocidad_inicial;
    public $velocidad_final;
    public $velocidad;
    public $aceleracion;
    public $velocidad_max;

    public function __construct($marca) {
        $this->puertas = 4;
        $this->marca = $marca;
    }
}
<?php
/* PROPIEDADES
    Tambien llamados atributos. Son caracteristicas que tiene un objeto;
*/

class Modelo {
    # propiedades >>> caracteristicas del objeto
    public $caracteristicaUno; // ignoramos por el momento public (lo veremos en modificadores de acceso)
    public $caracteristicaDos;
    # metodos >>> accionces o funciones que puede hacer el objeto
    public function accionDelModelo() {
        # instrucciones
    }
}

// CREAMOS LA CLASE AUTOMOVIL
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
}
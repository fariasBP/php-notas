<?php
/* MEDOTODS
    Son funciones o acciones que puede hacer lo objeto. Hay dos tipos de metodos:
        -> getters >>> son aquellos metodos que nos permiten obtener datos
        -> setters >>> son aquellos metodos que nos permiten dar o ceder datos
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

    // CONSTRUCTOR
    public function __construct($marca) {
        $this->puertas = 4;
        $this->marca = $marca;
    }

    // CREAMOS SUS METODOS
    public function definirAireAcondicionado($definir) {
        $this->aire_acondicionado = $definir;
    }
    public function devolverAireAcondicinado() {
        return $aire_acondicionado;
    }

    public function definirColo($color) { // tipo setter
        $this->color = $color;
    }
    public function devolverColor() { // tipo getter
        return $this->color;
    }

    public function arrancar($aceleracion) { // tipo setter
        $this->arranca = true;
        $this->velocidad_inicial = 0;
        $this->aceleracion = $aceleracion;
    }
    public function recorrido($tiempo_de_accion) { // tipo setter
        $this->tiempo_de_recorrido = $tiempo_de_recorrido; // por esto es que existe this
        if ($arranca) {
            $kilometraje = ($this->velocidad_inicial*$tiempo_de_accion)+(0.5*$this->aceleracion*$tiempo_de_accion*$tiempo_de_accion);
        }
    }
    public function mostrarKilometraje() { // tipo getter
        return $kilometraje;
    }
}
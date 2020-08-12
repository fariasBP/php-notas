<?php
/* MODIFICADORES DE ACCESO A DATOS
    veremos los distintos tipos para tipar una propiedad o metodo
    TEMAS:
        - public
        - protected
        - private
*/

// CREAMOS LA CLASE AUTOMOVIL
class Auto {
    // CREAMOS SUS PROPIEDADES  // ignoramos por el momento public (lo veremos en modificadores de acceso)
    public $marca;

    private $ruedas = 4;
    public $puertas;
    public $aire_acondicionado;
    public $color;
    public $kilometraje;
    public $velocidad_max;

    public $arranca;
    public $distancia_recoorrido;
    public $velocidad_inicial;
    public $velocidad;
    public $aceleracion;

    // CONSTRUCTOR
    public function __construct($marca, $puertas) {
        $this->ruedas = 4;
        $this->puertas = $puertas;
        $this->marca = $marca;
    }

    // CREAMOS SUS METODOS
    public function devolverMarca() {
        return $this->marca;
    }

    public function definirVelMax($max) {
        $this->velocidad_max;
    }
    public function devolverVelMax() {
        return $this->velocidad_max;
    }

    public function devolverRuedas() {
        return $this->ruedas;
    }

    public function definirAireAcondicionado($definir) {
        $this->aire_acondicionado = $definir;
    }
    public function devolverAireAcondicinado() {
        return $aire_acondicionado;
    }

    public function definirColor($color) { // tipo setter
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

$ferrari = new Auto("ferrari", 2);
$ferrari->definirAireAcondicionado(true);
$ferrari->definirColor("verde");
$ferrari->definirVelMax(133);

echo $ferrari->devolverMarca();
echo $ferrari->devolverColor();
echo $ferrari->devolverRuedas();
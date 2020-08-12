<?php
/* INSTANCIA - INSTANCIACION
    Se llama instancia a todo objeto que derive de algún otro. De esta forma, todos los objetos son instancias de algún otro, menos la clase Object que es la madre de todas.
*/

// CREAMOS LA CLASE AUTOMOVIL
class Auto {
    // CREAMOS SUS PROPIEDADES  // ignoramos por el momento public (lo veremos en modificadores de acceso)
    public $marca;

    public $ruedas;
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
    public function __construct($marca) {
        $this->puertas = 4;
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

$ferrari = new Auto("ferrari");
$ferrari->definirAireAcondicionado(true);
$ferrari->definirColor("verde");
$ferrari->definirVelMax(133);

echo $ferrari->devolverMarca();
echo $ferrari->devolverColor();
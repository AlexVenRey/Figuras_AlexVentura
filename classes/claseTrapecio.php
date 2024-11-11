<?php
// Classe FiguraGeometrica
require_once 'FiguraGeometrica.php';

// Classe Trapecio que hereta de FiguraGeometrica
class Trapecio extends FiguraGeometrica {
    private $lado2;
    private $altura;

    // Constructor
    function __construct($lado2, $lado3) {
        parent::__construct("Trapecio", $lado2);
        $this->lado2 = $lado2;
        $this->altura = $altura;
    }

    // Destructor
    function __destruct() {
        echo "S'ha destruït el trapeci<br>";
    }

    // Setters
    function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    // Getters
    function getLado2() {
        return $this->lado2;
    }

    function getAltura() {
        return $this->altura;
    }

    // Calcular l'àrea
    function calcularArea() {
        return (($this->lado1 + $this->lado2)/2)*$this->altura;
    }

    // Calcular el perímetre
    function calcularPerimetre() {
        return ($this->lado1 * $this-> lado2)* $this->altura;
    }

    // Mètode __toString per retornar la descripció de la figura
    function __toString() {
        return "Figura: " . $this->tipoFigura . ", Con lado2: " . $this->lado2 . ", y una altura de: " . $this->altura;
    }
}
?>
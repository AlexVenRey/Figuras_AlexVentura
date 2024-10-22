<?php
// Classe FiguraGeometrica
require_once 'FiguraGeometrica.php';

// Classe Triangulo que hereta de FiguraGeometrica
class Triangulo extends FiguraGeometrica {
    private $lado2;
    private $lado3;

    // Constructor
    function __construct($lado1, $lado2, $lado3) {
        parent::__construct("Triangulo", $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    // Destructor
    function __destruct() {
        echo "S'ha destruït el triangle<br>";
    }

    // Setters
    function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    function setLado3($lado3) {
        $this->lado3 = $lado3;
    }

    // Getters
    function getLado2() {
        return $this->lado2;
    }

    function getLado3() {
        return $this->lado3;
    }

    // Calcular l'àrea
    function calcularArea() {
        $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
        $area = sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
        return $area;
    }

    // Calcular el perímetre
    function calcularPerimetre() {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

    // Mètode __toString per retornar la descripció de la figura
    function __toString() {
        return "Figura: " . $this->tipoFigura . ", Lado1: " . $this->lado1 . ", Lado2: " . $this->lado2 . ", Lado3: " . $this->lado3;
    }
}
?>
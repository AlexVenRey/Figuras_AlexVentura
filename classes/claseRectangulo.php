<?php
// Classe FiguraGeometrica
require_once 'FiguraGeometrica.php';

// Classe Rectangulo que hereta de FiguraGeometrica
class Rectangulo extends FiguraGeometrica {
    private $lado2;

    // Constructor
    public function __construct($lado1, $lado2) {
        parent::__construct("Rectangulo", $lado1);
        $this->lado2 = $lado2;
    }

    // Destructor
    public function __destruct() {
        echo "S'ha destruït el rectangle<br>";
    }

    // Setters
    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    // Getters
    public function getLado2() {
        return $this->lado2;
    }

    // Calcular l'àrea
    public function calcularArea() {
        return $this->lado1 * $this->lado2;
    }

    // Calcular el perímetre
    public function calcularPerimetre() {
        return 2 * ($this->lado1 + $this->lado2);
    }

    // Mètode __toString per retornar la descripció de la figura
    public function __toString() {
        return "Figura: " . $this->tipoFigura . ", Lado1 (llargada): " . $this->lado1 . ", Lado2 (amplada): " . $this->lado2;
    }
}
?>
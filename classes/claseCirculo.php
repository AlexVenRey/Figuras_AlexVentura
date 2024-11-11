<?php
// Classe FiguraGeometrica
require_once 'FiguraGeometrica.php';

// Classe Circulo que hereta de FiguraGeometrica
class Circulo extends FiguraGeometrica {
    // Constructor
    public function __construct($radio) {
        parent::__construct("Circulo", $radio);
    }

    // Destructor
    public function __destruct() {
        echo "S'ha destruït el cercle<br>";
    }

    // Calcular l'àrea
    public function calcularArea() {
        return pi() * pow($this->lado1, 2);
    }

    // Calcular el perímetre
    public function calcularPerimetre() {
        return 2 * pi() * $this->lado1;
    }

    // Mètode __toString per retornar la descripció de la figura
    public function __toString() {
        return "Figura: " . $this->tipoFigura . ", Radio: " . $this->lado1;
    }
}
?>
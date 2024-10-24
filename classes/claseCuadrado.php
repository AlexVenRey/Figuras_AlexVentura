<?php
// Classe FiguraGeometrica
require_once 'FiguraGeometrica.php';

// Classe Cuadrado que hereta de FiguraGeometrica
class Cuadrado extends FiguraGeometrica {
    // Constructor
    public function __construct($lado1) {
        parent::__construct("Cuadrado", $lado1);
    }

    // Destructor
    public function __destruct() {
        echo "S'ha destruït el quadrat<br>";
    }

    // Calcular l'àrea
    public function calcularArea() {
        return $this->lado1 * $this->lado1; // Àrea = costat * costat
    }

    // Calcular el perímetre
    public function calcularPerimetre() {
        return 4 * $this->lado1; // Perímetre = 4 * costat
    }

    // Mètode __toString per retornar la descripció de la figura
    public function __toString() {
        return "Figura: " . $this->tipoFigura . ", Lado: " . $this->lado1;
    }
}
?> 
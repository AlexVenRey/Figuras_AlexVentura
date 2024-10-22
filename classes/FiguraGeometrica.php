<?php
class FiguraGeometrica() {
    // Atributs
    public $tipoFigura;
    public $lado1;

    // Constructor
    function __construct($tipoFigura, $lado1) {
        $this->tipoFigura=$tipoFigura;
        $this->lado1=$lado1;

        echo "S'ha creat una figura del tipus: $this->tipoFigura amb un costat: $this->lado1";
    }

    // Destructor
    function __destruct() {
        echo "S'ha destruit la figura: $this->tipoFigura amb un costat: $this->lado1";
    }

    // Setters
    function setTipoFigura($tipoFigura) {
        $this->tipoFigura=$tipoFigura;
    }

    function setLado1($lado1) {
        $this->lado1=$lado1;
    }

    // Getters
    function getTipoFigura($tipoFigura) {
        return $this->tipoFigura;
    }

    function getLado1($lado1) {
        return $this->lado1;
    }

    // Càlcul d'àrea
    function calcularArea() {
        // Missatge que ha de ser sobreescrit
        echo "El mètode calcularArea() ha de ser sobreescrit si és necessari<br>";
    }
}
?>
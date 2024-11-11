<?php
// Iniciem la sessió per accedir a les variables de sessió emmagatzemades previament
session_start();

// Verificamos que se han enviado datos i recuperem la variable $_SESSION['figura']
if (isset($_POST['figura'])) {
    // $_SESSION['figura'] = $_POST['figura'];
    $figura = $_SESSION['figura'];
} else {
    // Redeirecciona al index.php si no s'ha seleccionat cap figura
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="codigo.js"></script>
    <title>Resultados</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="recuadro shadow p-4">
            <!-- Mostrem resultats segons la figura que hagi seleccionat l'usuari -->
            <h1 class="text-center mb-4">Resultados</h1>
            <?php
            if ($figura === 'cuadrado') {
                $lado = $_POST['lado'];

                $areaCuadrado = $lado * $lado;
                $perimetroCuadrado = $lado * 4;

                echo "El perímetro del cuadrado es: $perimetroCuadrado <br>";
                echo "El área del cuadrado es: $areaCuadrado";

            } elseif ($figura === 'triangulo') {
                $lado1 = $_POST['lado1'];
                $lado2 = $_POST['lado2'];
                $lado3 = $_POST['lado3'];

                $perimetroTriangulo = $lado1 + $lado2 + $lado3;
                $s = $perimetroTriangulo / 2;
                $areaTriangulo = sqrt($s * ($s - $lado1) * ($s - $lado2) * ($s - $lado3));

                echo "El perímetro del triángulo es: $perimetroTriangulo <br>";
                echo "El área del triángulo es: $areaTriangulo";

            } elseif ($figura === 'rectangulo') {
                $lado1 = $_POST['lado1'];
                $lado2 = $_POST['lado2'];

                $perimetroRectangulo = ($lado1 * 2) + ($lado2 * 2);
                $areaRectangulo = $lado1 * $lado2;

                echo "El perímetro del rectángulo es: $perimetroRectangulo <br>";
                echo "El área del rectángulo es: $areaRectangulo";

            } elseif ($figura === 'circulo') {
                $radio = $_POST['radio'];
                $pi = 3.1416;

                $perimetroCirculo = 2 * $pi * $radio;
                $areaCirculo = $pi * pow($radio, 2);

                echo "El perímetro del círculo es: $perimetroCirculo <br>";
                echo "El área del círculo es: $areaCirculo";

            } elseif ($figura === 'trapecio') {
                $lado1 = $_POST['lado1'];
                $lado2 = $_POST['lado2'];
                $altura = $_POST['altura'];

                $perimetroTrapecio = ($lado1+$lado2)*$altura;
                $areaTrapecio = (($lado1+$lado2)/2)*$altura;

                echo "El perímetro del trapecio es: $perimetroTrapecio <br>";
                echo "El área del trapecio es: $areaTrapecio";

                
            }
            ?>

            <!-- En aquest formulari enviem les dades dels costats de les figures, a la pàgina recepcion -->
            <div class="text-center mt-4">
                <form action="recepcion.php" method="POST">
                    <!-- S'envia el tipus de figura seleccionada sense mostrar-ho, per saber la figura que s'està editant -->
                    <input type="hidden" name="figura" value="<?php echo $figura; ?>">
                    <?php
                    // Mantenim els valors dels costats o radis de la figura, enviant el valor obtingut emmagatzemat en $_POST['lado']
                    if ($figura === 'cuadrado') {
                        echo '<input type="hidden" name="lado1" value="' . $_POST['lado'] . '">';
                    } elseif ($figura === 'triangulo') {
                        echo '<input type="hidden" name="lado1" value="' . $_POST['lado1'] . '">';
                        echo '<input type="hidden" name="lado2" value="' . $_POST['lado2'] . '">';
                        echo '<input type="hidden" name="lado3" value="' . $_POST['lado3'] . '">';
                    } elseif ($figura === 'rectangulo') {
                        echo '<input type="hidden" name="lado1" value="' . $_POST['lado1'] . '">';
                        echo '<input type="hidden" name="lado2" value="' . $_POST['lado2'] . '">';
                    } elseif ($figura === 'circulo') {
                        echo '<input type="hidden" name="radio" value="' . $_POST['radio'] . '">';
                    } elseif ($figura === 'trapecio') {
                        echo '<input type="hidden" name="lado1" value="' . $_POST['lado1'] . '">';
                        echo '<input type="hidden" name="lado2" value="' . $_POST['lado2'] . '">';
                        echo '<input type="hidden" name="altura" value="' . $_POST['altura'] . '">';
                    }
                    ?>
                    <!-- Botó per tornar a modificar -->
                    <button type="submit" class="btn btn-warning btn-lg mt-2">Editar Valores</button>
                </form>
            </div>

        </div>
    </div>
</body>
</html>

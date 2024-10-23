<?php
// Iniciamos la sesión
session_start();

// Verificamos que se han enviado datos
if (isset($_POST['figura'])) {
    // $_SESSION['figura'] = $_POST['figura'];
    $figura = $_SESSION['figura'];
} else {
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

            }
            ?>
        </div>
    </div>
</body>
</html>

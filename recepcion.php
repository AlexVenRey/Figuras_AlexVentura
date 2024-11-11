<?php
// Iniciem la sesió per emmagatzemar dades que utilitzarem en les diferents pàgines
session_start();

// Verifiquem que s'han enviat les dades i afegim les sesions
if (isset($_POST['figura'])) {
    $_SESSION['figura'] = $_POST['figura'];
    $figura = $_SESSION['figura'];

    // Guardem els valors del costats o radi en la sesión, per així poder recordar-los quan el usuari torni per modificar
    $_SESSION['lado1'] = isset($_POST['lado1']) ? $_POST['lado1'] : '';
    $_SESSION['lado2'] = isset($_POST['lado2']) ? $_POST['lado2'] : '';
    $_SESSION['lado3'] = isset($_POST['lado3']) ? $_POST['lado3'] : '';
    $_SESSION['radio'] = isset($_POST['radio']) ? $_POST['radio'] : '';
    $_SESSION['altura'] = isset($_POST['altura']) ? $_POST['altura'] : '';
} else {
    // Redeirecciona al index.php si no s'ha seleccionat cap figura
    header('Location: index.php');
}

// Asignem les variables de sessió a les variables locals
$lado1 = $_SESSION['lado1'];
$lado2 = $_SESSION['lado2'];
$lado3 = $_SESSION['lado3'];
$radio = $_SESSION['radio'];
$altura = $_SESSION['altura'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="codigo.js"></script>
    <title>Figura Seleccionada</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="recuadro shadow p-4">
            <!-- Mostrem missatge de la figura seleccionada -->
            <h1 class="text-center mb-4">
                <?php
                if ($figura) {
                    echo 'Has seleccionado: ' . $figura;
                }
                ?>
            </h1>

            <!-- Demanem al usuari que introdueixi la longitud dels costats o radi de la figura -->
            <form action="calculo.php" method="POST" onsubmit="return validar()">
                <input type="hidden" name="figura" id="figura" value="<?php echo $figura; ?>">
                <?php
                if ($figura === 'cuadrado') {
                    echo '
                        <div class="form-group">
                            <label for="lado">Introduce la longitud del lado:</label>
                            <input type="number" name="lado" id="lado" class="form-control" value="' . htmlspecialchars($lado1) . '">
                            <span id="errorlado"></span>
                        </div>';
                } elseif ($figura === 'triangulo') {
                    echo '
                        <div class="form-group">
                            <label for="lado1">Introduce la longitud del lado 1:</label>
                            <input type="number" name="lado1" id="lado1" class="form-control" value="' . htmlspecialchars($lado1) . '">
                            <span id="errorlado1"></span>
                        </div>
                        <div class="form-group">
                            <label for="lado2">Introduce la longitud del lado 2:</label>
                            <input type="number" name="lado2" id="lado2" class="form-control" value="' . htmlspecialchars($lado2) . '">
                            <span id="errorlado2"></span>
                        </div>
                        <div class="form-group">
                            <label for="lado3">Introduce la longitud del lado 3:</label>
                            <input type="number" name="lado3" id="lado3" class="form-control" value="' . htmlspecialchars($lado3) . '">
                            <span id="errorlado3"></span>
                        </div>';
                } elseif ($figura === 'rectangulo') {
                    echo '
                        <div class="form-group">
                            <label for="lado1">Introduce la longitud del lado 1:</label>
                            <input type="number" name="lado1" id="lado1" class="form-control" value="' . htmlspecialchars($lado1) . '">
                            <span id="errorlado1"></span>
                        </div>
                        <div class="form-group">
                            <label for="lado2">Introduce la longitud del lado 2:</label>
                            <input type="number" name="lado2" id="lado2" class="form-control" value="' . htmlspecialchars($lado2) . '">
                            <span id="errorlado2"></span>
                        </div>';
                } elseif ($figura === 'circulo') {
                    echo '
                        <div class="form-group">
                            <label for="radio">Introduce la longitud del radio:</label>
                            <input type="number" name="radio" id="radio" class="form-control" value="' . htmlspecialchars($radio) . '">
                            <span id="errorradio"></span>
                        </div>';
                } elseif ($figura === 'trapecio') {
                    echo '
                    <div class="form-group">
                        <label for="lado1">Introduce la longitud del lado 1:</label>
                        <input type="number" name="lado1" id="lado1" class="form-control" value="' . htmlspecialchars($lado1) . '">
                        <span id="errorlado1"></span>
                    </div>
                    <div class="form-group">
                        <label for="lado2">Introduce la longitud del lado 2:</label>
                        <input type="number" name="lado2" id="lado2" class="form-control" value="' . htmlspecialchars($lado2) . '">
                        <span id="errorlado2"></span>
                    </div>
                    <div class="form-group">
                        <label for="altura">Introduce la altura:</label>
                        <input type="number" name="altura" id="altura" class="form-control" value="' . htmlspecialchars($altura) . '">
                        <span id="erroraltura"></span>
                    </div>';
                }
                ?>
                <!-- Botó calcular -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">Calcular</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

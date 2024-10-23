<?php
// Iniciamos la sesión
session_start();

// Verificamos que se han enviado datos y añadimos las sesiones
if (isset($_POST['figura'])) {
    $_SESSION['figura'] = $_POST['figura'];
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
    <title>Figura Seleccionada</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="recuadro shadow p-4">
            <h1 class="text-center mb-4">
                <?php
                if ($figura) {
                    echo 'Has seleccionado: ' . $figura;
                }
                ?>
            </h1>

            <form action="calculo.php" method="POST" onsubmit="return validar()">
            <input type="hidden" name="figura" id="figura" value="<?php echo $figura; ?>">
                <?php
                if ($figura === 'cuadrado') {
                    echo '
                        <div class="form-group">
                            <label for="lado">Introduce la longitud del lado:</label>
                            <input type="number" name="lado" id="lado" class="form-control">
                            <span id="errorlado"></span>
                            
                        </div>';
                } elseif ($figura === 'triangulo') {
                    echo '
                        <div class="form-group">
                            <label for="lado1">Introduce la longitud del lado 1:</label>
                            <input type="number" name="lado1" id="lado1" class="form-control">
                            <span id="errorlado1"></span>

                        </div>
                        <div class="form-group">
                            <label for="lado2">Introduce la longitud del lado 2:</label>
                            <input type="number" name="lado2" id="lado2" class="form-control">
                            <span id="errorlado2"></span>

                        </div>
                        <div class="form-group">
                            <label for="lado3">Introduce la longitud del lado 3:</label>
                            <input type="number" name="lado3" id="lado3" class="form-control">
                            <span id="errorlado3"></span>
                         
                        </div>';
                } elseif ($figura === 'rectangulo') {
                    echo '
                        <div class="form-group">
                            <label for="lado1">Introduce la longitud del lado 1:</label>
                            <input type="number" name="lado1" id="lado1" class="form-control">
                            <span id="errorlado1"></span>

                        </div>
                        <div class="form-group">
                            <label for="lado2">Introduce la longitud del lado 2:</label>
                            <input type="number" name="lado2" id="lado2" class="form-control">
                            <span id="errorlado2"></span>
                           
                        </div>';
                } elseif ($figura === 'circulo') {
                    echo '
                        <div class="form-group">
                            <label for="radio">Introduce la longitud del radio:</label>
                            <input type="number" name="radio" id="radio" class="form-control">
                            <span id="errorradio"></span>
                          
                        </div>';
                }
                ?>
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg">Calcular</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

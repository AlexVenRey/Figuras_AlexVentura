<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">
    <title>Figures</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h1 class="text-center mb-4">Selección de figura</h1>
            <form action="recepcion.php" method="POST">
                <div class="form-group">
                    <label for="figura">Elige una figura:</label>
                    <select name="figura" id="figura" class="form-control" required>
                        <option value="">Elige una figura</option>
                        <option value="cuadrado">Cuadrado</option>
                        <option value="triangulo">Triángulo</option>
                        <option value="rectangulo">Rectángulo</option>
                        <option value="circulo">Círculo</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

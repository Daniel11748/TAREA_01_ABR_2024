<!DOCTYPE html>
<html>

<head>
    <title>Suma de Casillas</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

</head>

<body>
    <div class="form">
        <h1>Suma de Casillas</h1>
        <form method="post" action="matriz2.php">
            <div class="form-group">
                <label for="filas">Número de filas:</label>
                <input type="number" name="filas" id="filas" required>
            </div>
            <div class="form-group">           
            <label for="columnas">Número de columnas:</label>
            <input type="number" name="columnas" id="columnas" required>
            </div>
            <div class="form-group">           
            <input type="submit" value="Crear Tabla">
            </div>
        </form>
    </div>
</body>

</html>
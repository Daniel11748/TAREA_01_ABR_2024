<!DOCTYPE html>
<html>
<head>
    <title>Matriz con Estilo</title>
<link rel="stylesheet" href="estilo2.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

</head>
<body>
    <div class="matriz" style=" font-family: cursive;">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $filas = $_POST["filas"];
            $columnas = $_POST["columnas"];

            // Calcular la suma de los números dentro de las casillas
            $suma = 0;

            // Obtener el número máximo de dígitos para ajustar el ancho mínimo de las casillas
            $max_digits = strlen($filas * $columnas);

            // Generar la matriz de casillas
            for ($fila = 1; $fila <= $filas; $fila++) {
                for ($columna = 1; $columna <= $columnas; $columna++) {
                    // Imprimir el número de la casilla
                    $numero_casilla = ($fila - 1) * $columnas + $columna;
                    echo '<div class="casilla" style="min-width: ' . (10 + 10 * $max_digits) . 'px;">' . $numero_casilla . '</div>';

                    // Sumar el número al total
                    $suma += $numero_casilla;
                }
                echo '<br>';
            }

            echo ' La suma total de los números dentro de las casillas es: ' . $suma . '</p>';
        }
        ?>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ?>
    <div style="text-align: center; font-family: cursive;">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="columna_suma">Número de columna a sumar:</label>
        <input type="number" id="columna_suma" name="columna_suma" min="1" max="<?php echo $_POST['columnas']; ?>" required>
        <input type="hidden" name="filas" value="<?php echo $_POST['filas']; ?>" style="border: solid seagreen;">
        <input type="hidden" name="columnas" value="<?php echo $_POST['columnas']; ?>" class="text-center">
        <br>
        <input type="submit" value="Calcular suma de columna" style=" font-family: cursive; border: solid seagreen;">
    </form>
</div>
    <?php
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['columna_suma'])) {
        $filas = $_POST["filas"];
        $columna_suma = $_POST["columna_suma"];
        $suma_columna = 0;

        // Calcular la suma de la columna especificada
        for ($fila = 1; $fila <= $filas; $fila++) {
            $numero_casilla = ($fila - 1) * $_POST['columnas'] + $columna_suma;
            $suma_columna += $numero_casilla;
        }

        echo '<p><strong>La suma de los números en la columna ' . $columna_suma . ' es: ' . $suma_columna . '</strong></p>';
    }
    ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Tablero de Damas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="titulo"><h1>TABLERO DE DAMAS (CHECKERS)</h1></div>

<div id="contenedor">
    <table>
        <?php
        $filas = 8;
        $columnas = 8;
        $fichas_por_jugador = 12;

        // Agregar fila superior con números
        echo "<tr class='numeros-fila'><td></td>";
        for ($i = 1; $i <= $columnas; $i++) {
            echo "<td class='numeros'>$i</td>";
        }
        echo "</tr>";

        // Generar la barra lateral numérica
        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";
            // Agregar número a la izquierda de cada fila
            echo "<td class='numeros-numeros-columna'>" . ($i + 1) . "</td>";
            for ($j = 0; $j < $columnas; $j++) {
                $color = ($i + $j) % 2 == 0 ? "marron" : "amarillo-palido";
                $ficha = "";

                // Colocar las fichas del jugador azul
                if ($i < 3 && $color == "marron") {
                    $ficha = "<div class='ficha azul'><img src='mia.jpg'></div>";
                }
                // Colocar las fichas del jugador rojo
                elseif ($i > 4 && $color == "marron") {
                    $ficha = "<div class='ficha roja'><img src='incognito.jpeg'></div>";
                }
                // Colocar la fila verde
                elseif ($i == 3) {
                    $color = "verde";
                }

                echo "<td class='$color'>$ficha</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>

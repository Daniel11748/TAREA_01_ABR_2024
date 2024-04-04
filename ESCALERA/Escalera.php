<!DOCTYPE html>
<html>
<head>
    <title>Escalera Generada</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si se envió el formulario y se ingresó un número válido de niveles
        if (isset($_POST["niveles"]) && is_numeric($_POST["niveles"])) {
            $niveles = intval($_POST["niveles"]);

            // Verificar que el número de niveles esté dentro del rango permitido
            if ($niveles >= 5 && $niveles <= 8) {
                // Generar la escalera
                ?><h2>Escalera de palabras</h2><?php
                echo "<div class='escalera'>";
                
                // Definir las palabras para cada bloque según el número de niveles
                switch ($niveles) {
                    case 5:
                        $palabras = array("Hoy", "es", "un", "nuevo", "día", "tienes", "la", "oportunidad", "de", "ser", "mejor", "persona", "aprovéchala", "o", "déjala");
                        break;
                    case 6:
                        $palabras = array("Hoy", "es", "un", "nuevo", "día", "tienes", "la", "oportunidad", "de", "ser", "mejor", "persona", "aprovéchala", "o", "déjala", "pasar", "pero", "no", "te", "arrepientas", "nunca");
                        break;
                    case 7:
                        $palabras = array("Hoy", "es", "un", "nuevo", "día,", "tienes", "la", "oportunidad", "de", "ser", "mejor", "persona,", "aprovéchala", "o", "déjala", "pasar,", "pero", "no", "te", "arrepientas", "nunca,", "el", "\"hubiera\"", "no", "existe,", "depende", "de", "ti.");
                        echo "<p>";
                        break;
                    case 8:
                        $palabras = array("Hoy", "es", "un", "nuevo", "día,", "tienes", "la", "oportunidad", "de", "ser", "mejor", "persona,", "aprovéchala", "o", "déjala", "pasar,", "pero", "no", "te", "arrepientas", "nunca,", "el", "\"hubiera\"", "no", "existe,", "depende", "de", "ti,", "alcanzar", "tus", "sueños", "no", "pasará", "solo", "porque", "sí.");
                        echo "<p>";
                        break;
                    // Puedes agregar más casos según sea necesario para más niveles
                    default:
                        $palabras = array();
                        break;
                }
                
                // Imprimir las palabras en cada bloque de la escalera
                $palabra_index = 0;
                for ($i = 1; $i <= $niveles; $i++) {
                    echo "<div class='nivel'>";
                    for ($j = 1; $j <= $i; $j++) {
                        echo "<div class='block'>" . $palabras[$palabra_index++] . "</div>";
                    }
                    echo "</div>";
                }
                
                echo "</div>";

                // Construir la oración
                $oracion = implode(" ", $palabras);
                echo "<p><strong>Oración:</strong> $oracion</p>";
                
            } else {
                echo "Por favor, selecciona un número de niveles válido (entre 5 y 8).";
            }
        } else {
            echo "Por favor, introduce un número válido de niveles.";
        }
    } else {
        // Si no se recibieron datos del formulario, redirigir al formulario
        header("Location: formulario.php");
        exit();
    }
    ?>
</div>

</body>
</html>

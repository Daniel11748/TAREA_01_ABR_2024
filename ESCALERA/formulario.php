<!DOCTYPE html>
<html>
<head>
    <title>Generador de Escaleras</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<div class="container">
    <form method="post" class="formulario" action="mostrar_escalera.php">
    <h1>Escalera de palabras</h1>
        <label for="niveles">ELIJA EL NUMERO DE NIVELES (entre 5 y 8): </label>
        <input type="number" id="niveles" name="niveles" min="5" max="8"><br>
        <input class="butom" type="submit" value="MOSTRAR ESCALERA">
    </form>
</div>

</body>
</html>

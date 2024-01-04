<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP FINAL 1</title>
    <link rel="stylesheet" href="./estilos.css">
</head>

<body>
    <header>
        <h1>Averigua tu signo zodiacal</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="form.php">Newsletter</a>
    </nav>

    <main>

        <?php

        $mensaje_mostrado = false;

        //info sobre los signos
        $detalles_signos = array(
            "Aries" => "Aries es el primer signo del zodíaco y se asocia con la energía, la iniciativa y la pasión.",
            "Tauro" => "Tauro es conocido por su determinación, paciencia y conexión con la naturaleza.",
            "Géminis" => "Géminis es el signo de los gemelos y se asocia con la comunicación, la versatilidad y la curiosidad.",
            "Cáncer" => "Cáncer es un signo de agua y se asocia con la sensibilidad, la protección y la familia.",
            "Leo" => "Leo es el signo del león y se asocia con la autoexpresión, el liderazgo y la creatividad.",
            "Virgo" => "Virgo es conocido por su enfoque meticuloso, la atención a los detalles y la practicidad.",
            "Libra" => "Libra es el signo de la balanza y se asocia con la armonía, la justicia y la belleza.",
            "Escorpio" => "Escorpio es un signo apasionado y misterioso, asociado con la transformación y la intensidad emocional.",
            "Sagitario" => "Sagitario es conocido por su espíritu aventurero, la búsqueda del conocimiento y la honestidad.",
            "Capricornio" => "Capricornio es un signo de tierra y se asocia con la ambición, la disciplina y la responsabilidad.",
            "Acuario" => "Acuario es el signo de la innovación, la originalidad y la independencia.",
            "Piscis" => "Piscis es el último signo del zodíaco y se asocia con la compasión, la imaginación y la espiritualidad."
        );

        //funcion para determinar el signo
        function obtenerSignoZodiacal($mes, $dia)
        {
            //fechas de cambio de signo
            $fechas_signos = array(
                array("inicio" => "03-21", "fin" => "04-19", "signo" => "Aries"),
                array("inicio" => "04-20", "fin" => "05-20", "signo" => "Tauro"),
                array("inicio" => "05-21", "fin" => "06-20", "signo" => "Géminis"),
                array("inicio" => "06-21", "fin" => "07-22", "signo" => "Cáncer"),
                array("inicio" => "07-23", "fin" => "08-22", "signo" => "Leo"),
                array("inicio" => "08-23", "fin" => "09-22", "signo" => "Virgo"),
                array("inicio" => "09-23", "fin" => "10-22", "signo" => "Libra"),
                array("inicio" => "10-23", "fin" => "11-21", "signo" => "Escorpio"),
                array("inicio" => "11-22", "fin" => "12-21", "signo" => "Sagitario"),
                array("inicio" => "12-22", "fin" => "01-19", "signo" => "Capricornio"),
                array("inicio" => "01-20", "fin" => "02-18", "signo" => "Acuario"),
                array("inicio" => "02-19", "fin" => "03-20", "signo" => "Piscis")
            );

            //formatear mes-día
            $fecha_nacimiento = sprintf("%02d-%02d", $mes, $dia);

            //elegir el signo
            foreach ($fechas_signos as $signo) {
                if ($fecha_nacimiento >= $signo["inicio"] && $fecha_nacimiento <= $signo["fin"]) {
                    return $signo["signo"];
                }
            }

            return "Desconocido";
        }


        //procesar datos del formulario
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nombre"], $_GET["dia"], $_GET["mes"])) {
            $nombre = $_GET["nombre"];
            $dia = $_GET["dia"];
            $mes = $_GET["mes"];

            //obtener el signo
            $signo_zodiacal = obtenerSignoZodiacal($mes, $dia);
        }

        ?>

        <!-- formulario para obtener datos del usuario -->
        <form action="index.php" method="get">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="dia">Día de Nacimiento:</label>
            <input type="number" name="dia" placeholder="Del 01 al 31" min="1" max="31" required>

            <label for="mes">Mes de Nacimiento:</label>
            <input type="number" name="mes" placeholder="Del 01 al 12" min="1" max="12" required>
            <button type="submit">Enviar</button>
        </form>

        <?php

        //mensaje con el signo
        $mensaje_mostrado = true;
        echo "<p>Hola, $nombre. Tu signo zodiacal es $signo_zodiacal.</p>";

        //mostrar detalles sobre el signo
        if ($mensaje_mostrado) {
            foreach ($detalles_signos as $signo => $detalles) {
                if ($signo === $signo_zodiacal) {
                    echo "<p>Detalles sobre tu signo $signo_zodiacal:<br>" . $detalles . "</p>";
                    break;
                }
            }
        }

        ?>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> TRABAJO PRÁCTICO FINAL</p>
    </footer>

</body>

</html>
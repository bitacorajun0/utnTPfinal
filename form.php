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
        <h1>Suscribite para recibir mas info!</h1>
    </header>

    <!-- incluyo el archivo conexionDB.php para manejar la interacción con la base de datos -->
    <?php include("conexionDB.php"); ?>

    <nav>
        <a href="index.php">Home</a>
        <a href="form.php">Newsletter</a>
    </nav>

    <main>
        <h2>Ingresa tus datos:</h2>
        <form action="conexionDB.php" method="post">

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="signo">Signo Zodiacal:</label>
            <input type="text" name="signo" required>

            <label for="mail">Correo Electrónico:</label>
            <input type="email" name="mail" required>

            <button type="submit">Enviar</button>
        </form> 

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> TRABAJO PRÁCTICO FINAL</p>
    </footer>

</body>

</html>
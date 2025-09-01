<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examen1</title>
    <link rel="stylesheet" href="examen1.css">
</head>
<body>
    <h2>Verificar mayoría de edad</h2>
    <form action="" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Apellidos:</label>
        <input type="text" name="apellidos" required>

        <label>Edad:</label>
        <input type="number" name="edad" required min="0">

        <input type="submit" name="verificar" value="Comprobar">
    </form>

    <?php
    if (isset($_POST["verificar"])) {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];

        if ($edad >= 18) {
            echo "<div class= 'resultado'> $nombre $apellidos tiene $edad años: <b>Es mayor de edad ✅</b></div>";
        } else {
           echo "<div class= 'resultado'> $nombre $apellidos tiene $edad años: <b>Es menor de edad ❌</b></div>"; 
        }
    }

    ?>
    
</body>
</html>
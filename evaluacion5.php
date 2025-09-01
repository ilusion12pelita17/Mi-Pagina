<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificación</title>
    <link rel="stylesheet" href="evaluacion5.css">
</head>
<body>
    <div class="container">

    <h2>Calificación del estudiante</h2>

    <form action="" method="post">
        <label for="txtnombre">Escribe Nombre:</label>
        <input type="text" name="txtnombre" placeholder="Escribe Nombre" required>

        <label for="txtapellido">Escribe Apellido:</label>
        <input type="text" name="txtapellido" placeholder="Escribe Apellido" required>

        <label for="txtcalificacion">Escribe Calificación:</label>
        <input type="number" name="txtcalificacion" placeholder="Escribe Calificación" required min="0" max="20">

        <input type="submit" name="btncalcular" value="Calcular">
    </form>
    <?php
    if(isset($_POST['btncalcular'])) {
        $nombre=$_POST['txtnombre'];
        $apellido=$_POST['txtapellido'];
        $nota=$_POST['txtcalificacion'];
        $mensaje="";

        if($nota >=18){
            $mensaje="Excelente";
        }
        elseif($nota >=14) {
            $mensaje="Bueno";
        }
        elseif($nota >=11) {
            $mensaje="Regular";
        }
        elseif($nota<11){
            $mensaje="Deficiente";
        }

        echo"<div class='Resultado'>";
        echo"<div class='Nombre'><b>Nombre:</b>$nombre</div>";
        echo"<div class='Apellido'><b>Apellido:</b>$apellido</div>";
        echo"<div class='Calificacion'><b>Calificacion:</b>$nota</div>";
        echo"<div class='Mensaje'><b>Mensaje:</b>$mensaje</div>";
        echo"</div>";
    }
        
    ?>

    </div>
</body>
</html>
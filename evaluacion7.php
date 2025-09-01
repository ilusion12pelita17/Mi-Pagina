<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel</title>
 <link rel="stylesheet" href="examen1.css">
</head>
<body>

<div class="container">
    <h2>Realizar pago según el Nivel estudio:</h2>
    <form action="" method="post">
<label for="txtnom">Nombre</label>
<input type="text" name="txtnom" place holder="Escribe Nombre" required>

<select name="cboNivel" required>

<option value="primaria">Primaria</option>
<option value="secundaria">Secundaria</option>
<option value="tecnico">Técnico Superior</option>
<option value="superior">Superior</option>
</select>
<input type="submit" name="btncalcular" value="Calcular">
</form>

<?php

if(isset($_POST['btncalcular'])){

$nom=$_POST['txtnom'];
$nivel=$_POST['cboNivel'];
$costo=0;
if($nivel=="primaria"){
    $costo=80;
}
elseif($nivel=="secundaria"){
    $costo=100;
}
elseif($nivel=="tecnico"){
    $costo=120;
}
elseif($nivel=="superior"){
    $costo=150;
}
 echo "<div class'Resultado'>";
 echo "<div class='Nombre'>Nombre es:$nom </div>";
 echo "<div class='Costo'>Costo es:$costo </div>";

 echo "</div>";

}
?>


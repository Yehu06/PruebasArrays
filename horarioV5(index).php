<?php
require 'horarioV5(Funciones).php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
    <link rel="stylesheet" href="horario.css">
</head>
<body>

<table>
    <tr>
        <th colspan="6">Horario</th>
    </tr>

    <tr>
        <th></th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
    </tr>

    <?php
        crearTabla($horario,$colores,$horas);
    ?>

</table>
    
</body>
</html>

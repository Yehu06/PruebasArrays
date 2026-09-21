<?php

/*Esta version es practicamente igual que la V4 lo unico que cambia es que se ha solucionado el error de la condicion if que ahcia que se generase celdas sin que hubiese nada dentro. 
Ahora solo se generar las celdas que tienen asignaturas*/

$horario = [
    "Lunes" => [
        "IPE",
        "Servidor",
        "Servidor",
        "R",
        "Proyecto",
        "Despliegue",
        "Cliente",
        "Cliente"
    ],

    "Martes" => [
        "Cliente",
        "Cliente",
        "Interfaz",
        "R",
        "Interfaz",
        "Proyecto",
        "Despliegue",
        ""
        
    ],

    "Miercoles" => [
        "IPE",
        "Cliente",
        "Cliente",
        "R",
        "Interfaz",
        "Despliegue",
        "Despliegue",
        ""
    ],

    "Jueves" => [
        "Servidor",
        "Servidor",
        "Optativa",
        "R",
        "Sostenibilidad",
        "Optativa",
        "IPE",
        ""
    ],

    "Viernes" => [
        "Interfaz",
        "Optativa",
        "Optativa",
        "R",
        "Servidor",
        "Servidor",
        "Tutoria",
        ""
    ]
];



$horas = [
    "8:15-9:10",
    "9:10-10:05",
    "10:05-11:00",
    "11:00-11:30",
    "11:30-12:25",
    "12:25-13:20",
    "13:20-14:15",
    "14:15-15:00"
];

$colores = array(
  "Servidor"=>"#ADD8E6",
  "Cliente"=>"#90EE90",
  "Optativa"=>"#FFB6C1",
  "IPE"=>"#FFFACD",
  "Despliegue"=>"#FFDAB9",
  "Sostenibilidad"=>"#DDA0DD",
  "Tutoria"=>"#D3D3D3",
  "Interfaz"=>"#D2B48C",
  "Proyecto"=>"#F5F5F5",
  "R"=>"#0e0e0e9d"
);   



function crearTabla($horario, $colores, $horas)
{
    for($i = 0; $i <count($horas); $i++)
    {
        echo '<tr>';
        echo "<td style='background-color: #db5a5a;'>" .$horas[$i]. "</td>";

        foreach($horario as $dia => $clases)
        {
            $asignatura = $clases[$i];

            if($asignatura != "")
            {
                echo "<td style='background-color: " .$colores[$asignatura]. ";'>" . $asignatura. "</td>";
            }
        }

        echo '</tr>';
    }
}

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


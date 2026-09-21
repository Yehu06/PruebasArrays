<?php

/*Esta version es muy parecida a la anterior, lo unico que en vez de usar style hago un array asociativo donde guardas los colores (con el codigo hexadecimal) y luego se recorre el array asociativo con
un for each*/

$horario = [
    ["8:15-9:10",   "IPE",  "Cliente", "IPE",  "Servidor", "Interfaz"],
    ["9:10-10:05",  "Servidor", "Cliente", "Cliente", "Servidor", "Optativa"],
    ["10:05-11:00", "Servidor", "Interfaz", "Cliente", "Optativa", "Optativa"],
    ["11:00-11:30", "R", "R", "R", "R", "R"],
    ["11:30-12:25", "Proyecto", "Interfaz", "Interfaz", "Sostenibilidad", "Servidor"],
    ["12:25-13:20", "Despliegue", "Proyecto", "Despliegue", "Optativa", "Servidor"],
    ["13:20-14:15", "Cliente", "Despliegue", "Despliegue", "IPE",  "Tutoria"],
    ["14:15-15:00", "Cliente", "", " ", " ", ""]
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



function crearTabla($horario,$colores)
{
    for($i=0;$i<count($horario);$i++)   
            {
                echo '<tr>';
                for($j=0;$j<count($horario[$i]);$j++)
                    {
                        //echo '<td>'.$horario[$i][$j].'</td>';

                        if($j==0)
                            {
                                echo "<td style='" . "background-color: #db5a5a;" . "'>" . $horario[$i][$j]. "</td>";
                            }
                        //esto lo que hace es recorrer tood el array en vez de ir directamente al elemnto
                        foreach($colores as $asignatura => $color)
                        {
                            if($horario[$i][$j]==$asignatura)
                                {
                                    echo "<td style='" . "background-color: $color;" . "'>" . $horario[$i][$j]. "</td>";
                                }
                                
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
                crearTabla($horario,$colores);
            ?>
        
</table>
    
</body>
</html>

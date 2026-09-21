<?php

/*Esta version fue la primera de todas que simplemente se hace un array bidimensional ($horario) que se recorre con dos fors y para los colores se hace muy tedisoso que buscas el elemnto y si este era
el encontrado se cambiaba el color con un style*/

$horario = [
    ["8:15-9:10",   "IPE",  "Cliente", "IPE",  "Servidor", "Interfaz"],
    ["9:10-10:05",  "Servidor", "Cliente", "Cliente", "Servidor", "Optativa"],
    ["10:05-11:00", "Servidor", "Interfaz", "Cliente", "Optativa", "Optativa"],
    ["11:00-11:30", "R", "E", "CR", "E", "O"],
    ["11:30-12:25", "Proyecto", "Interfaz", "Interfaz", "Sostenibilidad", "Servidor"],
    ["12:25-13:20", "Despliegue", "Proyecto", "Despliegue", "Optativa", "Servidor"],
    ["13:20-14:15", "Cliente", "Despliegue", "Despliegue", "IPE",  "Tutoria"],
    ["14:15-15:00", "Cliente", "", " ", " ", ""]
];

function crearTabla($horario)
{
    for($i=0;$i<count($horario);$i++)   
            {
                echo '<tr>';
                for($j=0;$j<count($horario[$i]);$j++)
                    {
                        //echo '<td>'.$horario[$i][$j].'</td>';
                        if($horario[$i][$j]=="Servidor")
                        {
                            echo "<td style='" . "background-color: #D5F5E3;" . "'>" . $horario[$i][$j]. "</td>";
                        }
                        else if($horario[$i][$j]=="Cliente")
                            {
                                echo "<td style='" . "background-color: #F7CFE1;" . "'>" . $horario[$i][$j]. "</td>";
                            }
                            else if($horario[$i][$j]=="IPE")
                            {
                                echo "<td style='" . "background-color: #AEC6E8;" . "'>" . $horario[$i][$j]. "</td>";
                            }
                            else if($horario[$i][$j]=="Despliegue")
                            {
                                echo "<td style='" . "background-color: #FFD8B1;" . "'>" . $horario[$i][$j]. "</td>";
                            }
                            else if($horario[$i][$j]=="Optativa")
                            {
                                echo "<td style='" . "background-color: #FFF7AE;" . "'>" . $horario[$i][$j]. "</td>";
                            }
                            else if($horario[$i][$j]=="Interfaz")
                            {
                                echo "<td style='" . "background-color: #D9B48F;" . "'>" . $horario[$i][$j]. "</td>";
                            }
                            else if($horario[$i][$j]=="Proyecto" || $horario[$i][$j]=="Sostenibilidad" || $horario[$i][$j]=="Tutoria")
                            {
                                echo "<td style='" . "background-color: #D7BDE2;" . "'>" . $horario[$i][$j]. "</td>";
                            }
                            else if($horario[$i][$j]=="R" || $horario[$i][$j]=="E" || $horario[$i][$j]=="CR" || $horario[$i][$j]=="O")
                            {
                                echo "<td style='" . "background-color: #D6D6D6;" . "'>" . $horario[$i][$j]. "</td>";
                            }
                            else if($j==0)
                            {
                                echo "<td style='" . "background-color: #db5a5a;" . "'>" . $horario[$i][$j]. "</td>";
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
                crearTabla($horario);
            ?>
        
</table>
    
</body>
</html>

<?php
require_once 'funciones-aux.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej1 EPD3</title>
    <link rel="stylesheet" href="general.css">
</head>

<body>
    <h1>Ejercicio 1 <a href="">(reiniciar)</a></h1>
    <?php
    if(!isset($_POST['envio'])) {
        echo '<form action="" method="POST">';
        echo    '<input type="submit" name="envio" value="Ejecutar">';
        echo '</form>';
    }
    else {
        define('HORAS',8);
        $estimacion['afluencia'][HORAS];
        $estimacion['personal'][HORAS];

        for($i=0; $i<HORAS; $i++) {
            $estimacion['afluencia'][$i] = rand(1,150);
        }

        $estimacion['personal'] = estimarPersonalNecesario($estimacion['afluencia']);

        echo '<p>Análisis de personal de enfermería:</p>';
        echo '<table>';
        echo    '<tr>';
        echo        '<th>Hora</th>';
        echo        '<th>Estimación de afluencia</th>';
        echo        '<th>Estimación de personal</th>';
        echo        '<th>Ratio</th>';
        echo    '</tr>';

        for($i=0; $i<HORAS; $i++) {
            $ratio = $estimacion['afluencia'][$i] / $estimacion['personal'][$i];
            echo '<tr>';
            echo    '<td>'.($i+1).'</td>';
            echo    '<td>'.$estimacion['afluencia'][$i].'</td>';
            echo    '<td>'.$estimacion['personal'][$i].'</td>';
            echo    '<td>'.number_format($ratio,2,'.','').'</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</body>
</html>

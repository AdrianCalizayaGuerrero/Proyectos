<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrian Calizaya</title>
</head>
<body>
    
    <?php
        $edad = 18;

        if ($edad >= 18) {
            echo "Eres mayor de edad<br>";
        }
    ?>
    <br>
    <?php
        $puntuacion = 75;

        if ($puntuacion >= 70) {
            echo "Aprobado<br>";
        } else {
            echo "Reprobado<br>";
        }
    ?>
    <br>
    <?php
        $nota = 8.5;

        if ($nota >= 9 && $nota <= 10) {
            echo "Excelente<br>";
        } elseif ($nota >= 7 && $nota < 9) {
            echo "Notable<br>";
        } else {
            echo "Insuficiente<br>";
        }
    ?><br>
    <?php
        $dia = "martes";

        switch ($dia) {
            case "lunes":
                echo "Es un día laboral<br>";
                break;
            case "martes":
                echo "Es un día laboral<br>";
                break;
            case "miércoles":
                echo "Es un día laboral<br>";
                break;
            case "jueves":
                echo "Es un día laboral<br>";
                break;
            case "viernes":
                echo "Es un día laboral<br>";
                break;
            case "sábado":
                echo "Es fin de semana<br>";
                break;
            case "domingo":
                echo "Es fin de semana<br>";
                break;
            default:
                echo "Día no válido<br>";
        }
    ?><br>
    <?php

        for ($i = 1; $i < 11; $i++) {
            if ($i % 2 == 0) {
                echo "$i es Par<br>";
            } else {
                echo "$i es Impar<br>";
            }
        }
    ?>
    
    <a href="bucles.php">< Bucles</a>
    <a href="ej_general.php"> Ejercicio General ></a>
</body>
</html>
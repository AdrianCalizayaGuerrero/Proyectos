<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $estudiantes = [
            [
                "nombre" => "Adrian Calizaya",
                "edad" => 20,
                "calificaciones" => [90, 85, 88, 92]
            ],
            [
                "nombre" => "Christian Romero",
                "edad" => 22,
                "calificaciones" => [70, 65, 80, 75]
            ],
            [
                "nombre" => "Sergio Chaves",
                "edad" => 19,
                "calificaciones" => [50, 55, 60, 58]
            ]
        ];

        foreach ($estudiantes as $estudiante) {
            
            $promedio = array_sum($estudiante["calificaciones"]) / count($estudiante["calificaciones"]);
            
            if ($promedio >= 85) {
                $estado = "Aprobado con distinción";
            } elseif ($promedio >= 60) {
                $estado = "Aprobado";
            } else {
                $estado = "Reprobado";
            }
            
            echo "==============================<br>";
            echo "Nombre: " . $estudiante["nombre"] . "<br>";
            echo "Edad: " . $estudiante["edad"] . "<br>";
            echo "Promedio: " . number_format($promedio, 2) . "<br>";
            echo "Estado: " . $estado . "<br>";
            echo "==============================<br><br>";
        }
    ?>
    <a href="base.php"> Base ></a>
</body>
</html>
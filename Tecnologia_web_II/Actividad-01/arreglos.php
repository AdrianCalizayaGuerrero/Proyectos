<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrian Calizaya</title>
</head>
<body>
    <?php
        $frutas = ["Manzana", "Banana", "Naranja", "Uva"];
        echo "<p>La segunda fruta es: " . $frutas[1] . "</p><br>";
    ?>
    <?php
        $usuario = [
            "nombre" => "Juan Pérez",
            "edad" => 25,
            "ciudad" => "La Paz"
        ];
        echo "<p>La edad del usuario es: " . $usuario["edad"] . "</p><br>";
    ?>
    <?php
        $asignaturas = ["Matemáticas", "Programación", "Historia", "Física"];

        echo "<p>Mis asignaturas favoritas son:</p><br>";
        foreach ($asignaturas as $materia) {
            echo "<p>- $materia<br></p>";
        }
    ?>
    <?php
        $equipo = [
            ["nombre" => "Carlos", "posicion" => "Portero"],
            ["nombre" => "Luis", "posicion" => "Defensa"],
            ["nombre" => "Miguel", "posicion" => "Delantero"]
        ];

        echo "<p>Tercer jugador: " . $equipo[2]["nombre"] . " - " . $equipo[2]["posicion"] . "</p><br>";
    ?>
    <?php
        $colores = ["Rojo", "Verde", "Azul"];

        $colores[] = "Amarillo";
        $colores[] = "Morado";

        print_r($colores);
    ?>
    <br>
    <a href="variables.php">< Variables</a>
    <a href="bucles.php"> Bucles ></a>
</body>
</html>
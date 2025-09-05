<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrian Calizaya</title>
</head>
<body>
    <?php
        for ($i = 1; $i < 11; $i++) {
            echo $i . "<br>";
        }
    ?>
    <?php
        $contador = 1;

        while ($contador <= 5) {
            echo $contador . "<br>";
            $contador++;
        }
    ?>
    <?php
        $paises = ["Bolivia", "Argentina", "Chile", "Perú", "Brasil"];

        echo "<p>Lista de países:</p><br>";
        foreach ($paises as $pais) {
            echo "- $pais<br>";
        }
    ?>
    <?php
        echo "<p>Tabla de multiplicar del 7:</p><br>";
        for ($i = 1; $i <= 10; $i++) {
            echo "7 x $i = " . (7 * $i) . "<br>";
        }
    ?>
    <?php
        for ($i = 1; $i <= 20; $i++) {
            if ($i % 2 == 0) {
                echo "Par<br>";
            } else {
                echo $i . "<br>";
            }
        }
    ?>
    <a href="arreglos.php">< Arreglos</a>
    <a href="condicionales.php"> Condicionales ></a>
</body>
</html>
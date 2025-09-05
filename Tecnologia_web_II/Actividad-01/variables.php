<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrian Calizaya</title>
</head>
<body>
    <?php
        $cadena = "Esta es una variable de tipo cadena";
        $entero = 42;
        $flotante = 21.256;
        $booleano = true;

        echo "<p>Cadena: $cadena</p><br>";
        echo "<p>Entero: $entero</p><br>";
        echo "<p>Flotante: $flotante</p><br>";
        echo "<p>Booleano: " . ($booleano ? "true" : "false") . "</p><br>";
    ?>
    <?php
        $nombre = "Adrian";
        $apellido = "Calizaya";
        $nombre_completo = $nombre . " " . $apellido;
        echo "<p>Nombre completo: $nombre_completo</p><br>";
    ?>
    <?php
        $num1 = 15;
        $num2 = 7;

        $sum = $num1 + $num2;
        $res = $num1 - $num2;
        $multi = $num1 * $num2;
        $dvsn = $num1 / $num2;

        echo "Suma: $num1 + $num2 = $sum<br>";
        echo "Resta: $num1 - $num2 = $res<br>";
        echo "Multiplicación: $num1 * $num2 = $multi<br>";
        echo "División: $num1 / $num2 = $dvsn<br>";


        $cantidad = 100;
        echo "Valor inicial: $cantidad<br>";

        $cantidad = 250;
        echo "Nuevo valor: $cantidad<br>";

        $a = 5;
        $b = 10;

        echo "Valores iniciales: a = $a, b = $b<br>";

        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "Valores intercambiados: a = $a, b = $b<br>";
    ?>
    
    <a href="base.php">< Base</a>
    <a href="arreglos.php">Arreglos ></a>
</body>
</html>
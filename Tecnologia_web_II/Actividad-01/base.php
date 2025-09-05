<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrian Calizaya</title>
</head>
<body>
    <?php
        echo "<p>¡Hola Mundo desde PHP!</p>";
    
        // Esta línea imprime mi nombre completo
         echo '<p>Nombre: Adrian Calizaya,</p>' . PHP_EOL .
         /* 
        Estas líneas imprimen 
        mi edad y mi ciudad de residencia
        */
         '<p>Edad: 25 años</p>' . PHP_EOL .
         '<p>Ciudad: La Paz</p>';
    
        echo "Curso de PHP<br>";
        echo "Tema: Base<br>";
        echo "¡Empezamos a programar!<br>";
    ?>
    <?php
        $curso = "PHP Básico";
        echo "<p>Estás en el curso: " . $curso."</p>";
    ?>
    <a href="condicionales.php">< Condicionales</a>
    <a href="variables.php">Variables ></a>

</body>
</html>

<!-- https://awcgtecwebii.byethost31.com/TecWeb_II/Actividad-01/base.php -->
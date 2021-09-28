<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>

<body>
    
    <?php
        $base = 5;
        $altura = 3;
        $diagonalMayor = 6;
        $diagonalMenor = 3;
        $radio = 3;
        define("PI", 3.14159);

        echo "El triangulo de base $base  y altura $altura  tiene un area de ";
        echo ($base * $altura)/2;

        echo "<p>";
        echo "El cuadrado de base $base tiene un area de ";
        echo ($base * $base);

        echo "<p>";        
        echo "El rombo de diagonal mayor $diagonalMayor y diagonal menor $diagonalMenor tiene un area de ";
        echo ($diagonalMayor * $diagonalMenor);

        echo "<p>";
        echo "El circulo de radio $radio tiene un area de ";
        echo (PI*$radio*$radio);
    ?>
    
</body>
</html>
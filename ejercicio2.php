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
        define("PI", 3.14);

        echo "Area Triangulo = ";
        echo ($base * $altura)/2;

        echo "<p>";
        echo "Area Cuadrado = ";
        echo ($base * $altura);

        echo "<p>";        
        echo "Area Rombo = ";
        echo ($diagonalMayor * $diagonalMenor);

        echo "<p>";
        echo "Area Circulo = ";
        echo (PI*$radio*$radio);
    ?>
    
</body>
</html>
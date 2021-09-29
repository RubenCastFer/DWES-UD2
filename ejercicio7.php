<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $var1 = 1;
        $var2 = 3;

        printf( "El valor en binario de la variable 1 es %b",$var1);
        echo"<p>";
        printf( "El valor en binario de la variable 2 es %b",$var2);
        echo"<p>";
        printf("El resultado de comparacion bit a bit AND es %b", $var1&$var2);
        echo"<p>";
        printf("El resultado NOT de la variable 1 es %b", ~$var1);
        echo"<p>";
        printf("El resultado NOT de la variable 2 es %b", ~$var2);
        echo"<p>";
        printf("El resultado de comparacion bit a bit OR es %b", $var1|$var2);
        echo"<p>";
        printf("El resultado de comparacion bit a bit XOR es %b", $var1^$var2);
        
    ?>
</body>
</html>
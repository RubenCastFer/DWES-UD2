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
        $var = "5";
        echo"<p>";

        echo "valor de la variable $var";
        echo"<p>";
        echo "Es un valor de tipo float: " ,var_export(is_integer($var));
        echo"<p>";
        echo "Es un valor de tipo string: ", var_export(is_object($var));
        echo"<p>";

        $var = 1.5;
        echo"<p>";
        echo "cambiamos el valor de la variable por $var";
        echo"<p>";

        echo "El tipo de dato es ", gettype($var);
        echo"<p>";
        echo "Es un valor de tipo float: " ,var_export(is_float($var));
        echo"<p>";
        echo "Es un valor de tipo string: ", var_export(is_string($var));
        echo"<p>";
        settype($var, "integer");
        echo"<p>";
        echo "forzamos a integer a 1.5, $var";
        echo"<p>";

        $var2 = "76fpaejpfiajef6a";
        settype($var2, "integer");
        echo "Forzamos una cadena con que empieza con numeros y continua con letras y no sale $var2";
        echo"<p>";


    ?>
</body>
</html>
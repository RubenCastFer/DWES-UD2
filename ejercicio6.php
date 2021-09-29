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
        $numeroOperacionesDiarias = "8";
        $numeroOperacionesSemanales = 20;
        define("MAXIMO_OPERACIONES_DIARIAS", 6);
        define("MAXIMO_OPERACIONES_SEMANALES", 30);

        
        echo "El valor de operaciones diarias es mayor o igual que el máximo. ",var_export( $numeroOperacionesDiarias>=MAXIMO_OPERACIONES_DIARIAS);
        echo"<p>";
        echo "El valor de operaciones semanales es mayor o igual que el máximo.",var_export( $numeroOperacionesSemanales>=MAXIMO_OPERACIONES_SEMANALES);
        echo"<p>";
        echo "El valor de operaciones diarias es identico al máximo.", var_export( $numeroOperacionesDiarias===MAXIMO_OPERACIONES_DIARIAS);
        echo"<p>";
        echo "El valor de operaciones diarias es distinto al de operaciones semanales.", var_export( $numeroOperacionesSemanales!=MAXIMO_OPERACIONES_SEMANALES);

    ?>
</body>
</html>
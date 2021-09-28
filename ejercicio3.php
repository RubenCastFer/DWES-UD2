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
        $precioDelPantalon = 29.99;
        $numeroDePantalonesComprados = 3;
        $precioDeLaCamisa = 25.99;
        $numeroDeCamisasCompradas = 2;

        define("descuento",8);

        echo "El precio de un pantalón es de $precioDelPantalon ";
        echo "<p>";
        echo "El precio de una camisa es de $precioDeLaCamisa";
        echo "<p>";
        $total = $precioDelPantalon * $numeroDePantalonesComprados + $precioDeLaCamisa * $numeroDeCamisasCompradas; 
        echo "El total sin descuento es de $total ";

        $totalConDescuento = $total - $total * descuento/100;
        $totalConDescuento = round($totalConDescuento, 2);
        echo "<p>";
        echo "El total con descuento es de $totalConDescuento";
    ?>

</body>
</html>
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

        $precioDeZapatos = 45.99;
        $descuentoEspecialZapateria = 12;

        define("DESCUENTO",8);

        echo "El precio de un pantalón es de $precioDelPantalon ";
        echo "<p>";
        echo "El precio de una camisa es de $precioDeLaCamisa";
        echo "<p>";
        $total = $precioDelPantalon * $numeroDePantalonesComprados + $precioDeLaCamisa * $numeroDeCamisasCompradas; 
        echo "El total sin descuento es de $total ";
        echo "<p>";
        echo "El precio de los zapatos sin descuento es de $precioDeZapatos";
        echo "<p>";
        $descuentoEspecialZapateria /=100;
        
        
        $zapatosConDescuentos=$precioDeZapatos; 
        $zapatosConDescuentos*=$descuentoEspecialZapateria;

        $precioDeZapatos-=$zapatosConDescuentos;
        $precioDeZapatos = round($precioDeZapatos, 2);
        echo "El precio de los zapatos con descuento es de $precioDeZapatos";

        $totalConDescuento = $total - $total * DESCUENTO/100;
        $totalConDescuento = round($totalConDescuento, 2);
        echo "<p>";
        echo "El total con descuento es de $totalConDescuento";

        $totalConDescuento+=$precioDeZapatos;
        echo "El total con descuento es de $totalConDescuento";

    ?>

</body>
</html>
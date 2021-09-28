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
        $var1;
        $var2;
        $var3;
    ?>
<h3>Operación AND</h3>

    <table border="1">
        <tr>
            <td>Variable 1</td>
            <td>Variable 1</td>
            <td>Variable 1</td>
            <td>Resultado</td>
        </tr>
        <?php
        $var1 = true;
        $var2 = true;
        $var3 = true;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 && $var2 && $var3)?></td>
        </tr>

        <?php
        $var1 = true;
        $var2 = true;
        $var3 = false;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 && $var2 && $var3)?></td>
        </tr>

        <?php
        $var1 = true;
        $var2 = false;
        $var3 = true;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 && $var2 && $var3)?></td>
        </tr>

        <?php
        $var1 = true;
        $var2 = false;
        $var3 = false;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 && $var2 && $var3)?></td>
        </tr>

        <?php
        $var1 = false;
        $var2 = true;
        $var3 = true;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 && $var2 && $var3)?></td>
        </tr>

        <?php
        $var1 = false;
        $var2 = true;
        $var3 = false;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 && $var2 && $var3)?></td>
        </tr>

        <?php
        $var1 = false;
        $var2 = false;
        $var3 = true;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 && $var2 && $var3)?></td>
        </tr>

        <?php
        $var1 = false;
        $var2 = false;
        $var3 = false;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 && $var2 && $var3)?></td>
        </tr>
    </table>


</br>
<h3>Operación OR</h3>
    <table border = "1">
    <tr>
            <td>Variable 1</td>
            <td>Variable 1</td>
            <td>Variable 1</td>
            <td>Resultado</td>
        </tr>
       
       <?php
        $var1 = true;
        $var2 = true;
        $var3 = true;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 || $var2 || $var3)?></td>
        </tr>

        <?php
        $var1 = true;
        $var2 = true;
        $var3 = false;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 || $var2 || $var3)?></td>
        </tr>

        <?php
        $var1 = true;
        $var2 = false;
        $var3 = true;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 || $var2 || $var3)?></td>
        </tr>

        <?php
        $var1 = true;
        $var2 = false;
        $var3 = false;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 || $var2 || $var3)?></td>
        </tr>

        <?php
        $var1 = false;
        $var2 = true;
        $var3 = true;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 || $var2 || $var3)?></td>
        </tr>

        <?php
        $var1 = false;
        $var2 = true;
        $var3 = false;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 || $var2 || $var3)?></td>
        </tr>

        <?php
        $var1 = false;
        $var2 = false;
        $var3 = true;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 || $var2 || $var3)?></td>
        </tr>

        <?php
        $var1 = false;
        $var2 = false;
        $var3 = false;
        ?>
        <tr>
            <td><?php var_export($var1)?></td>
            <td><?php var_export($var2)?></td>
            <td><?php var_export($var3)?></td>
            <td><?php var_export($var1 || $var2 || $var3)?></td>
        </tr>
    </table>
    
</body>
</html>
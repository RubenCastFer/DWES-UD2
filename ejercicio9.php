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
        print "<p>\$_SERVER[PHP_SELF]:$_SERVER[PHP_SELF]</p>\n";
        print "<p>\$_SERVER[SERVER_ADDR]:$_SERVER[SERVER_ADDR]</p>\n";
        print "<p>\$_SERVER[SERVER_NAME]:$_SERVER[SERVER_NAME]</p>\n";
        print "<p>\$_SERVER[DOCUMENT_ROOT]:$_SERVER[DOCUMENT_ROOT]</p>\n";
        print "<p>\$_SERVER[REMOTE_ADDR]:$_SERVER[REMOTE_ADDR]</p>\n";
        print "<p>\$_SERVER[REQUEST_METHOD]:$_SERVER[REQUEST_METHOD]</p>\n";

        $a = "Global";
        

        function prueba(){
            global $a;
            static $b = "Estatica";
            $c = "Local";   
            
        echo"<p>";
        echo "llamada por la funcion $b";
        echo"<p>";
        echo "llamada por la funcion $c";

        }
        
        echo $a;
        echo"<p>";
        echo $b;
        echo"<p>";
        echo $c;
        echo"<p>";
        echo prueba();

      
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
        $i = 10;
        $nome = "Zoio";
        $falso = FALSE;
        $valor = 10.50;
        //$valor = "Ah não, bixo";
        echo "$valor" . " seu tipo " . gettype($valor);
        echo "</br>is_string " . is_string($valor);
        echo "</br>isset " . isset($valor);
        var_dump($valor);
        echo (int)$valor;
        echo "\"PHP esquisito\""
        ?>
    </body>
</html>
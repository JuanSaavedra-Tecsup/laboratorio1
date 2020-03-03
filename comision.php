<html>
    <head>
        <title>Resultado de ejercicio A PHP</title>
    </head>
    <body>

        <p>Resultado de ejercicio A PHP</p>
        </br>
        <?php
        $valor1 = $_POST['V1'];

        if($valor1<=150){
            echo "su venta es $valor1";
            echo"<br>";
            echo " no recibe comision";
        }elseif($valor1>150 and $valor1<=400){
            $comision= $valor1 * 0.1;
            echo "su venta es $valor1";
            echo"<br>";
            echo " su comision es $comision";
        }elseif($valor1>400){
            $comision = ($valor1*0.09)+50;
            echo "su venta es $valor1";
            echo"<br>";
            echo "la comision es $comision";
        }

        ?>
    </body>
</html>
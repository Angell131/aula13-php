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
        echo "<h2>Variables y constantes</h2>";
        $ciudad="madrid";
        define("dato","un dato de ejemplo");
        echo "la constante dato es " .dato;
        $numero=5;
        $numero++;
        echo "<p>El numero es ". $numero."</p>";
        echo "<p>El numero es ". $numero++."</p>";//valor sera 7 pero pinta 6
        echo "<p>El numero es ". ++$numero."</p>";//se incrementa y luego se pinta. valor 8
        echo "<hr>";
        echo "<h3>Operadores</h3>";
        $numero1=10;
        $numero2=15;
        if($numero1>=$numero2) {
            echo "<p>el primer numero es mayor</p>";
        }
        else {
            echo "<p>el primer numero es menor</p>";
        }
        $aprobado=true;
        if($aprobado) {
            echo "<p>has aprobado</p>";
        }else{
            echo "<p>NA: no apto</p>";
        }
        $nota="8";
        if($nota==8){//comparacion de dato
            echo "<p>tu nota es un 8 - notable</p>";
        }else{
            echo "<p>tu nota no es un 8</p>";
        }
        $nota="8";
        if($nota===8){//comparacion dato y tipo
            echo "<p>tu nota es un 8 - notable</p>";
        }else{
            echo "<p>tu nota no es un 8</p>";
        }
        echo "<hr>";
        echo "<h3>estructuras de control</h3>";
        for($i=0;$i<=10;$i++) {
            echo $i."-";
        }
        echo "<br>";
        $a=0;
        while($a<=10) {
            echo $a++."--";
        }
    ?>
</body>
</html>
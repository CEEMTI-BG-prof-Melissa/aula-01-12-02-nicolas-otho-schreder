<html>
    <head>
        <title>Aula 05 PHP</title>
    </head>
    <Body>
        <?php
            $n1 = 2;
            $n2 = $_GET["x"];
               
            echo "Os numeros são $n1 e $n2 .<br> ";
            echo "O valores absolutos de $n1 é: " .abs($n1);
            echo "<br><br> Os valores $n2 <sup>$n1</sup> é igual a: " .pow($n2,$n1);
            echo "<br><br> A raiz quadrada de $n2 é:  " .sqrt($n2);
            echo "<br><br> O valor arredondado de $n2 é: " .round($n2);
            echo "<br> O valor arredondado de $n2 é: " .ceil($n2);
            echo "<br> O valor arredondado de $n2 é: " .floor($n2);


            echo "<br><br><br>";
            echo "A parte inteira de $n2 é igusl a: " .intval($n2);
            
            echo "<br><br>";
            echo "Um pirulito custa R$:" .number_format($n1, 2);

        ?>
    </Body>
</html>

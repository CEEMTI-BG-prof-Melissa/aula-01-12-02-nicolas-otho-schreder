<html>
    <head>
        <title> Aula 03 PHP</title>
    </head>
    <body>
        <?php
            $nome1="Nicolas Otho Schreder ";
            $numero1=35;
            $numero2=32;

            $soma=$numero1+$numero2;

            echo "Meu nome é: ".$nome1;
            echo "<br> nome é $nome1 ";

            echo "<br><br> A soma do $numero1 e $numero2 é igual a: $soma";
            echo "<br> A subtraçao dos numeros $numero1 e $numero2 é igual a: " .($numero1-$numero2);
            echo "<br> A multiplicaçao dos numeros $numero1 e $numero2 é igual a: " .($numero1*$numero2);
            echo "<br> A multiplicaçao dos numeros $numero1 e $numero2 é igual a: " .($numero1/$numero2);
            echo "<br> O resto da divisao dos numeros $numero1 e $numero2 é igual a: " .($numero1%$numero2);

        ?>
    </body>
</html>

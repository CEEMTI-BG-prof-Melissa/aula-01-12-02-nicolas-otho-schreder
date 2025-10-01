<html>
       <title>Aula 06 PHP</title>
    </head>
    <Body>
       <head>
      <h3>Operadores de Atribuição</h3>
        <hr>
        <?php

        $a=2;
        $b=$a+5;
        echo"A é igual a $a e B é igual a $b.";
        echo"<br><br>";

        $a=$a+3;
        echo"Agora A é igual a $a.";
        echo"<br><br>";

        $b+=8;
        echo"Agora B é igual a $b.";
        echo"<br><br>";

        $b-=5;
        echo"Agora B é igual a $b.";

        echo"<hr>";

        $b*=2;
        echo"O valor de B multiplicado por 2 é igual a $b.";
        echo"<br><br>";

        $b/=10;
        echo"O valor de B dividido por 10 é igual a $b.";
        echo"<br><br>";

        $b%=3;
        echo"O resto do valor de B dividido por 3 é igual a $b.";
        echo"<br><br>";

        $b.=10;
        echo"O valor de B concatenado é igual a $b.";

        ?>
    </Body>
</html>

<?php
    $a=23;
    $b="pepe";
    //probando el operador ++;
        print_r("Probando el operador ++");
        echo ++$a;
        echo "<br>";
        echo ++$a*2;
        echo "<br>";
        //Con ++ podemos incrementar el valor de la variable en 1 o 
        echo ++$b;
        echo "<br>";
        echo ++$b*2;
        echo "<br>";
    //probando el operador --;
        print_r("Probando el operador --");
        echo "<br>";
        echo --$a*2;
        $b="pepe";
        echo "<br>";
        $b="pepe";
        echo "<br>";
    //probando el operador +=n;
    //Suma a la variable lo que se pase por "n"
        print_r("Probando el operador +=n");
        echo "<br>";
        echo $a+=5;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a+=5;
        echo "<br>";
        echo 2*$a;
        echo "<br>";
        echo $b+=5;
        echo "<br>";
        echo $b;
        echo "<br>";
        echo 2*$b+=5;
        echo "<br>";
        echo 2*$b;
        echo "<br>";
    //probando el operador –=n;
    //Resta a la variable lo que se pase por "n"
        print_r("Probando el operador -=n");
        echo "<br>";
        echo $a-=5;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a-=5;
        echo "<br>";
        echo 2*$a;
        echo "<br>";
        echo $b-=5;
        echo "<br>";
        echo $b;
        echo "<br>";
        echo 2*$b-=5;
        echo "<br>";
        echo 2*$b;
        echo "<br>";
    //probando operadores de post-incremento;
        print_r("Probando el operadores de post-incremento");
        echo "<br>";
        echo $a++;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a++;
        echo "<br>";
        echo 2*$a;
        echo "<br>";
        echo $a--;
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a--;
        echo "<br>";
        echo 2*$a;
        //En estas operaciones se incrementa y se resta con el operador
?>
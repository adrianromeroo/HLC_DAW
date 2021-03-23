<?php
    # determinando el tipo de variable
    $a1=347; //Muestra el numero completo
    $a2=2147483647; //Escribe el numero entero
    $a3=-2147483647; //Muestra el numero completo
    $a4=23.7678; //Redondea y muestra la parte entera sin decimales
    $a6="347"; //Se parsea el string a int y muestra el numero
    $a8="Solo literal"; //Cadena muestra un 0
    $a9="12.3 Literal con número"; //ES una cadena con numeros pues muestra el numero
    $a10=""; //Cadena vacia muestra un 0
    
    #forzando los tipos
    echo ((float)$a1),"<br>";
    echo ((double)$a2),"<br>";
    echo ((float)$a3),"<br>";
    echo ((integer)$a4),"<br>";
    echo ((int)$a6),"<br>";
    echo ((int)$a8),"<br>";
    echo ((double)$a9),"<br>";
    echo ((int)$a10),"<br>";
 
?> 
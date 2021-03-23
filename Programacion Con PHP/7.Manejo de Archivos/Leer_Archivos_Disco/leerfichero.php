<?php

    //Mirar el fichero de ayuda de fopen()
    $file = fopen ('fichero.txt', 'r');
    //para leer lo guardado en $file es necesario recorrela con un bucle carácter a carácter
    while(!feof($file))
    {
        echo  fgetc($file); 
    }
    //cerramos el apuntador al fichero
    fclose($file);

    //Otra forma de leer el fichero de golpe
    //Comenta la parte anterior del script y prueba esta
    $file = file_get_contents('fichero.txt');
    print_r($file);

 ?>
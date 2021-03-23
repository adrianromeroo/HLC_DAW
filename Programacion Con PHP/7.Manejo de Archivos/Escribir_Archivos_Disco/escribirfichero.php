<?php

    //Mirar el fichero de ayuda de fopen()
    $file = fopen ('fichero.txt', 'w');
    fwrite($file, "Añadido 1 ");
    fwrite($file,"Añadio 2");
    //para leer lo guardado en $file es necesario recorrela con un bucle carácter a carácter
    //cerramos el apuntador al fichero
    fclose($file);

    //Comenta la parte anterior de código para probar otra forma de escribir en ficheros
    file_put_contents('fichero.txt', "Estoy escribiendo un fichero");


 ?>
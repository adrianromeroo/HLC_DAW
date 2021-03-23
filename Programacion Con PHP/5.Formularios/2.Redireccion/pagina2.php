<?php
    echo "pagina 2";
    //Aquí podemos recoger los parámetros. Descomenta la siguiente línea y comenta el header
    //print_r($_GET);
    sleep(2);
    header("location: pagina3.php");
?>
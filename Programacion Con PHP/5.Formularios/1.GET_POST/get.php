<?php
    //La siguiente instrucción nos formatea las salidas
    echo "<pre>";
    //Mostramos por pantalla el contenido del array $_GET
    print_r($_GET);
    echo "<br>";
    //Mostreamos por pantalla un elemento concreto del array $_GET
    print_r($_GET['usuario']);

    //--------------Ahora con el método PSOT----------------------
    /*
    echo "<pre>";
    print_r($_POST);
    echo "<br>";
    print_r($_POST['usuario']);
    */
?>
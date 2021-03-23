<!-- empezaríamos incluyendo el fichero que contiene 
	    las funciones. No escribiría nada hasta que las
	    funciones que contiene no fueran invocadas //-->
<?php include("ejemplo2.inc") ?>
<!-- Insertaremos un script PHP que invoque
	    la función encabezado. Debe llevar las etiquetas
	    de apertura y cierre <? y ?> de PHP   //-->
<?php Encabezado() ?>
<!-- Insertaremos cídigo HTML
	       según nuestra conveniencia   //-->
Aquí iría el contenido de la página<br>
.... esto es texto HTML................<br>
...........................<br><br><br>
<!-- Incluimos el fichero ejemplo1.inc y dado que no contiene
	    ninguna función, insertará aquí todo su contenidos //-->
<?php include("ejemplo1.inc") ?>
<!-- Insertaremos más codigo  HTML -->
....................<br>
...........................<br><br><br>
<!-- Incluimos nuevamente el fichero ejemplo1.inc  Puede repetirme
	    la inclusión porque no contiene funciones
	    si las contuviera habría un conflicto de duplicidad
	    porque una funcion no puede estar definida dos veces
	    con el mismo nombre. La instrucción include
	    como en todos los casos deberá ir dentro de un script PHP
	    y por tanto entre <? y ?> //-->
<?php include("ejemplo1.inc") ?>
<!-- Ahora ejecutaremos la funcion PHP Calcula() pasando como
	    parámetros 7 y 9. El return de la función nos devolverá
	    el resultado que imprimiremos aquí //-->

<?php print "Aquí va el resultado de la multiplicación: " . Calcula(7, 9); ?>
<!-- Por último invocaremos la función Pie() -->
<?php Pie() ?>
<?php

  
  # Conexión a la base de datos
  $conn = mysqli_connect( 'localhost', 'pruebas', 'pruebas', 'PRUEBAS');



  # Sentencia para borrar registros de la base de datos
  $delete = "delete from users where id = 1";

  # ejecutamos la sentencia contra la base de datos PRUEBAS
  $return = mysqli_query( $conn, $delete);

  # Mostramos el resultado por pantalla
  print_r( $return);

  # Cerramos la conexión
  mysqli_close( $conn);
  ?>
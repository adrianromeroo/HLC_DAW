<?php

  echo "<pre>";
  # Conexión a la base de datos
  $conn = mysqli_connect( 'localhost', 'pruebas', 'pruebas', 'PRUEBAS');

  # Sentencia para leer los registros de la tabla users
  $sql = "Select id, name, email, created From users";

  # Ejecutamos la consulta a la base de datos PRUEBAS
  $result = mysqli_query( $conn, $sql);
  # Recogemos el primer registro de la tabla
  $rows = mysqli_fetch_array( $result, MYSQLI_BOTH);

  # Lo imprimimos por pantalla
  print_r ( $rows);

  # Recorremos el array de registros hasta el final
  do {
    $data[] = $rows;
  }while ( $rows = mysqli_fetch_array( $result, MYSQLI_BOTH));

  # Mostramos por pantalla el array donde hemos guardado los registros
  print_r ( $data);

  # Cerramos la conexión
  mysqli_close( $conn);

  //MYSQLI_BOTH creará un único array con los atributos de ambas dos. 
  //MYSQLI_NUM mientras que con MYSQLI_NUM se comportará exactamente igual que la función mysqli_fetch_row()
  //MYSQLI_ASSOC esta función se comportará de manera idéntica a mysqli_fetch_assoc()

  ?>
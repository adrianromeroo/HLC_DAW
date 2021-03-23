<?php
  
  echo "<pre>";
  print_r ( $_POST);

  print_r ( $_FILES);

  echo dirname( __FILE__);

  move_uploaded_file( $_FILES["fichero"]["tmp_name"], dirname( __FILE__) . "/ficheros/" . $_FILES["fichero"]["name"]);
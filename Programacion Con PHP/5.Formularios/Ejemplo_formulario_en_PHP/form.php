<?php
  
  echo "<pre>";
  print_r ( $_POST);

  $nombre = $_POST['nombre'];
  $email = $_POST['email'];

  echo $nombre . "<br>";
  echo $email;
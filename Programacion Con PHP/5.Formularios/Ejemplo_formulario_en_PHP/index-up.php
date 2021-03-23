<!DOCTYPE html>
<html>
<head>
  <title>Formulario ejemplo</title>
</head>
<body>
  <br>
  <h3>Ejemplo de formulario</h3>
  <form action="form-up.php" method="post" enctype="multipart/form-data">
    
    Nombre:
    <input type="text" id="nombre" name="nombre"><br>
    Email
    <input type="text" id="email" name="email">
    <br>
    <input type="file" name="fichero">
    <br><br>
    <input type="Submit" id="btn_enviar" name="btn_enviar" value=" Enviar ">

  </form>

</body>
</html>
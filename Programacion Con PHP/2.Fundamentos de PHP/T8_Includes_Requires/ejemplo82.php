<?php include_once("ejemplo2.inc") ?>
<?php Encabezado() ?>
<?php include_once("ejemplo1.inc") ?>
<?php Pie() ?>

Lista de fichero utilizados por include
<?php
$z = get_included_files();
foreach ($z as $clave => $valor) {
  echo "Clave: ", $clave, "  Valor: ", $valor, "<br>";
};
?>
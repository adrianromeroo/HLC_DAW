<?php
echo "<pre>";
$f = "09/10/2018";
//formateamos la fecha a modo americano
$fecha = date("Y-m-d",strtotime($f));
echo $fecha . "\n"; 
//obtenemos el último día del mes actual
echo date("Y-m-t") . "\n";
print_r(getdate(time())) . "\n";

echo time() . "\n";

print_r(localtime(time())) ."\n";

//Para hacer sumas y restas a las fechas es necesario ponerlas en formato americano
$date_n = "2018/10/09";
$date_futuro = strtotime("+ 30 day", strtotime($date_n));
$date_futuro = date('d-m-Y', $date_futuro);
echo $date_futuro . "\n";

//Podemos añadir a la fecha también la hora
echo date("d/n/Y H:i:s") . "\n";
?>
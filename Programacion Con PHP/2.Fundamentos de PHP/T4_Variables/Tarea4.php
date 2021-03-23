
<?php
$variable = 20;
echo "El valor es: ".$variable."<br>";
$variable = 21;
echo "El nuevo valor es: ".$variable."<br>";

function variables(){
    $variable = 22;
    echo("Valor de la variable de la funcion variables ".$variable."<br>");
}

#Llamo a la funcion para mostrar el contenido de la variable
variables();

#Vuelvo a imprimir la varibale y compruebo que no ha cambiado el valor ya que la modificacion esta dentro de ua funcion
echo "Volvemos a mostrar el valor: ".$variable."<br>";

?>
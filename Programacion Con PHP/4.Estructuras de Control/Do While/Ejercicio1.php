<?php
$filas = 5; $columnas = 3;
# insertemos la etiqueta de apertura de la tabla
print("<table border=2 width=400 align=center>");
# un primer while rojo utilizando como condición que filas sea mayor que cero
# en este caso, la variable tendrá que disminuyendo su valor con $filas--
# para escribir las etiquetas  y  
# y el modificador de la variable filas
# y un segundo while (magenta) para insertar las etiquetas correspondientes
# a las celdas de cada fila

do {
	echo "<tr>";
	$filas--;
	do {
		echo "<td>";
		print "fila: " . $filas . " columna: " . $columnas;
		print("</td>");
		$columnas--;
	} while ($columnas > 0);
	/* muy importante tendremos que reasignar a la variable columnas
      su valor inicial para que pueda ser utilizado en la proxima fila
	  ya que el bucle (magenta) va reduciendo ese valor a cero
	  y en caso de no restaurar el viejo valor no volvería a ejecutarse
	  ya que no cumple la condición de ser mayor que cero */
	$columnas = 3;
	echo "</TR>";
} while ($filas > 0);
# por ultimo la etiqueta de cierre de la tabla
print "</table>";
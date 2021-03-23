<?php
$filas = 5; $columnas = 7; $numeros = 0;

print ("<table border=1 width=400 align=center>");
for ($i=0; $i < $filas; $i++) { 
    echo "<tr>";
    for ($f=0; $f < $columnas; $f++) { 
        echo "<td>";
        $numeros++;
		print ($numeros);
		print ("</td>");
    }
    echo "</tr>";   
}
    echo"</table>"; 
?>
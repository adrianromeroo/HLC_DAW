<?php
$filas = 1; $columnas = 6;

print ("<table border=1 width=400 align=center>");
for ($i=0; $i < $filas; $i++) { 
    echo "<tr>";
    for ($f=0; $f < $columnas; $f++) { 
        $n_random = rand(1,49);
        echo "<td>";
		print ($n_random);
		print ("</td>");
    }
    echo "</tr>";   
}
    echo"</table>"; 
?>
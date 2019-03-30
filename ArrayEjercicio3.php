<?php

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

sort($valores);

echo "<h3>Los 3 menores</h3>";  

for($i=0; $i<= 3; $i++) {
    echo $valores[$i] . ", ";
}

rsort($valores);

echo "<h3>Los 3 mayores</h3>";  

for($i=0; $i<= 3; $i++) {
    echo $valores[$i] . ", ";
}

?>
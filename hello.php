<?php
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Boolean
$a = true; 
$b = false; 
echo 'Boolean:';
echo '</br>';
echo $a;
echo '</br>';
echo $b;

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Integer
$c = -123;
$d = 0;
$e = 7763;
echo '</br></br>Integer:';
echo '</br>';
echo $c;
echo '</br>';
echo $d;
echo '</br>';
echo $e;

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Float o Double
$f = 12.24; 
$g = 1.5e3; 
$h = 7E-10;
echo '</br></br>Double:';
echo '</br>';
echo $f;
echo '</br>';
echo $g;
echo '</br>';
echo $h;

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//String
$i = "Hola"; 
$j = "Mundo"; 
echo '</br></br>String:';
echo '</br>';
echo $i;
echo '</br>';
echo $j;

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Array
$array1 = array(
    "curso1" => "php",
    "curso2" => "js",
);
// a partir de PHP 5.4
$array2 = [
    "curso1" => "php",
    "curso2" => "js",
];
// índices numéricos
$array3 = [
    "php",
    "js",
];

echo '</br></br>Array:';
echo '</br>';
print_r($array1);
echo '</br>';
print_r($array2);
echo '</br>';
print_r($array3);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Object
class Car
{
    function move()
    {
        echo "Going forward..."; 
    }
}

$myCar = new Car();
echo '</br></br>Object:';
echo '</br>';
echo $myCar->move();

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Variable que guarda un callable
$firstOfArray = function(array $array) {
    if (count($array) == 0) { return null; }
    return $array[0];
};

// Este es nuestro arreglo
$values = [3, 2, 1];

// Usamos nuestro callable y se imprime el valor 3
echo '</br></br>Callable:';
echo '</br>';
echo $firstOfArray($values);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Iterable
//A partir de PHP 7.1 iterable es un pseudo tipo de datos que puede ser recorrido.
function foo(iterable $iterable) {
    foreach ($iterable as $valor) {
        // ...
    } 
}
?>
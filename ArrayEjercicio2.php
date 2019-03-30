<?php 

$arreglo = [
    'Mexico' => [
      'Monterrey', 'Queretaro', 'Guadalajara'
    ],
    'Colombia' => [
      'Bogota', 'Cartagena', 'Medellin'
    ],
    'Peru' => [
      'Lima', 'Arequipa', 'Cuzco'
    ],
    'Argentina' => [
      'Buenos Aires', 'Rosario', 'Mar de Plata'
    ],
    'Venezuela' => [
      'Caracas', 'Valencia', 'Maracay'
    ]
  ];

echo "<h3>Ejercicio 2</h3>";  

foreach ($arreglo as $pais => $ciudades) {
	echo "<br>El pais $pais de tiene como ciudades a ";
	foreach ($ciudades as $valor){
		echo "$valor ";
	}	
}
echo "<br>";
echo "<hr>";

?>
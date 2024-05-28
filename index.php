<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo "¡hola, soy un script de PHP! <br>" ;

$edad = 18;
if($edad >= 18){
    echo "Eres mayor de edad.";
} else {
    echo "Eres menor de edad.";
}


$indice = 0;
while ($indice < 30 ){
    echo '<p>Vuelta:' . ++$indice . '</p>';
}

$numero = 1;


do {

    echo "Número: $numero <br>";

$numero++;

} while ($numero <= 10);

for ($i = 1; $i <=10 ;  $i++) {
    echo "Numero: $i <br>";
}


$frutas = array("Manzana", "Banana", "Cereza", "Durazno");

foreach ($frutas as $fruta) {

    echo "Fruta: $fruta <br>" ;
}

$dia = 3;
switch ($dia) {

case 1:
    echo "Hoy es Lunes <br>";
    break;

case 2:
    echo "Hoy es Martes <br>";
    break;

case 3:
    echo "Hoy es Miércoles <br>";
    break;

case 4:
    echo "Hoy es Jueves <br>";
    break;

case 5:
    echo "Hoy es Viernes <br>";
    break;

case 6:
    echo "Hoy es Sábado <br>";
    break;

case 7:
    echo "Hoy es Domingo <br>";
    break;

default:
    echo "Número de día no válido <br>";
    break;
    }

    function saludar($nombre) {
        echo "¡Hola, $nombre!";
        }
        saludar("María");

?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   echo "Ejercicio 1 <br> ";
   
   $puntaje = 75 ;
   if ($puntaje >=90){
    echo "Tu clasificación es A <br>";

   }
   else if($puntaje >=80 && $puntaje <=89 ){
    echo "Tu clasificación es B <br>";
   }
   else if($puntaje >=70 && $puntaje <=79 ){
    echo "Tu clasificación es C <br>";
   }
   else {
    echo "Tu calificacion es F <br>";
   }
  
   echo "<br> Ejercicio 2 <br>";
   
   $hora = 11;

   if ($hora <12){
    echo "Buenos Días<br>";

   }
   else if($hora >=12 && $hora <=18 ){
    echo "Buenas Tardes <br>";
   }
   else {
  echo"Buenas Noches <br>";

   }
   
   echo"<br> Ejercicio 3 <br>";
   $edad = 21;

   if ($edad <18){
    echo "Eres menor de edad <br>";

   }
   else if($edad >=18 && $edad <=64 ){
    echo "Eres adulto <br>";
   }
   else {
  echo"Eres persona mayor <br>";
   }
 
    
    
    
    ?>
</body>
</html>
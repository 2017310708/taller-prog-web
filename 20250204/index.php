<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mi proyecto nuevo</title>
</head>
<body>
  <h1>Bienvenido a mi proyecto nuevo, prueba de funcionalidad de PHP</h1>
  <p>
    <?php
      $nombre = "Jose"; // string
      $edad = 30; // integer
      $altura = 1.69; // float
      $trabaja = false; // boolean
      $nulo = null; // nulo

      function mayor_edad($edad){
        if($edad >= 18){
          return "Soy mayor de edad.<br>";
        }else{
          return "Soy menor de edad.<br>";
        }
      }

      echo "Hola, mi nombre es $nombre!<br>";
      echo "Tengo $edad años.<br>";
      echo mayor_edad($edad);
      echo "Mido $altura metros de altura.<br>";
      echo "Actualmente " . ($trabaja ? "trabajo" : "no trabajo").".<br>";
      echo "Valor nulo: $nulo<br>";
    ?>
  </p>

  <h2>Pruebas de operacion</h2>
  <p>
    <?php
      $valor1 = 40;
      $valor2 = 30;
      $suma = $valor1 + $valor2;
      $resta = $valor1 - $valor2;
      $multiplicacion = $valor1 * $valor2;
      $division = $valor1 / $valor2;

      echo "La suma de $valor1 y $valor2 es: $suma<br>";
      echo "La resta de $valor1 y $valor2 es: $resta<br>";
      echo "La multiplicacion de $valor1 y $valor2 es: $multiplicacion<br>";
      echo "La division de $valor1 y $valor2 es: $division<br>";
    ?>
  </p>
</body>
</html>
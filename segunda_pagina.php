<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Segunda pagina</title>
<body>
  <?php
    $nombre="Victor Velasco";
    $edad=18;
    print "El nombre del usuario es: $nombre<br>";
    echo $nombre,$edad;
    echo "<br>Este es el primer mensaje<br>";
    echo "Este es el segundo mensaje<br>";

    function dameDatos(){
      echo "Este es el mensaje del interior de la funcion!<br>";

    }
    dameDatos();
  ?>
</body>
</html>

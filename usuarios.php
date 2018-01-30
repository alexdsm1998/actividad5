<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>activiad 5</title>
  </head>
  <body>

  <a href="Insertar.php">Insertar en la base de datos</a>
<?php
$conector = new mysqli("localhost",
    "root", "", "5");
    if ($conector->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
    }
      echo "<h1>Listado de usuarios</h1>";
   $resultado = $conector->query("SELECT * FROM usuarios");
   foreach ($resultado as $fila) {
     echo " <br>Id: ".$fila["Id"];
     echo " <br>Nombre: ".$fila["Nombre"];
     echo " <br>Apellido: ".$fila["apellidos"];
     echo " <br>edad: ".$fila["edad"];
     echo " <br>curso: ".$fila["curso"];
     echo " <br>puntuacion: ".$fila["puntuacion"];
     echo "<br>";
}
$Nombre=$_POST['Nombre'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$curso=$_POST['curso'];
$puntuacion=$_POST['puntuacion'];

$consulta="INSERT INTO usuarios (Nombre,apellidos,edad,curso,puntuacion) values ('$Nombre','$apellidos',$edad,$curso,$puntuacion)";
$insert=$conector->query($consulta);
?>
  </body>
</html>

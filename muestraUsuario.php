<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>muestra usuario</title>
  </head>
  <body>
    <h4><a href="usuarios.php">Usuarios<a/></h4>
    <h4><a href="Insertar.php">Insertar en la base de datos</a></h4><br>
    <?php

    $conector = new mysqli("localhost",
        "root", "", "5");
        if ($conector->connect_errno) {
          echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
        }else{
          $ID=$_GET["ID"];
          $consulta="SELECT * FROM usuarios WHERE ID='$ID'";
          echo "<br>";
          echo $consulta;
          $resultado = $conector->query($consulta);
          foreach ($resultado as $fila) {
          echo "<br>El usuario que buscas es :".$fila["Nombre"];
          echo "<br>Apellidos :".$fila["apellidos"];
          echo "<br>edad :".$fila["edad"];
          echo "<br>Curso :".$fila["curso"];
          echo "<br>Puntuacion :".$fila["puntuacion"];
          echo "<br>Correo :".$fila["correo"];
        }
      }
           ?>
  </body>
</html>

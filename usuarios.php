<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>activiad 5</title>
  </head>
  <body>

  <h4><a href="Insertar.php">Insertar en la base de datos</a></h4>
  <h4><a href="muestraUsuario.php">Filtrado<a/></h4><br>

<?php
  //funcion de conexion a la base de datos//
$conector = new mysqli("localhost",
    "root", "", "5");
    if ($conector->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $conector->connect_errno;
    }else{
      //recogida de variables por el metodo post
      $Nombre=$_POST['Nombre'];
      $apellidos=$_POST['apellidos'];
      $edad=$_POST['edad'];
      $curso=$_POST['curso'];
      $puntuacion=$_POST['puntuacion'];
      $correo=$_POST['correo'];
      //consulta de insercion en la base de datos
      $consulta="INSERT INTO usuarios (Nombre,apellidos,edad,curso,puntuacion,correo) values ('$Nombre','$apellidos',$edad,$curso,$puntuacion,'$correo')";
      $insert=$conector->query($consulta);
      //consulta para mostrar los usuarios de la base de datos
      echo "<h1>Listado de usuarios</h1>";
   $resultado = $conector->query("SELECT * FROM usuarios");
   foreach ($resultado as $fila) {
     echo " <br>Id: ".$fila["Id"];
     echo " <br>Nombre: ".$fila["Nombre"];
     echo " <br>Apellido: ".$fila["apellidos"];
     echo " <br>edad: ".$fila["edad"];
     echo " <br>curso: ".$fila["curso"];
     echo " <br>puntuacion: ".$fila["puntuacion"];
     echo " <br>correo: ".$fila["correo"];
     echo " <br>";
}
}

?>
  </body>
</html>

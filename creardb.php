<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/creardb.css">
</head>
<body>  

    
    <?php
$servername = "localhost";
$username = "root";
$password = "";

// Crear conexion
$conn = new mysqli($servername, $username, $password);
// Comprobar conexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Crear database
$sql = "CREATE DATABASE pokemon";
if ($conn->query($sql) === TRUE) {
  echo "Congrats aqui tienes tu Digivice.<br><br> ";
} else {
  echo "No se puede crear la base de datos. " . $conn->error;
}

$conn->close();
?>
     
    <!-- ######################## pokemono ############################# -->    

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pokemon";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE Pokemonos (
  id_pokemon SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  tipo VARCHAR(50) NOT NULL,
  peso VARCHAR(50) NOT NULL,
  altura VARCHAR(50) NOT NULL,
  retrato VARCHAR(255) NOT NULL,
  PRIMARY KEY (id_pokemon)

)";


if ($conn->query($sql) === TRUE) {
  echo "☑<br><br>";
} else {
  echo "No se pudo crear la tabla de Pokemonos: " . $conn->error;
}

$conn->close();
?>
    

  
</body>
</html>
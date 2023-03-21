<!DOCTYPE html>
<html>
<head>
	<title>Mote</title>
	<link rel="stylesheet" type="text/css" href="../css/mote.css">
</head>
<body>
	
	<?php
include '../resources/conexion.php';

if (isset($_POST['id_pokemon']) && isset($_POST['nombre'])) {

    $id_pokemon = $_POST['id_pokemon'];
    $nombre = $_POST['nombre'];
   

    $update_data = $dbh->prepare("UPDATE Pokemonos SET nombre = :nombre");

    
    $update_data->bindParam(':nombre', $nombre);
   

    $update_data->execute();
}

?>
	<form action="" method="POST" >
            <table>
                <tr>
                    <td> ID Pokemon:</td>
		
                    <td><input  type="text" name="id_pokemon" required></td>
                </tr>
                
                <tr>
                <td>Mote:</td>
		
                <td><input  type="text" name="nombre" required></td>
		
                </tr>
                
                
                
                <tr>
                    <td><input class="boton" type="submit" value="Poner"></td>
        
                    
               
                    <td><a href="../index.php" class="btn btn-default">Volver</a></td>
            
                </tr>
            </table>			
        </form>				
</body>
</html>
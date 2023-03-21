<!DOCTYPE html>
<html>
<head>
	<title>Capturar</title>
	<link rel="stylesheet" type="text/css" href="../css/capturar.css">
</head>
<body>
	
	<?php
	
	include '../resources/conexion.php';
	
	if (isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_POST['peso']) && isset($_POST['altura']) && isset($_FILES['retrato'])) {

		$nombre = $_POST['nombre'];
		$tipo = $_POST['tipo'];
		$peso = $_POST['peso'];
		$altura = $_POST['altura'];
		$retrato = $_FILES['retrato']['tmp_name'];
                $retrato_name = $_FILES['retrato']['name'];
                $retrato_path = '../retratos/' . $retrato_name;


        move_uploaded_file($retrato, $retrato_path);

        $insert_data = $dbh->prepare("INSERT INTO Pokemonos (nombre, tipo, peso, altura, retrato) VALUES ('$nombre', '$tipo', '$peso', '$altura', '$retrato_path')");
        $insert_data->execute();
        }		

	?>
	<form action="" method="POST" enctype="multipart/form-data">
		
            <table>
   
                <tr>
                    <td>  Nombre:</td>
		
                    <td><input type="text" name="nombre" required></td>
                </tr>
		
                <tr>
                    <td>Tipo:</td>
		
                    <td><input type="text" name="tipo" required></td>
                </tr>
		
                
                <tr>
                    <td> Peso:</td>
		
                    <td><input type="text" name="peso" required></td>
                </tr>
		
                
                <tr>  
                    
                    <td>Altura:</td>
		
                    <td><input type="text" name="altura" required></td>
                </tr>

                
                <tr>
                    <td> Retrato:</td>
		
                    <td class="espacio" ><input  type="file" name="retrato" accept="image/jpeg" required></td>
		
                </tr>
                
                <tr><td class="espacio"></td></tr>
                
                <tr>
                    <td><input class="boton" type="submit" value="Capturar"></td>
                    
                    <td><a href="../index.php" class="regresar">Volver</a></td>
                       
                </tr>
                
                </table>
                
		
	</form>
        
      
					
					
</body>
</html>
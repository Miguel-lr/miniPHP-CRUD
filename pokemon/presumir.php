<!DOCTYPE html>
<html>
<head>
	<title>Presumir</title>
        
        <link rel="stylesheet" type="text/css" href="../css/presumir.css">
</head>
<body>
	
	<?php
	include '../resources/conexion.php';
	
	?>
	<table>
            <thead>
		<tr>
			<th>Retrato</th>
                        <th>ID Pokemono</th>			
                        <th>Nombre</th>
			<th>Tipo</th>
                        <th>Peso</th>
			<th>Altura</th>
                      
		</tr>
                </thead>
                <tbody>
            
                 <?php
		$get_all = $dbh->prepare("SELECT * FROM Pokemonos");
		$get_all->execute();
		while($fila = $get_all->fetch(PDO::FETCH_OBJ)){
                echo "<tr><td><img src='../retratos/$fila->retrato' alt='retrato de $fila->nombre' style='vertical-align: middle;'></td><td>$fila->id_pokemon</td><td>$fila->nombre</td><td>$fila->tipo</td><td>$fila->peso</td><td>$fila->altura</td></tr>";
            }
	


?>
	</table>
        
        
       
</body>
</html>
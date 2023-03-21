<html>
   
   <head>
      <title>Soltar</title>
      <link rel="stylesheet" type="text/css" href="../css/soltar.css">
   </head>
   
   <body>
       
      <?php
         if(isset($_POST['id'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $id_pokemon = $_POST['id'];
            
            $sql = "DELETE FROM Pokemonos WHERE id_pokemon = $id_pokemon" ;
            mysqli_select_db($conn,'pokemon');
            $retval = mysqli_query($conn,$sql);
            
            if(! $retval ) {
               die('No se pudo borrar el Pokemono: ' . mysqli_error());
            }
            
            echo "Pokemono borrado con éxito.\n";
            
            mysqli_close($conn);
         }else {
            ?>
        	<form action="<?php $_PHP_SELF ?>" method="POST">
		
                    <table>
                   
                        <tr>
                            <td class="idb"> ID:</td>
                            <td><input  type="text" name="id" required></td>
                        </tr>
                <br>
              
                <tr><td class="espacio"></td></tr>
                
                <tr>
                    <td> <input class="boton" name = "delete" type = "submit" id = "delete" value = "Borrar"></td>
                    <td><a href="../index.php" class="regresar">Regresar</a></td>
                </tr>

                    </table>                 
	</form>
   
               </form>
            <?php
         }
      ?>
       
      
   </body>
</html>
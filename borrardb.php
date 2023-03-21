<!DOCTYPE HTML>  
<html>
<head>
     <link rel="stylesheet" type="text/css" href="css/borrardb.css">
</head>
<body>  

    
<?php
   $servername = "localhost";
$username = "root";
$password = "";
  
$conn = mysqli_connect($servername, $username, $password);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   $sql = 'DROP DATABASE pokemon';
  
   if (mysqli_query($conn,$sql)) {
       
   echo "Its Over.";}
   
   else {
       
       echo "" . mysqli_error($conn);
       
   }
      
   
   mysqli_close($conn);
?>



</body>
</html>
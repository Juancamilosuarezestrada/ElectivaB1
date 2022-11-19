<?php include ("layouts/header.php") ?>
<?php
$usuario = "root"; //en ste caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="ventas"; //nombre de la base de datos



$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 



$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");



    $nombre=$_POST['nombre']; 
    $edad=$_POST['edad'];
    $Tipodereserva=$_POST['Tipodereserva'];
    $ciudad=$_POST['ciudad'];
    $fecha=$_POST['fecha']; 

    //sentencia sql
     $sql="INSERT INTO reservas1 VALUES ('$nombre','$edad','$Tipodereserva','$ciudad','$fecha')"; 

    $ejecutar=mysqli_query($conexion, $sql);



    if(!$ejecutar){
    	 echo '<script>alert("huvo algun error")</script> ';
         echo "<script>location.href='reserva.php'</script>";	
    }else{
        echo '<script>alert("Su reserva se a realizado correctamente ")</script> ';
        
        echo "<script>location.href='menu.php'</script>";	
    }
  
?>
<?php include ("/menu.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sylesheet" hred="./css/confirmacion.css">
    <title>Document</title>
</head>
<body>
    <?php 
/*
$data['todook'] =  true;   
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
*/
if(!isset($_POST['id'])) {
  echo 'ERROR';
  die();
}
$id = strip_tags($_POST['id']);  
   //si estamos aqui, si trajo un ID
   //actualizacion en mysql para confirmr los boletos de la persona
    
   ?>

<?php
  $sql = "update Usuarios set boletos_confirmados = boletos_asignados where id=".$id;
  $conexion=mysqli_connect('localhost','root','','susy');
  $resultado = $conexion->query($sql);
  
  echo "<h1>Gracias por confirmar</h1>";

?>

<?php 
 if(!isset($_POST['boletos_confirmados'])) {
    echo 'ERROR';
    die();
  } 

$user_id 						 	= $_POST['id']; 
$boletos_confirmados  = $_POST['boletos_confirmados']; 

//verificar 1) si aun estas en fecha de confirmar, 2) aun puedes seguir mandando confirmaciones
  
?>
    
</body>
</html>
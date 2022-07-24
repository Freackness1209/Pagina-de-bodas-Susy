<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>

 $data['todook'] =  true;   
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
if(!isset($_GET['id']) {
  echo 'ERROR';
  die();
}
id   = strip_tags($_GET['id']);  
   //si estamos aqui, si trajo un ID
   //actualizacion en mysql para confirmr los boletos de la persona
    </script>


<?php
  $sql = "update Usuarios set boletos_confirmados = boletos_asignados where id=".$id;
  $resultado = mysqli_query($sql);
  
  echo 'Gracias por confirmar';

?>

<?php 
 if(!isset($_POST['boletos_confirmados'])) {
    echo 'ERROR';
    die();
  } 

$user_id 						 	= $_POST['user_id']; 
$boletos_confirmados  = $_POST['boletos_confirmados']; 

//verificar 1) si aun estas en fecha de confirmar, 2) aun puedes seguir mandando confirmaciones

$sql = "update Usuarios set boletos_confirmados = '.$boletos_confirmados.' where id=".$user_id;
$resultado = mysqli_query($sql); 
echo 'Gracias por confirmar';
  
?>
    
</body>
</html>
<?php
//esta línea nos evita mostrar errores tipo warning
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $conexion=mysqli_connect('localhost','root','','susy');
    //$conexion=mysqli_connect('localhost','root','secret','susy');

}catch(Exception $e) {
    die('No hay conexión a la base de datos');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/confirmacion.css" type="text/css">
    <link rel="stylesheet" href="./css/mediaquery.css" type="text/css">
    <title>Document</title>
</head>
<body>
<?php
 $mes = date('m');
 $dia = date('d');
 $hayErrores = false;
 $mensajeError = "";

 if(!isset($_POST['id'])) {
   $hayErrores = true;
   $mensajeError = "El usuario no existe";
 }
 if(($mes>10 && $dia>1)) {
    $hayErrores = true;
    $mensajeError = "La fecha de confirmación ya pasó";
 }

 if($hayErrores) { ?>
    <p><?php echo $mensajeError;?></p>
<?php } else {
    $id = strip_tags($_POST['id']);
    $sql = 'select * from Usuarios where id ='.$id;
    $resultado = $conexion->query($sql);
    $Usuario = mysqli_fetch_object($resultado);

    if($Usuario->total_confirmaciones>=3) {
        echo 'Llegaste al límite de confirmaciones';
    } else {
        $sql="update Usuarios set total_confirmaciones = total_confirmaciones+1 where id =".$Usuario->id;
        $resultado=$conexion->query($sql);
        
        ?>
<h1 class="gracias_confirmar">Gracias por confirmar</h1> 

<p class="nombre_usuario"><?php echo $Usuario->nombre?></p>

<?php 
    }
}
mysqli_close($conexion);

?>


</body>
</html>
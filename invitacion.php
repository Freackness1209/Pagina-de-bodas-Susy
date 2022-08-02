<?php
//esta línea nos evita mostrar errores tipo warning
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $conexion=mysqli_connect('localhost','root','','susy');
   // $conexion=mysqli_connect('localhost','root','secret','susy');

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
        <link rel="stylesheet" href="./css/invitacion.css">
        <link rel="stylesheet" href="./css/mediaquery.css" type="text/css">
        <title>Document</title>
    </head>
    <body>
  
        <?php
        //print_r($_POST);
        $hayErrores=false;
        $mensajeError="";
        if(!isset($_POST["nombre"])){
            $hayErrores=true;
            $mensajeError='No estas registrado. <a href="index.php">Regresar</a>';
            die($mensajeError);
        }
    //Leemos los datos que vienen en el formulario
    $nombre=strip_tags($_POST["nombre"]);
    $apellido=strip_tags($_POST["apellido"]);
    //aqui usamos los datos del formlario apra constuir el query

    $sql = 'select * from Usuarios where nombre like "'.$nombre.'%"and apellido like"'.$apellido.'%";';
    $resultado=$conexion->query($sql);

    if($resultado->num_rows==0){
        $hayErrores=true;
        $mensajeError="No estás registadro";

    }
    if(!$hayErrores){
        // si no hay errores, buscamos en el resultado que trajo el registro de ese usuario y lo convertimos a objeto
        // para poder usarlo
        $Usuario = mysqli_fetch_object($resultado);
    }
    ?>

    <?php if($hayErrores){ ?>
        <div>
            <h1>
                
                <?php echo $mensajeError;?>
                <a href="index.php">Da click aqui para intentarlo de nuevo</a>
            </h1>
            
        </div>
    <?php } else {
         $mes = date('m');
         $dia = date('d');
        ?>

        <div class="fondo_boda">
       
            <header class="heading-primary">
                <h3 class="flex_item1">Bienvenid@<?php echo $Usuario->nombre. ' '. $Usuario->apellido?>,</h3>
                <div class="flex-parent">    
                    <div clas="flex_item1">

                        <p>Tienes <b><?php echo $Usuario->boletos_asignados?></b> boletos asignados</p>
                    </div>
                        
            

                <div class="flex_item1">
                
                <form action="confirmacion.php" method="post">
                    Confirma tus boletos, recuerda que puedes cambiar la cantidad de boletos máximo 3 veces <br> Fecha limite para realizar cambios, 1 de octubre:<select name="boletos_confirmados">
                        </div>
                        <?php for($i=0;$i<= $Usuario->boletos_asignados; $i++){?>
                            
                            <div class="flex_item1">
                                
                                <option value="<?php echo $i?>"><?php echo $i?></option>
                                <?php }?>
                            </div>
                        </select>
                        <input type="hidden" name="id" value="<?php echo $Usuario->id?>">
                        <button type="submit">Confirmar</button>
                        
                    </form>
                    
                </div>
                
            </header>
        </div>
        <?php }?>

<?php
/* 
mysqli_close($conexion);

if($Usuario->total_confirmaciones<3){
    $sql="update Usuarios set total_confirmaciones = total_confirmaciones+1 where id =".$Usuario->id;
    $resultado=$conexion->query($sql);
    echo "Gracias por confirmar";
}else{
    echo "Ya no puedes confirmar";

}
*/
?>


    <script>
    fetch('confirmar.php'). then((result)={
     if (result.data.todook == true) {
       alert('todo confirmado')
     }
    })
   </script>

 



</body>
</html>
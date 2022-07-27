<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/invitacion.css">
        <title>Document</title>
    </head>
    <body>
        <header></header>
        <?php
        $conexion=mysqli_connect('localhost','root','','susy');
        print_r($_POST);
    $hayErrores=false;
    $mensajeError="";
    if(!isset($_POST["nombre"])){
        $hayErrores=true;
        $mensajeError="No estas registrado";
        die();
    }
    //Leemos los datos que vienen en el formulario
    $nombre=strip_tags($_POST["nombre"]);
    $apellido=strip_tags($_POST["apellido"]);
    //aqui usamos los datos del formlario apra constuir el query

    $sql = 'select * from Usuarios where nombre like "'.$nombre.'%"and apellido like"'.$apellido.'%";';
    $resultado=$conexion->query($sql);
    
    if($resultado->num_rows==0){
        $hayErrores=true;
        $mensajeError="La persona no existe";
        
    }
    if(!$hayErrores){
        $Usuario = mysqli_fetch_object($resultado);
    }
    ?>
    <div>
    <?php if($hayErrores){ ?>
          Se encontraron errores: <?php echo $mensajeError;?>
          <a href="index.php">Da click aqui para intentarlo de nuevo</a>
    <?php }else{ ?>
 
       //tu html de la invitacion
         <h3>Bienvenido <?php echo $Usuario->nombre. ' '. $Usuario->apellido?>,</h3>
         <p>Te invitamos a nuestros 25 años de Susy y Garo</p>
         <p>Recuerda que tienes <?php echo $Usuario->boletos_asignados?> boletos asignados</p>
         Da click  para confirmar tu asistencia
         <a href="confirmar.php?id=<?php echo $Usuario->id?>">Confirmar asistencia</a>
       
   </div>
    // verificar la fecha, si estas en fecha, mostrar la confirmacion
    <?php
    $mes = date('m');
    $dia = date('d');

    if(($mes>10 && $dia>1) || $Usuario->total_confirmaciones>=3){
        echo 'Lo sentimos ya paso la fecha para confirmar a través de la página, puedes llamarnos para confirmar tu asistencia al número';

    }else {
        ?>
        <form action="confirmacion.php" method="post">
           Boletos: <select name="boletos_confirmados">
                       <?php for($i=0;$i<= $Usuario->boletos_asignados; $i++){?>
                           <option value="<?php echo $i?>"><?php echo $i?></option>
                        <?php }?>
                    </select>
                   <input type="hidden" name="id" value="<?php echo $Usuario->id?>">
                   <button type="submit">Confirmar</button>

             </form>
    
    <?php }
    
    if($Usuario->total_confirmaciones<3){
        $sql="update Usuarios set total_confirmaciones = total_confirmaciones+1 where id =".$Usuario->id;
        $resultado=$conexion->query($sql);
        echo "Gracias por confirmar";
    }else{
        echo "Ya no puedes confirmar";
    }
    
        } 
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
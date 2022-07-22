<?php
$conexion= mysqli_connect("localhost","root","","susy");
$sql="select * from Usuarios";
$resultado = $conexion->query($sql);
while($fila = mysqli_fetch_array($resultado)) {
    ?>
    <p><?php echo $fila["nombre"];?></p>
    <p><?php echo $fila["apellido"];?></p>
    <secion>
        <p><?php echo $fila["boletos_asignados"];?></p>
    </section>
    <?php
} 
mysqli_close($conexion);
?>


select * Usuarios
where nombre=
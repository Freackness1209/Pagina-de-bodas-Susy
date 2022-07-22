<?php 

fuction obtenerusuarios(){
    $sql="select * from Usuarios";
    $resultado = $conexion->query($sql);
    return $resultado;
};
fuction obtenerboletos($cantidadboletos=2){
    $sql = "select * from Usuarios 
    where boletos_asignados > ".$cantidadboletos
    $resultado=$conexion-query($sql)
    return $resultado;
};
$conexion= mysqli_connect("localhost","root","","susy");
$usuarios=obtenerusuarios();
$boletos = obteneboletos(2)

echo $usuarios->num_rows();

while($usuario = mysqli_fetch_array($usuarios)) {
    echo "<p>".$usuario["nombre"]."</p>";
    echo "<p>".$usuario["apellido"]."</p>";
    echo 
    "<section>
    <p>".$usuario["boletos_asignados"]."</p>
    </section>";
}
mysqli_close($conexion);
?>
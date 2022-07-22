<?php 
$nombre = "Susy";
$years=$_POST["nombre"];;
echo $nombre;
$_post
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi boda</title>
    <link rel="stylesheet" href="./index.css" type="text/css">
    <link rel="stylesheet" href="./fonts.css" type="text/css">
    <link rel="stylesheet" href="./mediaquery.css" type="text/css">
    <script type="text/javascript" src="./index.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>


</head>
<body>
        <div class="img1">
            <h1 class="heading-primary">
                <span class="heading-primary-main"> <?php echo $years;?> años</span>
                <span class="heading-primary-sub"> Mi boda de plata</span>
              </h1>
    </div>

<header>

    <section class="slide">
       
       

        <div id="slider">
            <ul id="slideWrap"> 
                
              <li><img src="./img1/0.jpg" alt=""></li>
              <li><img src="./img1/00.jpg" alt=""></li>
              <li><img src="./img1/1.jpg" alt=""></li>
              <li><img src="./img1/2.jpg" alt=""></li>
              <li><img src="./img1/3.jpg" alt=""></li>
              <li><img src="./img1/4.jpg" alt=""></li>
              <li><img src="./img1/5.jpg" alt=""></li>
              <li><img src="./img1/7.jpg" alt=""></li>
              <li><img src="./img1/8.jpg" alt=""></li>
              <li><img src="./img1/9.jpg" alt=""></li>
              <li><img src="./img1/12..jpg" alt=""></li>
              <li><img src="./img1/13..jpg" alt=""></li>
              <li><img src="./img1/14..jpg" alt=""></li>
              <li><img src="./img1/15.jpg" alt=""></li>
              
              
            </ul>
            <a id="prev" href="#">&#8810;</a>
            <a id="next" href="#">&#8811;</a>
          </div>
        
        </div>
     
    </section>
</header>

    
     <section class="magic">
         
         <div class="magic__title">Lo mágico de las bodas de plata</div>
         <div class="magic__content">Estar  enamorado hoy en día de la misma persona por muchos años cada vez es más difícil, más aun en estos nuevos tiempos donde la vida es muy acelerada y desordenada, de hecho encontrar una pareja unida más de 10 años es casi un lujo en esta nueva época.
            Celebrar cualquier aniversario de bodas es importante, pero ¿sabes qué significan las bodas de plata? El 10° aniversario ya es un logro, el 20 también, pero la primera gran celebración son las bodas de plata, el 25° aniversario de matrimonio, esta cifra redonda significa que se convivió durante un cuarto de siglo, sin contar los años de noviazgo.
            Para llegar a los 25 años de casado, antes hay que pasar por las bodas de hierro (6 años), bodas de bronce (8 años), bodas de aluminio (10 años) y las bodas de acero (11 años). Estos cuatro elementos comparten una característica: son metales. Sin embargo, la plata es un metal semiprecioso que representa nobleza y valor; un significado que podemos trasladar al matrimonio. También simboliza la fuerza de esa unión que se ha mantenido inquebrantable durante un cuarto de siglo. La plata puede combinarse fácilmente con otros elementos, eso significa que los dos se han complementado durante este cuarto de siglo. 
            </div>
         <div class="magic_bold">
             
            Es fácil amar a alguien cuando todo es perfecto. Mantener ese amor en los momentos imperfectos es lo que hace un amor incondicional.
             </div>
    </section>
         

    <section class="main">
        <div class="text">

          <div class="main__p1">El tiempo es muy sabio, cuando dos personas se encuentran en el momento exacto y resulta que no es casualidad, que se estaban esperando toda la vida.</div>
          <div class="main__p2">Si, a pesar de los recortes, la crisis, el IVA…..y toda la que está cayendo…</div>
          <div class="main__bold">¡Lo logramos¡</div>
          <div class="main__p3">Y con gran júbilo tenemos el agrado de invitarlos junto con nuestros hijos Jonathan y Cristian a compartir con ustedes nuestras bodas de plata.</div>

     

            <h1>
            Susana <br><div class="main__move">& </div> <br><br><br><br>
            <br>Edgardo
            </h1>
            <div class="main__2022">2022</div>
<div class="main__fecha">

    <div>Sábado &lceil; 05 &rceil; Noviembre</div>
</div>
</div>
            <div class="composition">
    <div>
        <div class="flex_container">
            
            <img src="./img1/Garo.jpg" alt="" class="composition__photo composition__photo--p1">
            <img src="./img1/susy.jpg" alt="" class="composition__photo composition__photo--p2">
            
        </div>

        <div class="marcos flex_container">
            <img class="marcos__izquierdo"src="./img1/marco_izquierdo.png" alt="">
            <img class="marcos__derecho" src="./img1/marco_derecho.png" alt=""></div>
        
    </div>
        <img src="./img1/hoja_1.png" alt="" class="composition__photo composition__photo--p3">
        <img src="./img1/hoja 2.png" alt="" class="composition__photo composition__photo--p4">
    </div>
    </section>

    <footer>
        <img src="./img/1.jpg" alt="">
        <form action="" method="post">

            <div class="inputBox">
                <h1>!Consigue tu invitación!</h1>
                
                <input type="text" required="required" name="nombre">
                <span>Nombre</span>
            </div>
            <br>
            <div class="inputBox">
                
                <input type="text" required="required" name="apellido">
                <span>Apellido</span>
                <input type="submit" value="Enviar">
            </form>
           
        </div>
        
    </footer>
    

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="vista/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div id="sideNavigation" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <center>               
                                      <img src="img/<?php echo $fotousu;?>" class='imgRedonda' width="170" height="170" style="border-radius:190px;border:10px solid blue;" >
                                        <div class="card-body">
                                          <h4 style="color: white;" class="card-title"><?php echo $nomusu;?></h4>
                                          <h5 style="color: white;"  class="card-title"><?php echo $docusuario;?></h5>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <a type="button" class="btn btn-primary mb-1" href="aspirante.php" style="width: 99%;" >
                                              Aspirante 
                                        </a>    
                                        <ul class="list-group list-group-flush">
                                            <a type="button" class="btn btn-primary mb-1" href="usuario.php" style="width: 99%;" >
                                              Ver perfil
                                        </a>
                                      <form action="indice.php" method="POST">
                                        <button class="btn btn-danger"  type="submit" name="cerrar" style="width: 99%;">Cerrar sesion</button>
                                      </form>
                                    </ul>
                    </center>                 
    </div>
      
   <nav class="menu navbar navbar-dark " style="background-color:#111;" > 


      <a href="#" onclick="openNav()">
        <svg width="30" height="30" id="icoOpen" style="background-color: white;"  >
            <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
        </svg>
      </a>
    <img src="vista/imagenes/slogan3.png" width="200" height="40" alt="">
      <a class="navbar-brand" href="#">
        <img src="vista/imagenes/facebook.png" width="30" height="25" alt="">
        <img src="vista/imagenes/gorjeo.png" width="30" height="25" alt="">
        <img src="vista/imagenes/instagram.png" width="30" height="25" alt="">
        <img src="vista/imagenes/whatsapp.png" width="30" height="25" alt="">
      </a> 
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgba(00,00,00,0.3);" >
    <div class="btn-group btn-group-justified" role="group" style="width: 100%;height: 40px;">
      <a href="hojadevida.php" type="button" class="btn btn-secondary" style="border-radius:  12px ;" >Hoja de vida</a>
      <a href="oferta2.php" type="button" class="btn btn-secondary" style="border-radius:  12px ;">oferta</a>
      <a href="aplicaciones.php" type="button" class="btn btn-secondary" style="border-radius:  12px ;">Aplicaciones</a>
      <a href="citas.php" type="button" class="btn btn-secondary" style="border-radius:  12px ;">Citas Agendadas</a>

    </div>
    </nav> 


    <div style="padding: 20mm; background-color: beige; " >
        <center>
        <H3> Las citas agendadas para <?php echo $nomusu;?> son : </H3>
    
        <?php foreach($datos as $f) { ?>

            <div class="card text-white bg-dark mb-3" style="max-width: 80rem;">
                <div class="card-header"><?php echo $f[8];?> tienes una cita agendada para el puesto de ;</div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $f[2];?></h5>
                  <p class="card-text"> se te asigno una cita para entrevista de trabajo a la cual aplico con la empresa <?php echo $f[1];?>
                     para el cargo de <?php echo $f[2];?>    </p>
                  <p class="card-text"> la cita quedo asignanda con el seleccionador <?php echo $f[4];?>  para el dia  <?php echo $f[5];?> a la siguiente Hora <?php echo $f[6];?> </p>
                </div>
                <div class="card-header btn-primary" > despues de la citacion aca aparecera la respuesta del seleccionador  <?php echo $f[7];?> </div>
            </div>
     
        <?php } ?> 
    </center>  
     
    </div>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

<script>
function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}
 
function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}


 $(document).ready(function(){ 
  var altura = $('.menu').offset().top;
  
  $(window).on('scroll', function(){
    if ( $(window).scrollTop() > altura ){
      $('.menu').addClass('menu-fixed');
    } else {
      $('.menu').removeClass('menu-fixed');
    }
  });
 
    });


</script>
</body>
</html>
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


  <style type="text/css">
    

 
 
/* --- Clase que agregaremos cuando el usuario haga scroll --- */
.menu-fixed {
  position:fixed;
  z-index:1000;
  top:0;
  
  width:100%;
  box-shadow:0px 4px 3px rgba(0,0,0,.5);
}



  </style>




   


      


    <div id="sideNavigation" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <center>               
                                      <img src="img/<?php echo $fotousu;?>" class='imgRedonda' width="170" height="170" style="border-radius:190px;border:10px solid blue;" >
                                        <div class="card-body">
                                          <h4 style="color: white;" class="card-title"><?php echo $nomusu;?></h4>
                                          <h5 style="color: white;"  class="card-title"><?php echo $docusuario;?></h5>
                                        </div>

                                        <ul class="list-group list-group-flush">
                                            <a type="button" class="btn btn-primary mb-1" href="usuario.php" style="width: 98%;" >
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
      <a href="hojadevida.php" type="button" class="btn btn-secondary">Hoja de vida</a>
      <a href="oferta2.php" type="button" class="btn btn-secondary">oferta</a>
      <a href="aplicaciones.php" type="button" class="btn btn-secondary">Aplicaciones</a>
      <a href="aspirante.php" type="button" class="btn btn-secondary">Aspirante</a>

    </div>
    </nav> 



     
    <div id="main">
    </div>

<center>
<div class="col-8" >

<form action="" method= "POST">
  <div >

    <?php foreach ($datos as $a) {?>
        <div class="jumbotron jumbotron-fluid bg-primary"  >
          <div class="container">
            <h1 class="display-4"  style="color:white;" >Bienvenido</h1>
            <p class="lead" style="color:white;" ><?php echo $a[1];?>  para nosotros es muy importante saber que estas buscando por eso podras utilizar nuestros servicios   </p>
            <p class="lead" style="color:white;" > tu como  <?php echo $a[2];?> necesitas encontrar lo que buscas    </p>

          </div>
        </div>
 
<?php }?>
</div>
</form>

<div class="card bg-dark text-white">
  <img src="vista/imagenes/imagen1.jpg" class="card-img" width="30" height="400"  alt="...">
  <div class="card-img-overlay">
    <h3 style="color:black;">Centroportunidad</h3>
    <p  style="color:black;">Bienvenido a nuseatro sistema de seleccion de recurso humano en donde puedes encontrar  cientos de de oportunidades </p>
    <p  style="color:black;" class="card-text">Disfruta de todod nuestros servicios </p>
  </div>


</div>

</center>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

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

</html>
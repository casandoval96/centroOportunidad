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
                                            <a type="button" class="btn btn-primary mb-1" href="perfil2.php" style="width: 99%;" >

                                              Ver perfil
                                            </a>
                                            <a type="button" class="btn btn-primary mb-1" href="empleado.php" style="width: 99%;" >

                                              Empleado
                                            </a>
                                        </ul>    
                                      <form action="indice.php" method="POST">
                                        <button class="btn btn-danger"  type="submit" name="cerrar" style="width: 99%;">Cerrar sesion</button>
                                      </form>
                                    
                    </center>                 
    </div>
     
   <nav class="topnav navbar navbar-dark" style="background-color:#111;" > 


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
      <a href="Usuario2.php"     type="button" class="btn btn-danger" style="border-radius:  12px ;" >Usuarios</a>
      <a href="oferta.php"       type="button" class="btn btn-danger" style="border-radius:  12px ;" >Oferta</a>
      <a href="aplicaciones2.php" type="button" class="btn btn-danger" style="border-radius: 12px ;">Aplicaciones</a> 
      <a href="finalista.php.php" type="button" class="btn btn-danger" style="border-radius: 12px ;">Entrevistas finalistas </a>  
    </div>
    </nav>


    <center>
<br>
<br>

  
<div class="col-8" style="background-color:red;">

<br>
<br>
<div class="card">
  <div class="card-header">
  <?php echo $nomusu;?> TUS  DATOS BASICOS  

  </div>
  <div class="card-body">

    <p class="card-text">

    <?php foreach($datos as $f) {?>
   
      <table> 
          <tr><td><img style="width:100px;  height:60px; " src="img/<?php echo $f[8];?>"></td></tr>
          <tr><td><h5>Identificacion :</h5></td><td><?php echo $f[0];?></td></tr>
          <tr><td><h5>Tipo de documento :</h5></td><td><?php echo $f[1];?></td></tr>
          <tr><td><h5>Nombre de usuario  :</h5></td><td><?php echo $f[2];?></td></tr>
          <tr><td><h5>Contraseña  :</h5></td><td><?php echo $f[3];?></td></tr>
          <tr><td><h5>Estado :</h5></td><td><?php echo $f[4];?></td></tr>
          <tr><td><h5>Rol :</h5></td><td><?php echo $f[5];?></td></tr>
          <tr><td><h5>Email :</h5></td><td><?php echo $f[6];?></td></tr>
          <tr><td><h5>Sexo :</h5></td><td><?php echo $f[7];?></td></tr>          
      </table>
    <?php } ?>




    </p>
        <p>
          <button class="btn btn-danger; type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" >
            Actualizar Informacion
          </button>
        </p>


  </div>
</div>


<br>

<div class="collapse" id="collapseExample">
  <div class="card card-body">
      

         <form action="" method= "POST" enctype="multipart/form-data">
          <table class="table table-ligth bg-secondary text-white" style=""> 
         <?php foreach ($datos as $a) { ?> 
         <tr><td><label for="">Identificacion</label> </td>     <td><label><?php echo $a[0];?></label><input type="hidden" name="usuid" class="insert" required ="" value="<?php echo $a[0];?>"></td> </tr>
         <tr><td><label for="">Tipo de documento</label></td>  <td><input type="text" name="usutipodocumento" class="form-control" value="<?php echo $a[1];?>"  required pattern ="[a-z A-Z]+" > </td> </tr>
         <tr><td><label for="">Nombre de usuario</label></td>  <td><input type="text"  name="usunombre" class="form-control"  value="<?php echo $a[2];?>"  required ="" ></td> </tr>
         <tr><td><label for="">Contraseña</label></td>         <td><input type="text" name="usucontrasena" class="form-control"  value="<?php echo $a[3];?>"  required =""></td> </tr>
         <tr><td><label for="">Estado</label></td>             <td><label><?php echo $a[4];?></label><input type="hidden" name="usuestado" class="form-control"  value="<?php echo $a[4];?>"  required =""></td> </tr>
         <tr><td><label for="">Rol</label></td>                <td><label><?php echo $a[5];?></label><td><input type="hidden" name="usurol" class="form-control"  value="<?php echo $a[5];?>"  required =""></td> </tr>
         <tr><td><label for="">Email</label> </td>             <td><input type="email"  name="usucorreo" class="form-control"  value="<?php echo $a[6];?>"  required ="" ></td> </tr>
         <tr><td><label for="">Sexo</label></td>               <td> <select id="pass" type="text-dark" class="dropdown-item" name="ususexo"  required="">
                                                                      <option style="color: black;" value="Hombre">Hombre</option>
                                                                      <option style="color: black;" value="Mujer" >Mujer</option></select> </td> </tr>
         <tr><td><label for="">foto</label></td>               <td><input type="file" name="foto" accept="image/gif,image/jpeg,image/png,application/pdf" id="exampleInputPassword5" required="" ></td> </tr>      
          <?php } ?> 
          </table>
          <input  type="submit" value="actulizar" name="Actualizar" class = "btn btn-primary">
        </form> 


  </div>
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


      </script>




</html>








    
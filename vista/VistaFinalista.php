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
                                            <a type="button" class="btn btn-primary mb-1" href="usuario.php" style="width: 98%;" >

                                              Ver perfil
                                            </a>
                                            <a type="button" class="btn btn-primary mb-1" href="empleado.php" style="width: 98%;" >

                                              Empleado
                                            </a>
                                      <form action="indice.php" method="POST">
                                        <button class="btn btn-danger"  type="submit" name="cerrar" style="width: 99%;">Cerrar sesion</button>
                                      </form>
                                    </ul>
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
      <a href="Usuario2.php"     type="button" class="btn btn-danger">Usuarios</a>
      <a href="oferta.php"       type="button" class="btn btn-danger">Oferta</a>
      <a href="aplicaciones2.php" type="button" class="btn btn-danger">Aplicaciones</a> 
        <div class="btn-group" role="group" style="width:25%;" >
          <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >
            Finalista
          </button>
          <div class="dropdown-menu btn-danger" aria-labelledby="btnGroupDrop1" style="width:100%;">
            <a class="dropdown-item" href="psicologo.php">Psicologo</a>
            <a class="dropdown-item" href="finalista.php">Citas</a>
          </div>
        </div> 
    </div>
    </nav>

<br>
<br>
<br>
<br>
<center>


  

<table class="table table-hover table-secondary col-8" >
  <thead>
    <tr>
      <th scope="col">numero</th>
      <th scope="col">Aplicacion numero</th>
      <th scope="col">Psicologo</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>
    </tr>
  </thead>

 <?php foreach($datos as $f) { ?> 
  <tbody class="">
    <tr>
      <form action="" method= "POST">
      <th scope="row"><input type="number" class="btn form-control" name="finide" value="<?php echo $f[0];?>" readonly></th>
      <td><input type="text" class="btn form-control"  name="finaplid" value="<?php echo $f[1];?>"  readonly></td>
      <td><select name="finpsicologo" class="btn-secondary  form-control"><option value="<?php echo $f[2];?>"><?php echo $f[2];?></option>
              
               <?php
               foreach ($datospsi as $a)
                {?>
                  <option value="<?php echo $a[0];?>"><?php echo $a[1];?></option>
                  <?php
                }
                ?>
      </select></td>
      
      <td><input type="date" class="btn form-control"  name="finfecha" value="<?php echo $f[3];?>"></td>
      <td><input type="time" class="btn form-control"  name="finhora" value="<?php echo $f[4];?>"></td>      
      <td><input type="submit" name="Actualizar" value="Actualizar"></td>
      <td><input type="submit" name="Eliminar" value="Eliminar"></td>
      </form>
    </tr>
  </tbody>
 <?php }  ?>
</table>








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
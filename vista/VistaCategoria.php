<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="vista/estilomenu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-color: silver;" >
 
<nav class="navbar navbar-expand-md navbar-dark  bg-dark">
  <a class="navbar-brand" href="#">
    <img src="vista/imagenes/facebook.png" width="50" height="40" alt="">
    <img src="vista/imagenes/gorjeo.png" width="50" height="40" alt="">
    <img src="vista/imagenes/instagram.png" width="50" height="40" alt="">
    <img src="vista/imagenes/whatsapp.png" width="50" height="40" alt="">
  </a> 

<div id="menu">
 
      <ul>
        <li id="item-uno">
          <a href="#">NULL </a>
        </li>
 
        <li id="item-dos">
          <a href="oferta.php">OFERTAS</a>
        </li>
 
        <li id="item-tres">
          <a href="empleado.php">EMPLEADO</a>
        </li>
 
        <li id="item-cuatro">
          <a href="categoria.php">CATEGORIA</a>
        </li>

       <li id="item-cuatro">
          <a href="usuario.php">USUARIOS</a>
        </li>

      </ul>
</div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              </form>
            </div>
             <a class="navbar-brand" href="#">
                  <img src="css/campana.png" width="45" height="45" class="d-inline-block align-top" alt="">
            </a>
             <a class="navbar-brand" href="#">
                  <img src="css/pregunta.png" width="45" height="45" class="d-inline-block align-top" alt="">
            </a>
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <img src="<%=fot%>" width="55" height="55" class="d-inline-block align-top rounded-circle" alt="" style="border:#fff 1px solid;">
            </a>
             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <div class="card" style="width: 14rem;background: #fff;color: #000;">
                      <img src="<%=fot%>" class="Foto_u" alt=""/>
                    <div class="card-body">
                      <h4 class="card-title"><?php echo $nomusu;?></h4>
                      <h5 class="card-title"><?php echo $docusuario;?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#exampleModal8">
                          Ver perfil
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal9">
                          Editar perfil
                        </button>
                      <form action="indice.php">
                          <li class="list-group-item"><button class="btn btn-danger"  type="submit" name="cerrar">Cerrar sesion</button></li>
                      </form>
                    </ul>
                  </div>
                </div>
 
</nav>



<center>

<div  class="row h-100 align-items-center">


      <div class="col-2"  >     
          
          <br>
          <br>
          <br>
          <div style="padding: 10px; background-color:red;">
            <form action="" method="POST">
            <input type="submit" name="consultar"        value="OFERTAS"><br>
            <input type="submit" name="nuevo"            value="Nuevas"><br>
            </form>          


          </div>
        </div>

           
  
    <div class="col-9"  >  

          <div>
          <br>
          <br>
          <br>
          <br>
          <br>   
          </div> 
    <form action="" method= "POST">
    <div class="insertar" style="padding: 10px; background-color:white; color: white; ">


        <br><br><br>





          <?php
            if(isset($_POST['consultar'])  || isset($_POST['filtro'])) 
            {
              ?>
            
               
              
            
               <table  class="table table-hover table-dark" > 
              <?php foreach ($datos as $f) { ?>
               <tr>
                <th>Codigo</th>
                <th>Vacante </th>
                
               </tr>
               
              <tr>
                    <td><?php echo $f[0];?></td>
                      <td><?php echo $f[1];?></td>

                <form action="" method="POST">
                <td><input type="hidden" name="catid" value="<?php echo $f[0];?>"></td>
                <td><input type="submit" name="actu" value="actualizar"></td>
                <td><input type="submit" name="elimi" value="Eliminar"></td>
                </form>
                </tr>
                <tr style="background-color:white;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
              <?php 
          }
          ?>
          </table>
          <?php
          }
          ?>





        <?php if(isset($_POST['actu'])){ ?>
        <form action="" method= "POST">
          <div>             
            <h1>ACTUALIZAR</h1>
            <table class="table table-striped" style="background-color: white;width:50%;">
            <?php foreach ($data as $a) {?>
             <tr><td><label>Codigo</label>       </td><td><label><?php echo $a[0];?></label><input type="hidden" name="catid" value="<?php echo $a[0];?>"></td></tr>
             <tr><td><label>Vacante</label>      </td><td><input type="text" name="catnombre" value="<?php echo $a[1]?>"></td></tr>


              <tr><td></td><td><input type="submit" value="CONTINUAR" name="Actualizar"></td></tr>
              <?php 
              }?>
            </table> 
           </div>
          </form>
            <?php 
              }?>


         <?php if(isset($_POST['nuevo'])){ ?>
        <form action="" method= "POST">
          <div>             
            <h1>ACTUALIZAR</h1>
            <table class="table table-striped" style="background-color: white;width:50%;">
             <tr><td><label>Codigo</label>       </td><td><input type="text" name="catid" ></td></tr>
             <tr><td><label>tipo</label>      </td><td><input type="text" name="catnombre" ></td></tr>


              <tr><td></td><td><input type="submit" value="CONTINUAR" name="insertar"></td></tr>
            </table> 
           </div>
          </form>
            <?php 
              }?>     

        
        </div>
      </form>
    </div>
  </div>
</center>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
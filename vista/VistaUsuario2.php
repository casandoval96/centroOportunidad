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
                                            <a type="button" class="btn btn-primary mb-1" href="perfil.php" style="width: 98%;" >

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



<div class="row">
<div  class="row col-12"><br></div>
<div  class="row col-1"><br></div>

    <div  class="row col-2" style="border-radius: 1em; box-shadow: 10px 10px  5px 0 #4f3466ff; background-color: silver;height: 500px;">
      <div style="background-color: rgba(00,00,00,0.5); width:100%;height:30%;"> 
          <center> 
          <br>
          <br>      
          <form action="" method="POST" >
          <h3 class="text">Buscar por:</h3><input type="text" name ="buscar" class ="txt" ><br>
          <input type="submit" name="filtro" value = "buscar" class="btn-primary">
          </form>
          </center>
      </div>
      <div class="list-group">  
         <form action="" method="POST">
          <h3>Por Genero:</h3>
         <input type="submit" name="hombre"   value="Hombre"      class="btn btn-outline-dark btn-lg btn-block">
         <input type="submit" name="mujer"    value="Mujer"       class="btn btn-outline-dark btn-lg btn-block">
         <h3>Por Rol:</h3>
         <input type="submit" name="aspirante" value="Aspirante"  class="btn btn-outline-danger btn-lg btn-block " >
         <input type="submit" name="empleado" value="empleado"    class="btn btn-outline-danger btn-lg btn-block " >
         </form> 
      </div>     

    </div>

<div  class="row col-1"><br></div>
<div class="col-8" style="border-radius: 1em; box-shadow: 10px 10px  5px 0 #4f3466ff; background-color: silver;">

<br>
<br>




      <table class="table table-responsive table-dark " >
        <thead>
        <tr >
          <td>Identificacion     </td>
          <td>Tipo de documento  </td>
          <td>Nombre             </td>
          <td>Contraseña         </td>
          <td>Estado             </td>
          <td>Rol                </td>
          <td>Email              </td>
          <td>Sexo               </td>
          <td>foto               </td>
          <td>actualizar         </td>
          <td>eliminar           </td>          
        </tr>
         </thead>
         <tbody>
      <?php foreach($datos as $f) {  ?>
        <tr>
          <td><?php echo $f[0];?></td>
          <td><?php echo $f[1];?></td>
          <td><?php echo $f[2];?></td>
          <td><?php echo $f[3];?></td>
          <td><?php echo $f[4];?></td>
          <td><?php echo $f[5];?></td>
          <td><?php echo $f[6];?></td>
          <td><?php echo $f[7];?></td>
          <td><img style="width: 40px;" src="img/<?php echo $f[8];?>"></td>
          

          <form action="" method= "POST">
           <input type="hidden" name="usuid" value="<?php echo $f[0];?>">
           <td ><input  type="submit" name="actu"  value="actualizar"></td>
           <td><input type="submit" name="elimi" value="Eliminar"></td>
          </form>
        </tr>
      </tbody>
    <?php } ?>
      </table>
      <br>
      <br>

<center>
    <?php if(isset($_POST['actu'])) { ?>
         <form action="" method= "POST" enctype="multipart/form-data">
          <table class="table col-5 btn-secondary" style="border-radius: 1em; box-shadow: 10px 10px  5px 0 #4f3466ff;"> 
         <?php foreach ($data as $a) { ?> 
         <tr><td><label for="">Identificacion</label> </td>     <td><input type="number" name="usuid" class="insert" required ="" value="<?php echo $a[0];?>"></td> </tr>
         <tr><td><label for="">Tipo de documento</label></td>  <td><select id="inputState" class="form-control" name="usutipodocumento" required="">
                        <option value="cedula">cedula</option>
                        <option value="contaseña">contraseña</option>
                        <option value="pasaporte">Pasaporte</option>
        </select>
          </td> </tr>
         <tr><td><label for="">Nombre de usuario</label></td>  <td><input type="text"  name="usunombre" class="insert"  value="<?php echo $a[2];?>"  required ="" ></td> </tr>
         <tr><td><label for="">Contraseña</label></td>         <td><input type="text" name="usucontrasena" class="insert"  value="<?php echo $a[3];?>"  required =""></td> </tr>
         <tr><td><label for="">Estado</label></td>             <td><select id="inputState" class="form-control" name="usuestado" >
                        <option value="1" >activo</option>
                        <option value="0">inactivo</option>
                      </select>  
         </td> </tr>
         <tr><td><label for="">Rol</label></td>                <td><input type="text" name="usurol" class="insert"  value="<?php echo $a[5];?>"  required =""></td> </tr>
         <tr><td><label for="">Email</label> </td>              <td><input type="email"  name="usucorreo" class="insert"  value="<?php echo $a[6];?>"  required ="" ></td> </tr>
         <tr><td><label for="">Sexo</label></td>               <td><input type="text" name="ususexo" class="insert"  value="<?php echo $a[7];?>"  required =""></td> </tr>
         <tr><td><label for=""> foto</label></td>               <td> <img style="width: 40px;" src="img/<?php echo $a[8];?>">   <input type="file" name="foto"   value="<?php echo $a[8];?>"  accept="image/gif,image/jpeg,image/png,application/pdf" id="exampleInputPassword5" ></td></tr>   

          <?php } ?> 
          </table>
          <input  type="submit" value="actulizar" name="Actualizar" class = "btn btn-primary">
        </form> 









    <?php } ?>


            <div style="border-radius: 1em; box-shadow: 10px 10px  5px 0 #4f3466ff;background-color: rgba(00,00,00,0.3);">
                <form action="" method= "POST" enctype="multipart/form-data">
                 <h3>Nuevo Usuario</h3>
                  <div class="form-row" >
                    <div class="form-group col-md-6" >
                      <label for="inputEmail4">Identificacion</label>
                      <input type="number" class="form-control" name="usuid" required="" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputState">Tipo de documento</label>
                      <select id="inputState" class="form-control" name="usutipodocumento" required="">
                        <option value="cedula">cedula</option>
                        <option value="contaseña">contraseña</option>
                        <option value="pasaporte">Pasaporte</option>
                      </select>
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Nombre </label>
                    <input type="text" class="form-control" name="usunombre" required="">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">Contraseña</label>
                      <input type="password" class="form-control" name="usucontrasena" required="">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputState">Estado</label>
                      <select id="inputState" class="form-control" name="usuestado" >
                        <option value="1" >activo</option>
                        <option value="0">inactivo</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputState">Rol</label>
                      <select id="inputState" class="form-control" name="usurol" >
                        <option value="aspirante">aspirante</option>
                        <option value="empleado">empleado</option>
                      </select>
                    </div>
                  </div>
                   <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" name="usucorreo" required="">s
                      </div>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputState">Sexo</label>
                      <select id="inputState" class="form-control" name="ususexo" >
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                      </select>
                      <input type="hidden"  name="usu">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputEmail4" class="col-sm-2 col-form-label" >FOTO</label>
                      <div class="col-sm-10">
                        <input type="file" name="foto" accept="image/gif,image/jpeg,image/png,application/pdf" id="inputEmail4">
                      </div>
                    </div>                  
                </div>
                  <input  type="submit"   name="insert" class="btn btn-primary">
                </form>
<div>  
</center>
</div>     
</div>

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
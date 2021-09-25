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
      <a href="empleado.php"    type="button" class="btn btn-danger">Empleado</a>  
    </div>
    </nav>

    <div id="main">
    </div>

<center>
<div class="col-10" style="border-radius: 1em; box-shadow: 10px 10px  5px 0 #4f3466ff; background-color: silver;">


        <br><br><br>
              
       <?php foreach ($datos as $f) { ?>            
               <table  class="table table-responsive table-striped table-dark" > 
 
               <tr>
                <th>Codigo</th>
                <th>Entidad </th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Salario</th>
                <th>Nivel de esudio</th>
                <th>Categoria</th>
                <th>Experiencia</th>
                <th>Fecha</th>
                <th>Actualizar</th>
                <th>Eliminar</th>                                
               </tr>
                 
                <tr>
                     <td><?php echo $f[0];?></td>
                      <td><?php echo $f[1];?></td>
                      <td><?php echo $f[2];?></td>
                      <td><?php echo $f[3];?></td>
                      <td><?php echo $f[4];?></td>
                      <td><?php echo $f[5];?></td>
                      <td><?php echo $f[6];?></td>
                      <td><?php echo $f[7];?> meses </td>
                      <td><?php echo $f[8];?></td>

                <form action="" method="POST">
                <input type="hidden" name="ofeid" value="<?php echo $f[0];?>">
                <td><input type="submit" name="actu" value="actualizar"></td>
                <td><input type="submit" name="elimi" value="Eliminar"></td>
                </form>
                </tr>
                
 
          </table>
           <br><br>
             <?php 
          }
          ?>



        <?php if(isset($_POST['actu'])) { ?>
        <form action="" method= "POST">
          <div>             
            <h1>ACTUALIZAR</h1>
            <table class="table table-striped" style="background-color: white;width:50%;">
            <?php foreach ($data as $a) {?>
             <tr><td><label>Codigo</label>       </td><td><label><?php echo $a[0];?></label><input type="hidden" name="ofeid" value="<?php echo $a[0];?>"></td></tr>
             <tr><td><label>Entidad</label>      </td><td><input type="text" class="form-control" required="" name="ofeentidad" value="<?php echo $a[1]?>"></td></tr>
             <tr><td><label>Nombre</label>      </td><td><input type="text" class="form-control" required="" name="ofenombre" value="<?php echo $a[2]?>"></td></tr>
             <tr><td><label>Descripcion</label>  </td><td><input type="text" class="form-control" required="" name="ofedescripcion" value="<?php echo $a[3]?>"></td></tr>
             <tr><td><label>Salario</label> </td><td><input type="number" class="form-control" required="" name="ofesalario" value="<?php echo $a[4]?>"></td></tr>
             <tr><td><label>Estudios</label>    </td><td><select class="form-control" name="ofeidnivel" >
              <option value="<?php echo $a[5];?>"><?php echo $a[5];?></option>
               <?php
               foreach ($nive as $f)
                {?>
                  <option value="<?php echo $f[0];?>"><?php echo $f[1];?></option>
                  <?php
                }
                ?>

             <tr><td><label>Categoria</label>    </td><td><select name="ofeidcategoria" >
              <option value="<?php echo $a[6];?>"><?php echo $a[6];?></option>
               <?php
               foreach ($cate as $f)
                {?>
                  <option value="<?php echo $f[0];?>"><?php echo $f[1];?></option>
                  <?php
                }
                ?>
              </select></td></tr>
             <tr><td><label>Experiencia</label>    </td><td><input type="number" required="form-control" name="ofeexperiencia" value="<?php echo $a[7]?>" ></td></tr>
             <tr><td><label>Fecha </label>    </td><td><input type="date" class="form-control" required="" name="ofefecha" value="<?php echo $a[8]?>"></td></tr>


              <tr><td></td><td><input type="submit" value="CONTINUAR" name="Actualizar"></td></tr>
            </table>
              <?php 
              } ?>
             
           </div>
          </form>
            <?php 
              } ?>

            <form action="" method="POST">
            <table class="table table-striped" style="background-color: white;width:60%;">


             <tr><td><label>Codigo</label>       </td><td><input type="hidden" class="form-control" required="" name="ofeid"></td>
             <td><label>Entidad</label>      </td><td><input type="text" class="form-control" required="" name="ofeentidad" required=""></td></tr>
             <tr><td><label>Nombre</label>      </td><td><input type="text" class="form-control" required="" name="ofenombre" required=""></td>
             <td><label>Descripcion</label>  </td><td><input type="text" class="form-control" required="" name="ofedescripcion" required=""></td></tr>
             <tr><td><label>Salario</label> </td><td><input type="number" class="form-control" required="" name="ofesalario" required=""></td>
             <td><label>Estudios</label>    </td><td><select name="ofeidnivel" class="form-control" >
               <?php
               foreach ($nive as $f)
                { ?>
                  <option value="<?php echo $f[0];?>"><?php echo $f[1];?></option>
                  <?php
                }
                ?>
             </select></td></tr>   
             <tr><td><label>Categoria</label>    </td><td><select name="ofeidcategoria" class="form-control" >
               <?php
               foreach ($cate as $f)
                {?>
                  <option value="<?php echo $f[0];?>"><?php echo $f[1];?></option>
                  <?php
                }
                ?>
              </select></td>
             <td><label>Experiencia</label>    </td><td><input type="number" class="form-control" required="" name="ofeexperiencia" required=""></td></tr>
             <tr><td><label>Fecha </label>    </td><td><input type="date" class="form-control" required="" name="ofefecha" ></td>

            <form action="" method="POST">  
              <td></td><td><input type="submit" value="insertar" name="insertar"></td></tr>
            </form>

            </table>
            </form>
        </div>

</center>
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



      </script>


  </body>
</html>
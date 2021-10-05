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
                                            <a type="button" class="btn btn-primary mb-1" href="perfil.php" style="width: 99%;" >

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
      <a href="Usuario2.php"     type="button" class="btn btn-dark" style="border-radius:  12px ;" >Usuarios</a>
      <a href="oferta.php"       type="button" class="btn btn-dark" style="border-radius:  12px ;" >Oferta</a>
      <a href="aplicaciones2.php" type="button" class="btn btn-dark" style="border-radius: 12px ;">Aplicaciones</a> 
      <a href="finalista.php" type="button" class="btn btn-dark" style="border-radius: 12px ;">Entrevistas finalistas </a>  
    </div>
    </nav> 

<div class="row">
<div class="col-12">
  <br><br>
</div>  

<div class="col-1">
</div>  

<div class="col-3" >
        
        <?php $cont=0; foreach ($ofer as $f) {  $cont++; ?> 

        <div class="card text-center text-silver alert-danger mb-3" style="border-radius: 3em; box-shadow: 10px 10px  5px 0 #4f3466ff;">
          <div class="card-header">
            Oferta <?php echo $f[0];?>
          </div>
            <div class="card-body text-white bg-dark">
              <h3 class="card-title"><?php echo $f[2];?></h3>
              <p class="card-text "> Empresa <?php echo $f[1];?> informa de <?php echo $f[3];?> con salario de  <?php echo $f[4];?> pesos</p>
              <h6 class="card-title">REQUISITOS</h6>
               Estudios Minimos <?php echo $f[5];?><br>
               Experiencia de <?php echo $f[7];?> meses <br>
               En Areas  de <?php echo $f[6];?>
            </div>
              <div class="card-footer text-muted">
                    <form action="" method="POST">
                    <input type="hidden" name="ofeid" value="<?php echo $f[0];?>">
                    <input type="hidden" name="estudios" value="<?php echo $f[5];?>">

                    <td><input type="submit" name="actu" value="ver aplicados"></td>
                    </form>          
              </div>
        </div>

        <br>
        <?php } ?>
                      
</div>
<div class="col-7">
<center>
  
    <?php if(isset($_POST['actu'])) { ?>

     
     <table class="table table-striped table-dark" >
     <tr>
     <td><label>Aplicacion</label></td>    
     <td><label >Oferta</label></td>       
     <td><label >Fecha</label></td>        
     <td><label >Hora</label></td>         
     <td><label >Hoja de vida</label></td>
      </tr>w
     <?php foreach ($data as $a) { ?>
     <tr>   
     <td><label><?php echo $a[0];?></label></td>
     <td><label><?php echo $a[1];?></label></td>
     <td><label><?php echo $a[2];?></label></td>
     <td><label><?php echo $a[3];?></label></td>
     <td><label><?php echo $a[4];?></label></td>
       <form action="" method="POST">
       <input type="hidden" name="aplhojadevida" value="<?php echo $a[4];?>">  
       <input type="hidden" name="apliide" value="<?php echo $a[0];?>">
       <td><input type="submit" name="ver" value="ver perfil"></td>
       </form>     
     </tr>
     <?php } ?>
     </table>
 
    <?php } ?>
 



      <?php if(isset($_POST['ver'])) { ?>   
                <div class=" text-center  btn-secondary  text-white" style="border-radius: 1em; box-shadow: 10px 10px  5px 0 #4f3466ff;">
                  <div class="card-header btn" >
                  <h4>DATOS PERSONALES</h4>
                  </div>
                  <div class="card-body ">
                    


                        <?php foreach($datohoj as $f) { ?>
                            <table id="table1" style="width: 100%;"   >
                          <tr>
                            <td><label>Identificacion :     </label><?php echo $f[0];?></td>
                            <td><label>Tipo de documento :  </label><?php echo $f[1];?></td>
                          </tr><tr>  
                            <td><label>Lugar de nacimiento :</label><?php echo $f[2];?></td>  
                            <td><label>Nombres :            </label><?php echo $f[3];?></td>
                          </tr><tr>  
                            <td><label>Apellidos :          </label><?php echo $f[4];?></td>
                            <td><label>Fecha De Nacimiento :</label><?php echo $f[5];?></td>
                          </tr><tr>
                            <td><label>Lugar de nacimiento :</label><?php echo $f[6];?></td>
                            <td><label>Sexo :               </label><?php echo $f[7];?></td>
                          </tr><tr>
                            <td><label>Estado Civil :       </label><?php echo $f[8];?></td>
                            <td><label>Telefono :           </label><?php echo $f[9];?></td>
                          </tr><tr>
                            <td><label>Direccion :          </label><?php echo $f[10];?></td>
                            <td><label>Email :              </label><?php echo $f[11];?></td>
                          </tr><tr>  
                            <td><label>Licencia :           </label><?php echo $f[12];?></td>
                            <td><label>Vehiculo :           </label><?php echo $f[13];?></td>
                          </tr>
                            
                        </table>
                               




                           <?php } ?>



                  <?php 
                  $cont=0; 
                  foreach($datoest as $f) {
                  $cont++; 
                    ?>
                  <div class="card text-center btn-light">
                    <div class="card-header btn" >
                    <h4>ESTUDIOS<?php echo $cont; ?></h4>
                    </div>
                    <div class="card-body ">
              
                                                      
                              <table id="table1" style="width: 100%;"   >
                            <tr>
                              <td><label>Codigo :            </label><?php echo $f[0];?></td>
                              <td><label>Ientificacion :     </label><?php echo $f[1];?></td>
                            </tr><tr>  
                              <td><label>Nivel de  estudios :</label><?php echo $f[2];?></td>  
                              <td><label>Titulo:             </label><?php echo $f[3];?></td>
                            </tr><tr>  
                              <td><label> Institucion:       </label><?php echo $f[4];?></td>   
                            </tr>
                              
                          </table>        
                          
                    </div>
                    <div class="card-footer text-muted">
                     <?php echo $f[2];?>   
                        <h3>Aplicabilidad</h3>  
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                        </div>
                    </div>
                  </div>


                  <?php } ?>


                <?php 
                $cont=0; 
                foreach($datoexp as $f) {
                $cont++; 
                  ?>
                <div class="card text-center btn-light">
                  <div class="card-header btn" >
                  <h4>EXPERIENCIA<?php echo $cont; ?></h4>
                  </div>
                  <div class="card-body ">
            
                        
                            <table id="table1" style="width: 100%;"   >
                          <tr>
                            <td><label>Codigo :            </label><?php echo $f[0];?></td>
                            <td><label>Ientificacion :     </label><?php echo $f[1];?></td>
                          </tr><tr>  
                            <td><label>Empresa uno :       </label><?php echo $f[2];?></td>  
                            <td><label>Categoria:          </label><?php echo $f[3];?></td>
                          </tr><tr>  
                            <td><label> Cargo:             </label><?php echo $f[4];?></td>
                            <td><label> Fecha de ingreso : </label><?php echo $f[5];?></td>
                          </tr><tr>  
                            <td><label> Fecha de salida:   </label><?php echo $f[6];?></td>
                            <td><label> Funciones      :   </label><?php echo $f[7];?></td>                            
                          </tr>
                            
                        </table>        
                        
                  </div>
                  <div class="card-footer text-muted">

                    <div class="card-footer text-muted">
                     <?php echo $f[0];?>   

                          <h3>Aplicabilidad</h3>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                  </div>
                </div>
                <?php } ?>

                       
                  </div>
                  <div class="card-footer text-muted">
                  </div>
                </div> <br>


                               <form action="" method="POST">
                               <?php foreach($datohoj as $f) { ?> 
                               <input type="text" name="apliide" value="<?php echo $f[0];?>">
                               <input type="hidden" name="numaplicacion" value="<?php echo $aplicacion;?>">  
                             <?php } ?>
                               <td><input type="submit" name="agendar" value="Agendar Cita"></td>

                               </form>
     


      <?php } ?>            

     <?php if(isset($_POST['agendar'])) { ?>



    
   <div class="col-12 alert-warning">
     <h2>Escoga seleccionador,fecha y hora de la cita</h2>
      <form action="" method="POST">
      <input type="hidden" class="btn form-control" name="finide" value="0">
      <input type="hidden" class="btn-secondary form-control"  name="finaplid" value="<?php echo $numaplicacion;?>">      
      <table class="table table-striped">
      <td><select name="finseleccionador" class="btn-secondary  form-control">
              
               <?php foreach ($datospsi as $f) { ?>
                  <option value="<?php echo $f[0];?>"><?php echo $f[2];?></option>
                  <?php } ?>
      </select></td>
          <?php
            // Obteniendo la fecha actual del sistema con PHP
            $fechaActual = date('d-m-Y');
          ?>
   

      <td><input type="date" class="btn-secondary form-control"  name="finfecha" min="<?php echo $fechaActual;?>" >   </td>
      <td><input type="time" class="btn-secondary form-control"  name="finhora" ></td>      
      </table>
      <td><input type="submit" name="insertarfinalista" value="Registar"></td>
      </form>
   </div>


<br><br>
<?php foreach($datosfin as $f) { ?>
  <h2>Citas Agendadas <?php echo $f[8];?> </h2>
 <table class="table table-hover table-secondary col-12" >
  <thead>
    <tr>
      <th scope="col">Cita Numero</th>
      <th scope="col">Entidad</th>
      <th scope="col">Cargo</th>
    </tr>
  </thead> 
  <tbody class="">
    <form action="" method= "POST">  
    <tr>
      <td><input type="text" class="btn form-control"  name="finide"       value="<?php echo $f[0];?>"  readonly></td>
      <td><input type="text" class="btn form-control"  name="finaplid"     value="<?php echo $f[1];?>"  readonly></td>
      <td><input type="text" class="btn form-control"  name="finpsicologo" value="<?php echo $f[2];?>"  readonly></td> 
    </tr>
      <thead>
      <tr>
        <th scope="col">Descripcion</th>
        <th scope="col">Seleccionador</th>
        <th scope="col">Fecha de la cita </th>
      </tr>
      </thead>     
    <tr>
      <td><input type="text" class="btn form-control"  name="finfecha"     value="<?php echo $f[3];?>"  readonly></td>
      <td><input type="text" class="btn form-control"  name="finhora"      value="<?php echo $f[4];?>"  readonly></td>       
      <td><input type="text" class="btn form-control"  name="finaplid"     value="<?php echo $f[5];?>"  readonly></td>    
    </tr>
    <thead>
      <tr>
        <th scope="col">Hora</th>
        <th scope="col">Decision </th>
      </tr>
      </thead>     
    <tr>
      <td><input type="text" class="btn form-control"  name="finfecha"     value="<?php echo $f[6];?>"  readonly></td>
      <td><input type="text" class="btn form-control"  name="finhora"      value="<?php echo $f[7];?>"  readonly></td>           
    </tr>
    </form>
  </tbody>
</table>
<?php }  ?>
<?php } ?>

 </center>
 </div>

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


      </script>

  </body>

</html>
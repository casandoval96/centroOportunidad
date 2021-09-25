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
     
   <nav class="topnav navbar navbar-dark " style="background-color:#111;" > 


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
      <a href="oferta2.php" type="button" class="btn btn-secondary">Buscar ofertas</a>
      <a href="aplicaciones.php" type="button" class="btn btn-secondary">Aplicaciones</a>
      <a href="aspirante.php" type="button" class="btn btn-secondary">Aspirante</a>

    </div>
    </nav> 
     
    <div id="main">
    </div>

<center>

<div class="col-9 btn-primary">
<br>

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
     

                <div class="card text-center btn-light">
                  <div class="card-header btn" >
                  <h4>DATOS PERSONALES</h4>
                  </div>
                  <div class="card-body ">
            
                        <?php foreach($datos as $f) {?>
                            <table id="table1" style="width: 100%;"   >
                          <tr>
                            <td><label>Identificacion :     </label><?php echo $f[0];?></td>
                            <td><label>Tipo de documento :  </label><?php echo $f[1];?></td>
                          </tr><tr>  
                            <td><label>Lugar de expedicion :</label><?php echo $f[2];?></td>  
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
                  </div>
                  <div class="card-footer text-muted">
                  </div>
                </div>




             

      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         ACTUALIZAR DATOS PERSONALES
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">

         <form action="" method= "POST">
          <table class="table  table-dark" style="width: 95%;"> 
         <?php foreach ($datos as $a) { ?> 
         <tr><td><label for="">Identificacion</label> </td>   <td><label><?php echo $a[0];?></label><input type="hidden" name="hojid" class="form-control" value="<?php echo $a[0];?>"></td> 
         <td><label for="">Tipo de documento</label></td>     <td><select name="hojtipodocumento" class="form-control" > 
         <option value="<?php echo $a[1];?>"><?php echo $a[1];?></option>
         <option value="Cedula de ciudadania" >Cedula de ciudadania </option>
         <option value="Cedula de extranjeria">Cedula de extranjeria </option>
         <option value="Tarjeta de identidad" >Tarjeta de identidad </option>
         <option value="Pasaporte">Pasaporte </option>
         <option value="Numero Identificacion">Numero Identificacion </option>         
        </select>

         </td> </tr>
         <tr><td><label for="">Lugar de expedicion</label></td> <td><input type="text" name="hojlugarexpedicion" class="form-control" value="<?php echo $a[2];?>"required pattern ="[a-z A-Z]+" > </td> 
         <td><label for="">Nombres</label></td>             <td><input type="text"  name="hojnombres" class="form-control"  value="<?php echo $a[3];?>"  required ="" ></td> </tr>
         <tr><td><label for="">Apellidos</label></td>           <td><input type="text"  name="hojapellidos" class="form-control"  value="<?php echo $a[4];?>"  required ="" ></td> 
         <td><label for="">Fecha de nacimiento</label></td> <td><input type="date"  name="hojfechadenaci" class="form-control"  value="<?php echo $a[5];?>"  required ="" ></td> </tr>
         <tr><td><label for="">lugar de nacimiento</label></td> <td><input type="text"  name="hojlugardenaci" class="form-control"  value="<?php echo $a[6];?>"  required =""></td> 
         <td><label for="">Sexo</label></td>               <td><select   name="hojsexo" class="form-control">
         <option value="<?php echo $a[7];?>" ><?php echo $a[7];?></option>
         <option value="Hombre" >Hombre</option>
         <option value="Mujer" >Mujer</option> 
         </td> </tr>
         <tr><td><label for="">Estado Civil</label></td>        <td><select   name="hojestadocivil" class="form-control">
         <option value="<?php echo $a[8];?>" ><?php echo $a[8];?></option>
         <option value="Soltero(a)">Soltero(a)</option>
         <option value="Casado(a)">Casado(a)</option>
         <option value="Divorciado(a)">Divorciado(a)</option>
         <option value="Viudo(a)">Viudo(a)</option>          
           
         </td> 
         <td><label >Telefono</label> </td>           <td><input type="number" name="hojtelefono" class="form-control"  value="<?php echo $a[9];?>"  required ="" ></td> </tr>
         <tr><td><label >Direccion</label></td>       <td><input type="text"  name="hojdireccion" class="form-control"  value="<?php echo $a[10];?>"  required =""></td> 
         <td><label >Email</label></td>               <td><input type="email"  name="hojemail" class="form-control"  value="<?php echo $a[11];?>"  required =""></td> </tr>
         <tr><td><label >Licencia</label> </td>       <td>
             
              <div class="row">
               <div class="col-sm-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="hojlicencia" id="gridRadios1" value="A1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      A1
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="hojlicencia" id="gridRadios2" value="B3">
                    <label class="form-check-label" for="gridRadios2">
                    B3
                    </label>
                  </div>
                </div>
               <div class="col-sm-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="hojlicencia" id="gridRadios1" value="A2" checked>
                    <label class="form-check-label" for="gridRadios1">
                      A2
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="hojlicencia" id="gridRadios2" value="C1">
                    <label class="form-check-label" for="gridRadios2">
                      C1
                    </label>
                  </div>
                </div>
               <div class="col-sm-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="hojlicencia" id="gridRadios1" value="B1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      B1
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="hojlicencia" id="gridRadios2" value="C2">
                    <label class="form-check-label" for="gridRadios2">
                      C2
                    </label>
                  </div>
                </div>
               <div class="col-sm-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="hojlicencia" id="gridRadios1" value="B2" checked>
                    <label class="form-check-label" for="gridRadios1">
                      B2
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="hojlicencia" id="gridRadios2" value="C3">
                    <label class="form-check-label" for="gridRadios2">
                      C3
                    </label>
                  </div>
                </div>              
              </div>




          </td> 
         <td><label >Vehiculo</label></td>            <td>
              <div class="row">
               <div class="col-sm-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="hojvehiculo" id="gridRadios1" value="SI" checked>
                    <label class="form-check-label" for="gridRadios1">
                      SI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="hojvehiculo" id="gridRadios2" value="NO">
                    <label class="form-check-label" for="gridRadios2">
                    NO
                    </label>
                  </div>
                </div>
              </div>
         </td></tr>      
          
          <?php } ?> 
          </table>
          <input  type="submit" value="actulizar" name="Actualizar" class = "btn btn-secondary">
        </form>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">


                <?php 
                $cont=0; 
                foreach($datosest as $f) {
                $cont++; 
                  ?>
                <div class="card text-center bg-secondary">
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
                            <td>  
                              <form action="" method= "POST">
                              <input type="hidden" name="estid" value="<?php echo $f[0];?>">
                              <input type="submit" name="eliminarest" value="Eliminar">
                              </form>
                            </td>
                            

                          </tr>
                            
                        </table>        
                        
                  </div>
                  <div class="card-footer text-muted">
                  </div>
                </div>
                <?php } ?>



      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Ingresar Nuevo Estudio
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">

          <form action="" method="POST">
            <table class="table  table-dark" style="width: 50%;"> 
             <tr><td><label for="">Codigo     </label> </td>     <td><input type="hidden" name="estid" class="insert" required ="" ></td> </tr>
             <tr><td><label for="">Identificacion</label></td>   <td><label><?php echo $docusuario;?></label><input type="hidden" name="esthojaid"  class="form-control" value="<?php echo $docusuario;?>"> </td> </tr>
             <tr><td><label for="">Nivel      </label></td> <td><select name="estnivel"  class="form-control"  required ="">
               <?php
               foreach ($datosniv as $f)
                { ?>
                  <option value="<?php echo $f[0];?>"><?php echo $f[1];?></option>
                  <?php
                }
                ?>
              </select>
             </td> </tr>
             <tr><td><label for="">Titulo     </label></td>             <td><input type="text"  name="estnomtitulo"  class="form-control"   required ="" ></td> </tr>
             <tr><td><label for="">Institucion</label></td>           <td><input type="text"  name="estinstitucion"  class="form-control"   required ="" ></td> </tr>
             </table>         
             <input  type="submit" value="Aceptar" name="Aceptarest" class = "btn btn-secondary">
          </form>   

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">


                <?php 
                $cont=0; 
                foreach($datosexp as $f) {
                $cont++; 
                  ?>
                <div class="card text-center bg-primary">
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
                            <td>  
                              <form action="" method= "POST">
                              <input type="hidden" name="expid" value="<?php echo $f[0];?>">
                              <input type="submit" name="eliminarexp" value="Eliminar">
                              </form>
                            </td>
                            

                          </tr>
                            
                        </table>        
                        
                  </div>
                  <div class="card-footer text-muted">
                  </div>
                </div>
                <?php } ?>


      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Ingresar Nueva Eperiencia
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">

          <form action="" method="POST">
            <table class="table  table-dark" style="width: 50%;"> 
             <tr><td><label for="">Codigo     </label> </td>     <td><input type="hidden" name="expid"  class="form-control" required ="" ></td> </tr>
             <tr><td><label for="">Identificacion</label></td>   <td><label><?php echo $docusuario;?></label><input type="hidden" name="exphojaid" class="insert" value="<?php echo $docusuario;?>"> </td> </tr>
             <tr><td><label for="">Empresa</label></td>         <td><input type="text" name="expempresauno"  class="form-control"  > </td></tr>

             <tr><td><label for="">Categoria  </label></td> <td><select name="expcategoria" required ="">
               <?php
               foreach ($datoscat as $f)
                { ?>
                  <option value="<?php echo $f[0];?>"><?php echo $f[1];?></option>
                  <?php
                }
                ?>
              </select>
             </td> </tr>
             <tr><td><label for="">Cargo           </label></td>             <td><input type="text"  name="expcargo"  class="form-control"     required ="" ></td> </tr>
             <tr><td><label for="">Fecha de ingreso</label></td>           <td><input type="text"  name="expfechadeingreso"  class="form-control"     required ="" ></td> </tr>
             <tr><td><label for="">Fecha de salida </label></td>             <td><input type="text"  name="expfechasalida"  class="form-control"     required ="" ></td> </tr>
             <tr><td><label for="">Funciones       </label></td>           <td><input type="text"  name="expfunciones"  class="form-control"    required ="" ></td> </tr>

             </table>         
             <input  type="submit" value="Aceptarr" name="Aceptarexp" class = "btn btn-secondary">
          </form>


      </div>
    </div>
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







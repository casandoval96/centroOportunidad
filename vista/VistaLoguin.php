<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Centrooportunidad</title>
        <link rel="stylesheet" type="text/css" href="vista/estilologuin.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/9f31a8a816.js"></script>
    </head>

    <!--body style="background: url('https://www.wallpaperup.com/uploads/wallpapers/2014/01/10/222429/2d539a7f7017db4a713ab4aafba5f5ac-700.jpg')no-repeat center top fixed; background-size: cover;" >

       < <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Incorrecto!</strong>  El <b>usuario</b> y la <b>contraseña</b> no coinciden. Por favor intentelo de nuevo.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> >
        
      <center> 
      <div  class="row h-100 align-items-center">

      <div class="col-2">  
      </div>

      <div class="col-4 elegant-color-dark">     
        <div class="text-white font-weight-bolder bg-dark "  style="background-color: rgba(0,62,127,0.9);" >
          <h1 style="color: black;" >CENTROOPORTUNIDAD</h1>   
        </div>  
         <br>
         <br>
         <br>
        <div class="card text-white" style="padding: 10px; background-color: rgba(0,128,128,0.8); ">
          <form action="" method="POST" class="Content" >
             <div class="form-group ">
                <input type="text" class="form-control input-lg" id="exampleInputEmail1" name="nombre" placeholder="Usuario" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control input-lg" id="exampleInputPassword1" name="contrasena" placeholder="Contraseña" required="">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
            </div>
            <button type="submit" class="btn btn-secondary btn-block" name="entrar">Ingresar</button>
          
          </form>
        </div>
      </div>

    
    <div class="col-2">
    </div>
  
    <div class="col-3"  >  
    <form action="" method= "POST" enctype="multipart/form-data">
          <div>
          <br>
          <br>
          <br>
          <br>
          <br>   
          </div> 
      <div class="insertar" style="padding: 10px; background-color:blue; color: white; ">

      <h1>Crear Cuenta</h1>
      <h3>Es rapido y facil</h3>

       <input type="number" class="form-control" placeholder="Identificacion" name="usuid" required=""><br>
       <select id="inputState" class="form-control" name="usutipodocumento" required="">
         <option value="cedula">cedula</option>
         <option value="contaseña">contraseña</option>
         <option value="pasaporte">Pasaporte</option>
       </select><br>
       <input type="text" class="form-control" placeholder="Nombre"         name="usunombre" required="" ><br>
       <input type="password" class="form-control" placeholder="Contraseña" name="usucontrasena" required=""><br>
       <input type="email" class="form-control" placeholder="Correo"         name="usucorreo" required=""><br>
       <select type="text" class="form-control" placeholder="Sexo"          name="ususexo" required="">
         <option value="Hombre">Hombre</option>
         <option value="Mujer" >Mujer</option></select><br>
      <input type="hidden" class="form-control" placeholder="Estado"       name="usuestado"  value="1">
       <input type="hidden" class="form-control" placeholder="aspirante"    name="usurol" value="Aspirante">
       <input type="hidden" class="form-control"  name="usu">
       <input type="file" name="foto" accept="image/gif,image/jpeg,image/png,application/pdf" id="exampleInputPassword5" required="" ><br><br>


       <input type="submit" value="Registrar" class="btn btn-secondary btn-block" name="insert"><br>
       </form>

    </div> 
    </div-->

<body> 
<br>
<div class="login-wrap">
<div class="login-html">
<center>
<h2 class="text-white" >CENTROOPORTUNIDAD</h2>
</center>  

    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar Sesion</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
    <div class="login-form">
      <form action="" method="POST">
      <div class="sign-in-htm">
        <div class="group">
          <label for="user" class="label">Usuario</label>
          <input id="user" type="text" class="input" name="nombre">
        </div>
        <div class="group">
          <label for="pass" class="label">Contraseña</label>
          <input id="pass" type="password" class="input" name="contrasena" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Recordar mi contraseña</label>
        </div>
        <div class="group">
          <input type="submit" class="button"  name="entrar" value="Entrar">
        </div>
        
      </div>
    </form>


      <form action="" method= "POST" enctype="multipart/form-data">
    
      <div class="sign-up-htm">
        <div class="group">
          <label for="user" class="label">Identificacion</label>
          <input id="user" type="text" class="input" name="usuid">
        </div>
        <div class="group">
        <label for="pass" class="label">Tipo de documento</label>
         <select id="pass" type="text-dark" class="input" data-type="text-dark" name="usutipodocumento" required="">
           <option style="color: black;" value="cedula">cedula</option>
           <option style="color: black;" value="contaseña">contraseña</option>
           <option style="color: black;" value="pasaporte">Pasaporte</option>
         </select>
        </div>
        <div class="group">
          <label for="pass" class="label">Usuario</label>
          <input id="pass" type="text-danger" class="input" data-type="text-danger" name="usunombre" >
        </div>
        <div class="group">
          <label for="pass" class="label">Contraeña</label>
          <input id="pass" type="password" class="input"  name="usucontrasena">
        </div>
        <div class="group">
          <label for="pass" class="label">Correo</label>
          <input id="pass" type="email" class="input"  name="usucorreo">
        </div>
        <div class="group">
           <label for="pass" class="label">Sexo</label>
           <select id="pass" type="text-dark" class="input" name="ususexo"  required="">
           <option style="color: black;" value="Hombre">Hombre</option>
           <option style="color: black;" value="Mujer" >Mujer</option></select>
        </div>
       <input type="hidden"  placeholder="Estado"       name="usuestado"  value="1">
       <input type="hidden"  placeholder="aspirante"    name="usurol" value="Aspirante">
       <input type="hidden"  name="usu">
       <input type="hidden"  name="foto" accept="image/gif,image/jpeg,image/png,application/pdf" id="exampleInputPassword5" value="defecto.png" >                
        <div class="group">
          <input type="submit" name="insert" class="button" value="Registrarse">
        </div>
      </div>
      </form>
    </div> 
  </div>  
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





    


      

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
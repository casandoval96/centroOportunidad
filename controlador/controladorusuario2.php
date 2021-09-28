<?php     
require_once('modelo/ModeloUsuario.php');
require_once('Modelo/ModeloAspirante.php');
require_once('Modelo/ModeloHojadevida.php');

$usu = new modeloUsuario();
$asp = new modeloAspirante();
$hoj = new modeloHojadevida();


$datos=$usu->consultarusuarios();


session_start(); 
if(!$_SESSION){
echo"<script>alert('usuario no autenticado');self.location='indice.php'</script>";
}else{
        $fotousu=$_SESSION['foto'];
        $nomusu=$_SESSION['nomusu'];
        $oficio=$_SESSION['oficio'];
        $docusuario=$_SESSION['doc_usuario'];

    
    $ide=$_SESSION['doc_usuario'];
}




if(isset($_POST['insert']))
{
     $usuid = $_POST['usuid'];
     $usutipodocumento = $_POST['usutipodocumento'];
     $usunombre = $_POST['usunombre'];
     $usucontrasena = $_POST['usucontrasena'];
     $usuestado = $_POST['usuestado'];
     $usurol = $_POST['usurol'];
     $usucorreo = $_POST['usucorreo'];
     $ususexo = $_POST['ususexo'];
     $adjunto = $_FILES['foto']['name'];
     $tipo = $_FILES['foto']['type'];
     $tam = $_FILES['foto']['size'];

     $idUsuario=$usu->unousu($usuid);
     if(count($idUsuario)>0){
        echo "<script> 
            alert('El numero de usuario ya existe')
        </script>";
     } else {
        if($adjunto!=null)
        {
        if($tipo=="image/gif"|| $tipo=="image/png"||$tipo=="image/jpeg"){
            if($tam<=1000000)
            {
            $hoy=date('dmy');
            $adjunto=$hoy."_".$usuid."_".$adjunto;
            $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/cristian/bolsa de empleo2/img/';
            $insertar= $usu->Insertarusu($usuid,$usutipodocumento,$usunombre,$usucontrasena,$usuestado,$usurol,$usucorreo,$ususexo,$adjunto);
            if($insertar >0)
        { 
        move_uploaded_file($_FILES['foto']['tmp_name'],$carpeta_destino.$adjunto);
        echo "<script>alert ('registrado Correctamente')  </script>";
        } else {
        echo "<script>alert ('No se pudo registrar')  </script>"; 
        
        }//tamaño
        } else {
            echo "<script>alert ('el tamaño de la imagen es muy grande ')  </script>";
        }//tipo 
        }else {
            echo "<script>alert (' el tipo del archivo no es compatible ')  </script>";
        }
        } else {
        $adjunto="defecto.png";
        $insertar= $usu->Insertarusu($usuid,$usutipodocumento,$usunombre,$usucontrasena,$usuestado,$usurol,$usucorreo,$ususexo,$adjunto);
        }  
        if($insertar >0)
        {
            echo "<script>  alert ('Registrado Correctamente')</script>";
        }
        else
        {
            echo "<script>  alert (' No se pudo registrar')</script>";
        }
    }
}


if(isset($_POST['insert']))
{
     $aspcedulaaspirante = $_POST['usuid'];
     $aspnombre = $_POST['usunombre'];
     $asprol = $_POST['usurol'];
     $aspgenero = $_POST['ususexo'];        

     $idAspirante=$asp->uno($aspcedulaaspirante);
     if(count($idAspirante)>0){
        echo "<script>alert  $('.alert').alert();  </script>";
     } else {
        $insertar= $asp->Insertarasp($aspcedulaaspirante,$aspnombre,$asprol,$aspgenero);
                
        if($insertar >0)
        {
            echo "<script>  alert ('Registrado Correctamente')</script>";
        }
        else
        {
            echo "<script>  alert (' No se pudo registrar')</script>";
        }
    }
}



if(isset($_POST['insert']))
{
    
     $hojid = $_POST['usuid'];
     $hojtipodocumento = $_POST['usutipodocumento'];
     $hojnombres = $_POST['usu'];      
     $hojlugarexpedicion = $_POST['usu'];
     $hojapellidos = $_POST['usu'];
     $hojfechadenaci = $_POST['usu'];
     $hojlugardenaci = $_POST['usu'];
     $hojsexo = $_POST['usu'];
     $hojestadocivil = $_POST['usu'];      
     $hojtelefono = $_POST['usu'];
     $hojdireccion = $_POST['usu'];
     $hojemail = $_POST['usu'];
     $hojlicencia = $_POST['usu'];
     $hojvehiculo = $_POST['usu'];
     $idHoja=$hoj->uno($hojid);
     if(count($idHoja)>0){
        echo "<script>  $('.alert').alert();  </script>";
     } else {

        $insertar= $hoj->Insertarhoj($hojid,$hojtipodocumento,$hojnombres,$hojlugarexpedicion,$hojapellidos,$hojfechadenaci,$hojlugardenaci,$hojsexo,$hojestadocivil,$hojtelefono,$hojdireccion,$hojemail,$hojlicencia,$hojvehiculo);
                
        if($insertar >0)
        {
            echo "<script>  alert ('Registrado Correctamente')</script>";
        }
        else
        {
            echo "<script>  alert (' No se pudo registrar')</script>";
        }
    }
}




if(isset($_POST['actu'])){
$usuid=$_POST['usuid'];
$data=$usu->unousu($usuid);
}



if(isset($_POST['Actualizar']))
{
     $usuid = $_POST['usuid'];
     $usutipodocumento = $_POST['usutipodocumento'];
     $usunombre = $_POST['usunombre'];
     $usucontrasena = $_POST['usucontrasena'];
     $usuestado = $_POST['usuestado'];
     $usurol = $_POST['usurol'];
     $usucorreo = $_POST['usucorreo'];    
     $ususexo = $_POST['ususexo'];  
     $adjunto = $_FILES['foto']['name'];
     $tipo = $_FILES['foto']['type'];
     $tam = $_FILES['foto']['size'];          

     if($adjunto!=null)
     {
        if($tipo=="image/gif"|| $tipo=="image/png"||$tipo=="image/jpeg"){
         if($tam<=1000000)
         {
            $hoy=date('dmy');
            $adjunto=$hoy."_".$usuid."_".$adjunto;
            $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/cristian/bolsa de empleo2/img/';
            $actuali= $usu->Actualizarusu($usuid,$usutipodocumento,$usunombre,$usucontrasena,$usuestado,$usurol,$usucorreo,$ususexo,$adjunto);
            if($actuali >0)
     { 
       move_uploaded_file($_FILES['foto']['tmp_name'],$carpeta_destino.$adjunto);
       echo "<script>alert ('registrado Correctamente')  </script>";
     } else {
       echo "<script>alert ('No se pudo registrar')  </script>"; 
     
     }//tamaño
     } else {
          echo "<script>alert ('el tamaño de la imagen es muy grande ')  </script>";
     }//tipo 
     }else {
        echo "<script>alert (' el tipo del archivo no es compatible ')  </script>";
     }
     } else {
    $adjunto="defecto.png";
        $actuali= $usu->Actualizarusu($usuid,$usutipodocumento,$usunombre,$usucontrasena,$usuestado,$usurol,$usucorreo,$ususexo,$adjunto);
    }
    if($actuali>0)
    {
        echo "<script>  alert ('Actualizado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Actualizar')</script>";
    }
}


if(isset($_POST['filtro'])){
$filtrar=$_POST['buscar'];
$datos=$usu->filtrarusu($filtrar);
}


if(isset($_POST['hombre'])){
    $datos=$usu->consultarhom();
}


if(isset($_POST['mujer'])){
    $datos=$usu->consultarmuj();
}


if(isset($_POST['aspirante'])){
    $datos=$usu->consultaraspir();
}

if(isset($_POST['empleado'])){
    $datos=$usu->consultarempl();
}




if(isset($_POST['elimi']))
{
     $usuid = $_POST['usuid'];



/////////////7////
    $elimhoja= $hoj->Eliminarhoj($usuid);
                
    if($elimhoja>0)
    {
        echo "<script>  alert ('Eliminado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Eliminar')</script>";
    }   
///////////////////////////////
    $elimasp= $asp->Eliminarasp($usuid);
                
    if($elimasp>0)
    {
        echo "<script>  alert ('Eliminado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Eliminar')</script>";
    }  
    
 

    /////////////////////////////77

    $elimusu= $usu->Eliminarusu($usuid);
             
    if($elimusu>0)
    {
        echo "<script>  alert ('Eliminado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Eliminar')</script>";
    }

    

}




require_once('vista/vistaUsuario2.php');
?>
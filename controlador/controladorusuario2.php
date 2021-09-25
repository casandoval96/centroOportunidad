<?php     
require_once('modelo/ModeloUsuario.php');

$usu = new modeloUsuario();
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

     

    $elim= $usu->Eliminarusu($usuid);
             
    if($elim>0)
    {
//        echo "<script>  alert ('Eliminado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Eliminar')</script>";
    }
}

require_once('vista/vistaUsuario2.php');
?>
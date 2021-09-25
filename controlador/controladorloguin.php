<?php

require_once('Modelo/ModeloUsuario.php');
require_once('Modelo/ModeloAspirante.php');
require_once('Modelo/ModeloHojadevida.php');

$logi=new modeloUsuario();



$usu = new modeloUsuario();
$asp = new modeloAspirante();
$hoj = new modeloHojadevida();

if(isset($_POST['entrar'])){
$nom=$_POST['nombre'];
$clav=$_POST['contrasena'];
$usua=$logi->loguin($nom,$clav);



if(count($usua)>0){

	foreach ($usua as $u ) {
		if($u[4]==1){
		session_start();
		$_SESSION['nomusu']=$u[2];
		$_SESSION['oficio']=$u[3];
		$_SESSION['doc_usuario']=$u[0];
        $_SESSION['foto']=$u[8];
		header('location:'.$u[5].'.php');



		}else{
		echo "<script type='text/javascript'>alert('Usuario Inactivo,contacte el administador');self .location='indice.php';</script>";
		}

	}

}else {
echo "<script type='text/javascript'>alert('Usuario Incorrecto,contacte el administador');self .location='indice.php';</script>";
}	
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
        echo "<script> $('.alert').alert();  </script>";
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









if(isset($_POST['cerrar'])){
session_start();
if($_SESSION ){
	session_destroy();
  echo "<script type='text/javascript'>alert('sesion terminada');self .location='indice.php';</script>";
}else{

echo "<script type='text/javascript'>alert('usuario no autenticado');self .location='indice.php';</script>";
}
}

require_once('Vista/VistaLoguin.php');

?>

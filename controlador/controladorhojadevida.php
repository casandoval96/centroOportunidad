<?php     
require_once('modelo/ModeloHojadevida.php');
require_once('modelo/ModeloDatospersonales.php');
require_once('modelo/ModeloExperiencia.php');
require_once('modelo/ModeloEstudios.php');
require_once('modelo/ModeloNivel.php');
require_once('modelo/modeloCategoria.php');




$hoj = new modeloHojadevida();
$est = new modeloEstudios();
$niv = new modeloNivel();
$cat = new modeloCategoria();
$exp = new modeloExperiencia();

$datosniv=$niv->consultarNivel();
$datoscat=$cat->consultarCategoria();

session_start(); 
if(!$_SESSION){
echo"<script>alert('usuario no autenticado');self.location='indice.php'</script>";
}else{
        $fotousu=$_SESSION['foto'];
        $nomusu=$_SESSION['nomusu'];
        $oficio=$_SESSION['oficio'];
        $docusuario=$_SESSION['doc_usuario'];

    
    $ide=$_SESSION['doc_usuario'];
    $datos=$hoj->consultarHoja($ide);
    $datosest=$est->consultarEstudios($ide);
    $datosexp=$exp->consultarExperiencia($ide);
}


if(isset($_POST['Actualizar']))
{
     $hojid = $_POST['hojid'];
     $hojtipodocumento = $_POST['hojtipodocumento'];
     $hojlugarexpedicion = $_POST['hojlugarexpedicion'];
     $hojnombres = $_POST['hojnombres'];
     $hojapellidos = $_POST['hojapellidos'];
     $hojfechadenaci = $_POST['hojfechadenaci'];
     $hojlugardenaci = $_POST['hojlugardenaci'];
     $hojsexo = $_POST['hojsexo'];
     $hojestadocivil = $_POST['hojestadocivil'];      
     $hojtelefono = $_POST['hojtelefono'];
     $hojdireccion = $_POST['hojdireccion'];
     $hojemail = $_POST['hojemail'];
     $hojlicencia = $_POST['hojlicencia'];
     $hojvehiculo = $_POST['hojvehiculo'];
     


     $actualizar= $hoj->Actualizarhoj($hojid,$hojtipodocumento,$hojlugarexpedicion,$hojnombres,$hojapellidos,$hojfechadenaci,$hojlugardenaci,$hojsexo,$hojestadocivil,$hojtelefono,$hojdireccion,$hojemail,$hojlicencia,$hojvehiculo);
                          
    if($actualizar >0)
    {
//        echo "<script>  alert ('Actualizado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Actualizar')</script>";
    }
}



///estudios

if(isset($_POST['Aceptarest']))
{
     $estid = $_POST['estid'];
     $esthojaid = $_POST['esthojaid'];
     $estnivel = $_POST['estnivel'];
     $estnomtitulo = $_POST['estnomtitulo'];
     $estinstitucion = $_POST['estinstitucion'];


    $insertardat= $est->insertarEstudios($estid,$esthojaid,$estnivel,$estnomtitulo,$estinstitucion);
             
    if($insertardat >0)
    {
//        echo "<script>  alert ('Ingresado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Ingresar')</script>";
    }
}


if(isset($_POST['eliminarest']))
{
     $estid = $_POST['estid'];

    $elim= $est->eliminarEstudios($estid);
             
    if($elim>0)
    {
 //       echo "<script>  alert ('Eliminado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Eliminar')</script>";
    }
}


//experiencia



if(isset($_POST['Aceptarexp']))
{
     $expid = $_POST['expid'];
     $exphojaid = $_POST['exphojaid'];
     $expempresauno = $_POST['expempresauno'];
     $expcategoria = $_POST['expcategoria'];
     $expcargo = $_POST['expcargo'];
     $expfechadeingreso = $_POST['expfechadeingreso'];
     $expfechasalida = $_POST['expfechasalida'];
     $expfunciones = $_POST['expfunciones'];


    $insertardat= $exp->insertarExperiencia($expid,$exphojaid,$expempresauno,$expcategoria,$expcargo,$expfechadeingreso,$expfechasalida,$expfunciones);
             
    if($insertardat >0)
    {
//        echo "<script>  alert ('Ingresado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Ingresar')</script>";
    }
}


if(isset($_POST['eliminarexp']))
{
     $expid = $_POST['expid'];

    $elimexp=$exp->eliminarExperiencia($expid);
             
    if($elimexp>0)
    {
//        echo "<script>  alert ('Eliminado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Eliminar')</script>";
    }
}

require_once('vista/vistaHojadevida.php');
?>
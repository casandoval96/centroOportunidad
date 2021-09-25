<?php     
require_once('modelo/ModeloFinalista.php');
require_once('modelo/ModeloPsicologo.php');

$fin = new modeloFinalista();
$psi = new modelopsicologo();

session_start(); 
if(!$_SESSION){
echo"<script>alert('usuario no autenticado');self.location='indice.php'</script>";
}else{ 
        $fotousu=$_SESSION['foto'];
        $nomusu=$_SESSION['nomusu'];
        $oficio=$_SESSION['oficio'];
        $docusuario=$_SESSION['doc_usuario'];


}


$datospsi=$psi->consultarpsi();
$datos=$fin->consultarfinalis();

if(isset($_POST['filtro'])){
$filtrar=$_POST['buscar'];
$datos=$ofe->filtrarofe($filtrar);
}


if(isset($_POST['insertar']))
{
     $finide = $_POST['finide'];
     $finaplid = $_POST['finaplid'];
     $finpsicologo = $_POST['finpsicologo'];
     $finfecha = $_POST['finfecha'];
     $finaplid = $_POST['finaplid'];   

    $insert= $fin->Insertarfin($finide,$finaplid,$finpsicologo,$finfecha,$finaplid);
             
    if($insert >0)
    {
        echo "<script>  alert ('Registrado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo registrar')</script>";
    }
}



if(isset($_POST['actu'])){
$ofeid=$_POST['ofeid'];
$data=$ofe->uno($ofeid);
}

if(isset($_POST['Actualizar']))
{
     $finide = $_POST['finide'];
     $finaplid = $_POST['finaplid'];
     $finpsicologo = $_POST['finpsicologo'];
     $finfecha = $_POST['finfecha'];
     $finaplid = $_POST['finaplid'];
     
    $actuali=$fin->Actualizarfin($finide,$finaplid,$finpsicologo,$finfecha,$finaplid);
             
    if($actuali>0)
    {
        echo "<script>  alert ('Actualizado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Actualizar')</script>";
    }
}



if(isset($_POST['Eliminar'])) 
{
     $finide = $_POST['finide'];

     

    $elim= $fin->Eliminarfin($finide);
             
    if($elim>0)
    {
        echo "<script>  alert ('Eliminado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Eliminar')</script>";
    }
}

require_once('vista/vistafinalista.php');
?>
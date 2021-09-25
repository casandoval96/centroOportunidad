<?php     
require_once('modelo/ModeloPsicologo.php');


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

$datos=$psi->consultarpsi();

if(isset($_POST['filtro'])){
$filtrar=$_POST['buscar'];
$datos=$ofe->filtrarofe($filtrar);
}


if(isset($_POST['insertar']))
{
     $psiide = $_POST['psiide'];
     $psinombre = $_POST['psinombre'];
     $psiapellido = $_POST['psiapellido'];

    $insert= $psi->Insertarpsi($psiide,$psinombre,$psiapellido);
             
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
     $psiide = $_POST['psiide'];
     $psinombre = $_POST['psinombre'];
     $psiapellido = $_POST['psiapellido'];

     
    $actuali=$psi->Actualizarpsi($psiide,$psinombre,$psiapellido);
             
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
     $psiide = $_POST['psiide'];

     

    $elim= $psi->Eliminarpsi($psiide);
             
    if($elim>0)
    {
        echo "<script>  alert ('Eliminado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Eliminar')</script>";
    }
}

require_once('vista/vistapsicologo.php');
?>
<?php     
require_once('modelo/ModeloEmpleado.php');

$emp = new modeloempleado();



session_start(); 
if(!$_SESSION){
echo"<script>alert('usuario no autenticado');self.location='indice.php'</script>";
}else{
        $fotousu=$_SESSION['foto'];
        $nomusu=$_SESSION['nomusu'];
        $oficio=$_SESSION['oficio'];
        $docusuario=$_SESSION['doc_usuario'];


$ide=$_SESSION['doc_usuario'];
$datos=$emp->consultaremp($ide);
}



if(isset($_POST['actu'])){
$empid=$_POST['empid'];
$datos=$emp->uno($empid);
}



if(isset($_POST['Actualizar']))
{
     $empid = $_POST['empid'];
     $emptipodocumento= $_POST['emptipodocumento'];
     $empnombre = $_POST['empnombre'];
     $empapellido = $_POST['empapellido'];   
     

    $insertar= $emp->Actualizaremp($empid,$emptipodocumento,$empnombre,$empapellido);
             
    if($insertar >0)
    {
//        echo "<script>  alert ('Actualizado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Actualizar')</script>";
    }
}



require_once('vista/VistaEmpleado.php');
?>
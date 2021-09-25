<?php     
require_once('modelo/ModeloAspirante.php');

$asp = new modeloAspirante();



session_start(); 
if(!$_SESSION){
echo"<script>alert('usuario no autenticado');self.location='indice.php'</script>";
}else{
        $fotousu=$_SESSION['foto'];
        $nomusu=$_SESSION['nomusu'];
        $oficio=$_SESSION['oficio'];
        $docusuario=$_SESSION['doc_usuario'];

$ide=$_SESSION['doc_usuario'];
$datos=$asp->consultarasp($ide);
}



if(isset($_POST['actu'])){
$aspcedulaaspirante=$_POST['aspcedulaaspirante'];
$datos=$dat->uno($aspcedulaaspirante);
}

if(isset($_POST['Actualizar']))
{
     $aspcedulaaspirante = $_POST['aspcedulaaspirante'];
     $aspnombre= $_POST['aspnombre'];
     $aspedad = $_POST['aspedad'];
     $aspgenero = $_POST['aspgenero'];
     $asphojadevida = $_POST['asphojadevida'];
     $aspofertas = $_POST['aspofertas'];    
     

    $insertar= $asp->Actualizarasp($aspcedulaaspirante,$aspnombre,$aspedad,$aspgenero,$asphojadevida,$aspofertas);
             
    if($insertar >0)
    {
//        echo "<script>  alert ('Actualizado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Actualizar')</script>";
    }
}



require_once('vista/VistaAspirante.php');
?>
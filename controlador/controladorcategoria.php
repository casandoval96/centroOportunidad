<?php     
require_once('modelo/ModeloCategoria.php');

$cat = new modelocategoria();


session_start(); 
if(!$_SESSION){
echo"<script>alert('usuario no autenticado');self.location='indice.php'</script>";
}else{
        $fotousu=$_SESSION['foto'];
        $nomusu=$_SESSION['nomusu'];
        $oficio=$_SESSION['oficio'];
        $docusuario=$_SESSION['doc_usuario'];


}

$datos=$cat->consultarcate();

if(isset($_POST['filtro'])){
$filtrar=$_POST['buscar'];
$datos=$cat->filtrarofe($filtrar);
}


if(isset($_POST['insertar']))
{
     $catid = $_POST['catid'];
     $catnombre = $_POST['catnombre'];


    $insert=$cat->Insertarcate($catid,$catnombre);
             
    if($insert >0)
    {
//        echo "<script>  alert ('Registrado Correctamente')</script>";
    }
    else
    {
 //       echo "<script>  alert (' No se pudo registrar')</script>";
    }
}



if(isset($_POST['actu'])){
$catid=$_POST['catid'];
$data=$cat->uno($catid);
}

if(isset($_POST['Actualizar']))
{
     $catid = $_POST['catid'];
     $catnombre = $_POST['catnombre'];

    $actuali=$cat->Actualizarcate($catid,$catnombre);
             
    if($actuali>0)
    {
  //      echo "<script>  alert ('Actualizado Correctamente')</script>";
    }
    else
    {
    //    echo "<script>  alert (' No se pudo Actualizar')</script>";
    }
}



if(isset($_POST['elimi']))
{
     $catid = $_POST['catid'];

     

    $elim= $cat->Eliminarcate($catid);
             
    if($elim>0)
    {
   //     echo "<script>  alert ('Eliminado Correctamente')</script>";
    }
    else
    {
   //     echo "<script>  alert (' No se pudo Eliminar')</script>";
    }
}

require_once('vista/vistaCategoria.php');
?>
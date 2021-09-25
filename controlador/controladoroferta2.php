<?php     
require_once('modelo/ModeloOferta.php');
require_once('modelo/ModeloCategoria.php');
require_once('modelo/ModeloNivel.php');
require_once('modelo/ModeloAplicacion.php');


$ofe = new modeloOferta();
$cat = new modeloCategoria();
$niv = new modeloNivel();
$apl = new modeloAplicacion();

$cate=$cat->consultarCategoria();
$nive=$niv->consultarNivel();


session_start(); 
if(!$_SESSION){
echo"<script>alert('usuario no autenticado');self.location='indice.php'</script>";
}else{
        $fotousu=$_SESSION['foto'];
        $nomusu=$_SESSION['nomusu'];
        $oficio=$_SESSION['oficio'];
        $docusuario=$_SESSION['doc_usuario'];


}

$datos=$ofe->consultarofe();

if(isset($_POST['filtro'])){
$filtrar=$_POST['buscar'];
$datos=$ofe->filtrarofe($filtrar);
}


if(isset($_POST['insertar']))
{
     $aplid = $_POST['aplid'];
     $aploferta = $_POST['aploferta'];
     $aplfecha = $_POST['aplfecha'];
     $aplhora = $_POST['aplhora'];
     $aplhojadevida = $_POST['aplhojadevida'];

    $insert= $apl->Insertarapli($aplid,$aploferta,$aplfecha,$aplhora,$aplhojadevida);
             
    if($insert >0)
    {
        //echo "<script>  alert ('Registrado Correctamente')</script>";
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
     $ofeid = $_POST['ofeid'];
     $ofeentidad = $_POST['ofeentidad'];
     $ofenombre = $_POST['ofenombre'];
     $ofedescripcion = $_POST['ofedescripcion'];
     $ofesalario = $_POST['ofesalario'];
     $ofeidnivel= $_POST['ofeidnivel'];
     $ofeidcategoria = $_POST['ofeidcategoria'];
     $ofeexperiencia = $_POST['ofeexperiencia'];
     $ofefecha = $_POST['ofefecha'];
     
    $actuali=$ofe->Actualizarofe($ofeid,$ofeentidad,$ofenombre,$ofedescripcion,$ofesalario,$ofeidnivel,$ofeidcategoria,$ofeexperiencia,$ofefecha);
             
    if($actuali>0)
    {
        //echo "<script>  alert ('Actualizado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Actualizar')</script>";
    }
}



if(isset($_POST['elimi']))
{
     $ofeid = $_POST['ofeid'];

     

    $elim= $ofe->Eliminarofe($ofeid);
             
    if($elim>0)
    {
        //echo "<script>  alert ('Eliminado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Eliminar')</script>";
    }
}


if(isset($_POST['fecha'])){
    $datos=$ofe->consultarfecha();
}


if(isset($_POST['salario'])){
    $datos=$ofe->consultarsalario();
}


require_once('vista/vistaOferta2.php');
?>
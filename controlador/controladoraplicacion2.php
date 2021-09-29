<?php     
require_once('modelo/ModeloOferta.php');
require_once('modelo/ModeloCategoria.php');
require_once('modelo/ModeloNivel.php');
require_once('modelo/ModeloAplicacion.php');
require_once('modelo/ModeloHojadevida.php');
require_once('modelo/modeloExperiencia.php');
require_once('modelo/modeloEstudios.php');
require_once('modelo/ModeloFinalista.php');
require_once('modelo/ModeloPsicologo.php');


$ofe = new modeloOferta();
$cat = new modeloCategoria();
$niv = new modeloNivel();
$apl = new modeloAplicacion();
$hoj = new modeloHojadevida();
$exp = new modeloExperiencia();
$est = new modeloEstudios();
$fin = new modeloFinalista();
$psi = new modelopsicologo();


$ofer=$ofe->consultarofe();
$cate=$cat->consultarCategoria();
$nive=$niv->consultarNivel();
$datos=$apl->consultaraplicacion();
$datospsi=$psi->consultarpsi();
$datosfin=$fin->consultarfinalis();


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
             
    if($insert >0){
    
   //     echo "<script>  alert ('Registrado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo registrar')</script>";
    }
}


if(isset($_POST['insertarfinalista']))
{
     $finide = $_POST['finide'];
     $finaplid = $_POST['finaplid'];
     $finseleccionador = $_POST['finseleccionador'];
     $finfecha = $_POST['finfecha'];
     $finhora = $_POST['finhora'];

    $insertar= $fin->Insertarfin($finide,$finaplid,$finseleccionador,$finfecha,$finhora);
             
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
$ofeid=$_POST['ofeid'];
$data=$apl->unoapli($ofeid);
}


if(isset($_POST['ver'])){
$aplicacion=$_POST['apliide'];

$aplhojadevida=$_POST['aplhojadevida'];
$datohoj=$hoj->uno($aplhojadevida);
$datoest=$est->unoest($aplhojadevida);
$datoexp=$exp->unoexp($aplhojadevida);
}


if(isset($_POST['agendar'])){
$numaplicacion=$_POST['numaplicacion'];
}


require_once('vista/vistaaplicacion2.php');
?>
<?php     
require_once('modelo/ModeloDatospersonales.php');

$dat = new modelodatospersonales();

if(isset($_POST['consultardat'])){
    $datosp=$dat->consultardatos();
}


if(isset($_POST['filtro'])){
$filtrar=$_POST['buscar'];
$datos=$dat->filtrardatos($filtrar);
}


if(isset($_POST['insert']))
{
     $datid = $_POST['datid'];
     $datexpedicion = $_POST['datexpedicion'];
     $datnombre = $_POST['datnombre'];
     $datnombredos = $_POST['datnombredos'];
     $datapellido = $_POST['datapellido'];
     $datapellidodos = $_POST['datapellidodos'];
     $datlugardenaci = $_POST['datlugardenaci'];
     $datfechadenaci = $_POST['datfechadenaci'];
     $datestadocivil = $_POST['datestadocivil'];
     $datciudad = $_POST['datciudad'];
     $datdireccion = $_POST['datdireccion'];
     $dattelefono = $_POST['dattelefono'];
     $datemail = $_POST['datemail'];        


    $insertar= $dat->Insertardatos($datid,$datexpedicion,$datnombre,$datnombredos,$datapellido,$datapellidodos,$datlugardenaci,$datfechadenaci,$datestadocivil,$datciudad,$datdireccion,$dattelefono,$datemail);
             
    if($insertar >0)
    {
   //     echo "<script>  alert ('Registrado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo registrar')</script>";
    }
}

if(isset($_POST['actu'])){
$datid=$_POST['datid'];
$data=$dat->uno($datid);
}

if(isset($_POST['Actualizar']))
{
     $datid = $_POST['datid'];
     $datexpedicion = $_POST['datexpedicion'];
     $datnombre = $_POST['datnombre'];
     $datnombredos = $_POST['datnombredos'];
     $datapellido = $_POST['datapellido'];
     $datapellidodos = $_POST['datapellidodos'];
     $datlugardenaci = $_POST['datlugardenaci'];
     $datfechadenaci = $_POST['datfechadenaci'];
     $datestadocivil = $_POST['datestadocivil'];
     $datciudad = $_POST['datciudad'];
     $datdireccion = $_POST['datdireccion'];
     $dattelefono = $_POST['dattelefono'];
     $datemail = $_POST['datemail'];    
     

    $insertar= $dat->Actualizardatos($datid,$datexpedicion,$datnombre,$datnombredos,$datapellido,$datapellidodos,$datlugardenaci,$datfechadenaci,$datestadocivil,$datciudad,$datdireccion,$dattelefono,$datemail);
             
    if($insertar >0)
    {
   //     echo "<script>  alert ('Actualizado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Actualizar')</script>";
    }
}

if(isset($_POST['elimi']))
{
     $datid = $_POST['datid'];

     

    $elim= $dat->Eliminardatos($datid);
             
    if($elim>0)
    {
   //     echo "<script>  alert ('Eliminado Correctamente')</script>";
    }
    else
    {
        echo "<script>  alert (' No se pudo Eliminar')</script>";
    }
}

require_once('vista/VistaDatospersonales.php');
?>
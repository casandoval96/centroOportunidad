<?php

require_once('conexion.php');

class modeloempleado{

    public function consultaremp($ide)
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select *from tbempleado where empid='.$ide.';');
            $ps->execute();
            $datos=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datos;
}


public function filtraremp($filtrar)
{
try{
    $ps=Conexion::conexionbd()->prepare("select *from   tbaspirante where     datid like '%".$filtrar."%' or hojanombre like '%".$filtrar."%' or hojatipodocumento like '%".$filtrar."%';");
        $ps->execute();
        $datos=$ps->fetchALL();
    }catch (exception $e){
        echo "Error al consultar".$e;
    }
    return $datos;
}




  public function uno($id)
    {
        try {
            $ps=Conexion::conexionbd()->prepare('Select * from  tbempleado where  empid=?;');
            $ps->bindParam(1, $id);
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            echo "Error al consultar".$e;
    }
    return $datos;
}




 public function Actualizaremp($ide,$tip,$nom,$ape)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('UPDATE tbempleado SET emptipodocumento=?,empnombre=?,  empapellido=? WHERE  empid=?');
           
            $ps->bindParam(1,$tip);
            $ps->bindParam(2,$nom);
            $ps->bindParam(3,$ape);
            $ps->bindParam(4,$ide);

            if($ps->execute())
            {
                $respuesta = 1;
            }
            else
            {
                $respuesta = 0;
            }
        }
        catch (exception $e)
        {
            echo "Error al Actualizar ".$e;
        }
        return $respuesta;
    }



}
?>
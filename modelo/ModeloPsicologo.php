<?php

require_once('conexion.php');

class modelopsicologo{

    public function consultarpsi()
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select * from tbpsicologo');
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

 public function Insertarpsi($ide,$nom,$ape)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('INSERT INTO tbpsicologo (psiidentificacion,psinombre,psiapellido) VALUES(?,?,?)');

            $ps->bindParam(1,$ide);
            $ps->bindParam(2,$nom);
            $ps->bindParam(3,$ape);
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
            echo "Error al insertar ".$e;
        }
        return $respuesta;
    }


  public function uno($id)
    {
        try {
            $ps=Conexion::conexionbd()->prepare('Select * from  tbpsicologo where  psiidentificacion=?;');
            $ps->bindParam(1, $id);
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            echo "Error al consultar".$e;
    }
    return $datos;
}




 public function Actualizarpsi($ide,$nom,$ape)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('UPDATE tbpsicologo SET psinombre=?,psiapellido=? WHERE  psiidentificacion=?');
           
            
            $ps->bindParam(1,$nom);
            $ps->bindParam(2,$ape);
            $ps->bindParam(3,$ide);

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

 public function Eliminarpsi($ide)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('DELETE FROM  tbpsicologo   WHERE psiidentificacion=?');

            
            $ps->bindParam(1,$ide);


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
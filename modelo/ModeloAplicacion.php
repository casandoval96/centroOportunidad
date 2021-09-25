<?php

require_once('conexion.php');

class modeloAplicacion{

    public function consultarapli($ide)
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select aplid,ofeid,ofeentidad,ofenombre,ofedescripcion,ofesalario,nivnombre,catenombre,ofeexperiencia,aplhora,aplhojadevida from tbaplicacion inner join tbofertas on aploferta=ofeid inner join tbnivel on ofeidnivel=nivid inner join tbcategoria on ofeidcategoria=cateid where aplhojadevida='.$ide.';');
            $ps->execute();
            $datos=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datos;
}



    public function consultaraplicacion()
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select aplid,ofeid,ofeentidad,ofenombre,ofedescripcion,ofesalario,nivnombre,catenombre,ofeexperiencia,aplhora,aplhojadevida from tbaplicacion inner join tbofertas on aploferta=ofeid inner join tbnivel on ofeidnivel=nivid inner join tbcategoria on ofeidcategoria=cateid;');
            $ps->execute();
            $datos=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datos;
}






  public function unoapli($id)
    {
        try {
            $ps=Conexion::conexionbd()->prepare('Select * from  tbaplicacion where  aploferta=?;');
            $ps->bindParam(1,$id);
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            echo "Error al consultar".$e;
    }
    return $datos;
}



 public function Insertarapli($ide,$ofe,$fec,$hor,$idh)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('INSERT INTO tbaplicacion (aplid,aploferta,aplfecha,aplhora,aplhojadevida) VALUES(?,?,?,?,?)');

            $ps->bindParam(1,$ide);
            $ps->bindParam(2,$ofe);
            $ps->bindParam(3,$fec);
            $ps->bindParam(4,$hor);
            $ps->bindParam(5,$idh);

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



public function Actualizarasp($ide,$nom,$rol,$gen)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('UPDATE tbaspirante SET aspnombre=?,asperol=?,aspgenero=? WHERE  aspcedulaaspirante=?');
           

            $ps->bindParam(1,$nom);
            $ps->bindParam(2,$rol);
            $ps->bindParam(3,$gen);
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




 public function Eliminarapl($ide)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('DELETE FROM  tbaplicacion   WHERE aplid=?');

            
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
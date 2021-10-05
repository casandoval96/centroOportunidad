<?php

require_once('conexion.php');

class modeloFinalista{

    public function consultarfinalista($ide)
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select *from tbfinalista where aspcedulaaspirante='.$ide.';');
            $ps->execute();
            $datos=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datos;
}

    public function consultarfin()
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select * from tbfinalista');
            $ps->execute();
            $datos=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datos;
}


    public function consultarfinalis()
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select finide,ofeentidad,ofenombre,ofedescripcion,usunombre,finfecha,finhora,findecision,hojlugarexpedicion
            from tbfinalista
            inner join tbusuario on(finseleccionador=usuid)
            inner join tbaplicacion on(finaplid=aplid)
            inner join tbofertas on(ofeid=aploferta) 
            inner join tbhojadevida on(aplhojadevida=hojid);');
            $ps->execute();
            $datos=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datos;
}



public function finalistauno($id)
{
    try {
        $ps=Conexion::conexionbd()->prepare('select finide,ofeentidad,ofenombre,ofedescripcion,usunombre,finfecha,finhora,findecision,hojlugarexpedicion
        from tbfinalista
        inner join tbusuario on(finseleccionador=usuid)
        inner join tbaplicacion on(finaplid=aplid)
        inner join tbofertas on(ofeid=aploferta) 
        inner join tbhojadevida on(aplhojadevida=hojid)
        where aplhojadevida=?;');
        $ps->bindParam(1, $id);
        $ps->execute();
        $datos=$ps->fetchALL();
    } catch (Exeption $e) {
        echo "Error al consultar".$e;
}
return $datos;
}








  public function uno($id)
    {
        try {
            $ps=Conexion::conexionbd()->prepare('Select * from  tbfinalista where     finalid=?;');
            $ps->bindParam(1, $id);
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            echo "Error al consultar".$e;
    }
    return $datos;
}



 public function Insertarfin($ide,$nom,$rol,$gen,$hor)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('INSERT INTO tbfinalista (finide,finaplid,finseleccionador,finfecha,finhora) VALUES(?,?,?,?,?)');

            $ps->bindParam(1,$ide);
            $ps->bindParam(2,$nom);
            $ps->bindParam(3,$rol);
            $ps->bindParam(4,$gen);
            $ps->bindParam(5,$hor);

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



public function Actualizarfin($ide,$nom,$rol,$gen,$ent)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('UPDATE tbfinalista SET     finaplid=?,finpsicologo=?,finfecha=?,finhora=? WHERE  finide=?');
           

            $ps->bindParam(1,$nom);
            $ps->bindParam(2,$rol);
            $ps->bindParam(3,$gen);
            $ps->bindParam(4,$ent);
            $ps->bindParam(5,$ide);

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



 public function Eliminarfin($ide)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('DELETE FROM  tbfinalista   WHERE finide=?');

            
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
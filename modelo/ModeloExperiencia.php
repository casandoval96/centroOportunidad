<?php

require_once('conexion.php');

class modeloExperiencia{



public function consultarExperiencia($ide)
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select  expid,exphojaid,expempresauno,catenombre,expcargo,expfechaingreso,expfechasalida,expfunciones from tbexperiencia  inner join tbcategoria on cateid=expcategoria where exphojaid="'.$ide.'";');
            $ps->execute();
            $datosexp=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datosexp;
}

 public function insertarExperiencia($ide,$hid,$emp,$cat,$car,$fin,$fsa,$fun)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('INSERT INTO tbexperiencia (expid,exphojaid,expempresauno,expcategoria,expcargo,expfechaingreso,expfechasalida,expfunciones) VALUES(?,?,?,?,?,?,?,?)');

            $ps->bindParam(1,$ide);
            $ps->bindParam(2,$hid);
            $ps->bindParam(3,$emp);
            $ps->bindParam(4,$cat);
            $ps->bindParam(5,$car);
            $ps->bindParam(6,$fin);
            $ps->bindParam(7,$fsa);
            $ps->bindParam(8,$fun);


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



 public function eliminarExperiencia($ide)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('DELETE FROM  tbexperiencia  WHERE expid=?');

            
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


  public function unoexp($id)
    {
        try {
            $ps=Conexion::conexionbd()->prepare('select  expid,exphojaid,expempresauno,catenombre,expcargo,expfechaingreso,expfechasalida,expfunciones from tbexperiencia  inner join tbcategoria on cateid=expcategoria where exphojaid=?;');
            $ps->bindParam(1, $id);
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            echo "Error al consultar".$e;
    }
    return $datos;
   }
}
?>
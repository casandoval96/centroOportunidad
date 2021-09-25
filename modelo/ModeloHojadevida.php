<?php

require_once('conexion.php');

class modeloHojadevida{

    public function consultarHoja($ide)
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select * from tbhojadevida where hojid='.$ide.';');
            $ps->execute();
            $datos=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datos;
}


  public function uno($id)
    {
        try {
            $ps=Conexion::conexionbd()->prepare('Select * from tbhojadevida where hojid=?;');
            $ps->bindParam(1, $id);
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            echo "Error al consultar".$e;
    }
    return $datos;
}




 public function Insertarhoj($ide,$tip,$nom,$exp,$ape,$fna,$lna,$sex,$est,$tel,$dir,$ema,$lic,$veh)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('INSERT INTO tbhojadevida (hojid,hojtipodocumento,hojlugarexpedicion,hojnombres,hojapellidos,hojfechadenaci,hojlugardenaci,hojsexo,hojestadocivil,hojtelefono,hojdireccion,hojemail,hojlicencia,hojvehiculo) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

            $ps->bindParam(1,$ide);
            $ps->bindParam(2,$tip);
            $ps->bindParam(3,$nom);
            $ps->bindParam(4,$exp);
            $ps->bindParam(5,$ape);
            $ps->bindParam(6,$fna);
            $ps->bindParam(7,$lna);
            $ps->bindParam(8,$sex);
            $ps->bindParam(9,$est);
            $ps->bindParam(10,$tel);
            $ps->bindParam(11,$dir);
            $ps->bindParam(12,$ema);
            $ps->bindParam(13,$lic);
            $ps->bindParam(14,$veh);


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



 public function Actualizarhoj($ide,$tip,$nom,$exp,$ape,$fna,$lna,$sex,$est,$tel,$dir,$ema,$lic,$veh)

    {
        try
        {
            $ps=Conexion::conexionbd()->prepare("UPDATE tbhojadevida  SET hojtipodocumento=?,hojlugarexpedicion=?,hojnombres=?,hojapellidos=?,hojfechadenaci=?,hojlugardenaci=?,hojsexo=?,hojestadocivil=?,hojtelefono=?,hojdireccion=?,hojemail=?,hojlicencia=?,hojvehiculo=?   WHERE  hojid=?");

            
            $ps->bindParam(1,$tip);
            $ps->bindParam(2,$exp);
            $ps->bindParam(3,$nom);
            $ps->bindParam(4,$ape);
            $ps->bindParam(5,$fna);
            $ps->bindParam(6,$lna);
            $ps->bindParam(7,$sex);
            $ps->bindParam(8,$est);
            $ps->bindParam(9,$tel);
            $ps->bindParam(10,$dir);
            $ps->bindParam(11,$ema);
            $ps->bindParam(12,$lic);
            $ps->bindParam(13,$veh);
            $ps->bindParam(14,$ide);                        


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




 public function Eliminarhoj($ide)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare("DELETE FROM  tbhojadevida   WHERE hojid=?");

            
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



  public function unohoj($ide)
    {
        try {
            $ps=Conexion::conexionbd()->prepare('Select * from tbhojadevida where hojid=?;');
            $ps->bindParam(1,$ide);
            $ps->execute();
            $datohoj=$ps->fetchALL();
        } catch (Exeption $e) {
            echo "Error al consultar".$e;
    }
    return $datohoj;
}


}
?>
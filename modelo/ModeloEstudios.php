<?php

require_once('conexion.php');

class modeloEstudios{



public function consultarEstudios($ide)
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select  estid,esthojaid,nivnombre,estnomtitulo,estinstitucion from tbestudio  inner join tbnivel on estnivel=nivid where esthojaid="'.$ide.'";');
            $ps->execute();
            $datosest=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datosest;
}

 public function insertarEstudios($ide,$hid,$niv,$nom,$ins)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('INSERT INTO tbestudio (estid,esthojaid,estnivel,estnomtitulo,estinstitucion) VALUES(?,?,?,?,?)');

            $ps->bindParam(1,$ide);
            $ps->bindParam(2,$hid);
            $ps->bindParam(3,$niv);
            $ps->bindParam(4,$nom);
            $ps->bindParam(5,$ins);


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


 public function eliminarEstudios($ide)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('DELETE FROM  tbestudio   WHERE estid=?');

            
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


  public function unoest($id)
    {
        try {
            $ps=Conexion::conexionbd()->prepare('select  estid,esthojaid,nivnombre,estnomtitulo,estinstitucion from tbestudio  inner join tbnivel on estnivel=nivid where esthojaid=?;');
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
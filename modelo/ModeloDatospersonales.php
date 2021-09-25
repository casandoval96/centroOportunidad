<?php

require_once('conexion.php');

class modelodatospersonales{

    public function consultardatos()
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select *from tbdatospersonales;');
            $ps->execute();
            $datosp=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datosp;
}


public function filtrarhoja($filtrar)
{
try{
    $ps=Conexion::conexionbd()->prepare("select *from   tbdatospersonales where     datid like '%".$filtrar."%' or hojanombre like '%".$filtrar."%' or hojatipodocumento like '%".$filtrar."%';");
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
            $ps=Conexion::conexionbd()->prepare('Select * from  tbdatospersonales where   datid=?;');
            $ps->bindParam(1, $id);
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            echo "Error al consultar".$e;
    }
    return $datos;
}







 public function Insertardatos($ide,$exp,$nom,$ndo,$ape,$ado,$lug,$fec,$est,$ciu,$dir,$tel,$ema)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('INSERT INTO tbdatospersonales (datid,datexpedicion,datnombre,datnombredos,datapellido,datapellidodos,datlugardenaci,datfechadenaci,datestadocivil,datciudad,datdireccion,dattelefono,datemail) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)');


            $ps->bindParam(1,$exp);
            $ps->bindParam(2,$nom);
            $ps->bindParam(3,$ndo);
            $ps->bindParam(4,$ape);
            $ps->bindParam(5,$ado);
            $ps->bindParam(6,$lug);
            $ps->bindParam(7,$fec);
            $ps->bindParam(8,$est);
            $ps->bindParam(9,$ciu);
            $ps->bindParam(10,$dir);
            $ps->bindParam(11,$tel);
            $ps->bindParam(12,$ema);
            $ps->bindParam(13,$ide);


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



 public function Actualizardatos($ide,$exp,$nom,$ndo,$ape,$ado,$lug,$fec,$est,$ciu,$dir,$tel,$ema)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('UPDATE tbdatospersonales SET   datexpedicion=?,datnombre=?,datnombredos=?,datapellido=?,datapellidodos=?,datlugardenaci=?,datfechadenaci=?,datestadocivil=?,datciudad=?,datdireccion=?,dattelefono=?,datemail=?WHERE   datid=?');

            
            
            $ps->bindParam(1,$exp);
            $ps->bindParam(2,$nom);
            $ps->bindParam(3,$ndo);
            $ps->bindParam(4,$ape);
            $ps->bindParam(5,$ado);
            $ps->bindParam(6,$lug);
            $ps->bindParam(7,$fec);
            $ps->bindParam(8,$est);
            $ps->bindParam(9,$ciu);
            $ps->bindParam(10,$dir);
            $ps->bindParam(11,$tel);
            $ps->bindParam(12,$ema);
            $ps->bindParam(13,$ide);


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





 public function Eliminardatos($ide)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('DELETE FROM  tbdatospersonales   WHERE  datid=?');

            
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

       public function Consultarpersonales($ide)
            {
                try {
                    $ps=Conexion::conexionbd()->prepare("call llamardatos('".$ide."');");
                    $ps->execute();
                    $datosp=$ps->fetchALL();
                } catch (Exeption $e) {
                    echo "Error al consultar".$e;
            }
            return $datosp;
        }


}

?>
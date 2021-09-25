<?php

require_once('conexion.php');

class modeloOferta{

    public function consultarofe()
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select ofeid,ofeentidad,ofenombre,ofedescripcion,ofesalario,nivnombre,catenombre,ofeexperiencia,ofefecha from tbofertas inner join tbnivel on ofeidnivel=nivid inner join tbcategoria on ofeidcategoria=cateid;');
            $ps->execute();
            $datos=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datos;
}



public function filtrarofe($filtrar)
{
try{
    $ps=Conexion::conexionbd()->prepare("select *from tbofertas where usuid like '%".$filtrar."%' or  usutipodocumento like '%".$filtrar."%' or usunombre like '%".$filtrar."%' or usucontrasena like '%".$filtrar."%' or usuestado like '%".$filtrar."%' or  usurol like '%".$filtrar."%' usucorreo like '%".$filtrar."%';");
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
            $ps=Conexion::conexionbd()->prepare('Select * from tbofertas where ofeid=?;');
            $ps->bindParam(1,$id);
            $ps->execute();
            $data=$ps->fetchALL();
        } catch (Exeption $e) {
            echo "Error al consultar".$e;
    }
    return $data;
}





 public function Insertarofe($ide,$ent,$nom,$des,$sal,$niv,$cat,$exp,$fec)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('INSERT INTO tbofertas (ofeid,ofeentidad,ofenombre,ofedescripcion,ofesalario,ofeidnivel,ofeidcategoria,ofeexperiencia,ofefecha) VALUES(?,?,?,?,?,?,?,?,?)');

            $ps->bindParam(1,$ide);
            $ps->bindParam(2,$ent);
            $ps->bindParam(3,$nom);
            $ps->bindParam(4,$des);
            $ps->bindParam(5,$sal);
            $ps->bindParam(6,$niv);
            $ps->bindParam(7,$cat);
            $ps->bindParam(8,$exp);
            $ps->bindParam(9,$fec); 


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



 public function Actualizarofe($ide,$ent,$nom,$des,$sal,$niv,$cat,$exp,$fec)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare("UPDATE  tbofertas  SET ofeentidad=?,ofenombre=?,ofedescripcion=?,ofesalario=?,ofeidnivel=?,ofeidcategoria=?,ofeexperiencia=?,ofefecha=?  WHERE ofeid=?");

            
            $ps->bindParam(1,$ent);
            $ps->bindParam(2,$nom);
            $ps->bindParam(3,$des);
            $ps->bindParam(4,$sal);
            $ps->bindParam(5,$niv);
            $ps->bindParam(6,$cat);
            $ps->bindParam(7,$exp);
            $ps->bindParam(8,$fec); 
            $ps->bindParam(9,$ide);


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


 public function Eliminarofe($ide)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('DELETE FROM  tbofertas   WHERE ofeid=?');

            
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
    

 public function consultarfecha()
    {
        try {
            $ps=Conexion::conexionbd()->prepare('select ofeid,ofeentidad,ofenombre,ofedescripcion,ofesalario,nivnombre,catenombre,ofeexperiencia,ofefecha from tbofertas inner join tbnivel on ofeidnivel=nivid inner join tbcategoria on ofeidcategoria=cateid ORDER BY ofefecha;');
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            
            echo "Error al consultar".$e;
    }
    return $datos;
}

 public function consultarsalario()
    {
        try {
            $ps=Conexion::conexionbd()->prepare('select ofeid,ofeentidad,ofenombre,ofedescripcion,ofesalario,nivnombre,catenombre,ofeexperiencia,ofefecha from tbofertas inner join tbnivel on ofeidnivel=nivid inner join tbcategoria on ofeidcategoria=cateid ORDER BY ofesalario DESC;');
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            
            echo "Error al consultar".$e;
    }
    return $datos;
}


    }
  ?>  
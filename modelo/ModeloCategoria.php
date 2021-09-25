<?php

require_once('conexion.php');

class modeloCategoria{

    public function consultarCategoria()
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select * from tbcategoria;');
            $ps->execute();
            $datoscat=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datoscat;
}




  public function uno($id)
    {
        try {
            $ps=Conexion::conexionbd()->prepare('Select * from  tbaspirante where     aspcedulaaspirante=?;');
            $ps->bindParam(1, $id);
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            echo "Error al consultar".$e;
    }
    return $datos;
}



 public function Insertarasp($ide,$nom,$rol,$gen)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('INSERT INTO tbaspirante (aspcedulaaspirante,aspnombre,asprol,aspgenero) VALUES(?,?,?,?)');

            $ps->bindParam(1,$ide);
            $ps->bindParam(2,$nom);
            $ps->bindParam(3,$rol);
            $ps->bindParam(4,$gen);

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



}
?>
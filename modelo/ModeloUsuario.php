<?php

require_once('conexion.php');

class modeloUsuario{

    public function consultarusu($ide)
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select *from tbusuario where usuid="'.$ide.'";');
            $ps->execute();
            $datos=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datos;
}

    public function consultarusuarios()
    {
        try{
            $ps=Conexion::conexionbd()->prepare('select *from tbusuario;');
            $ps->execute();
            $datos=$ps->fetchALL();

        }catch (Exception $e){
        echo "Error al consultar".$e;
     }
     return $datos;
}




public function filtrarusu($filtrar)
{
try{
    $ps=Conexion::conexionbd()->prepare("select * from tbusuario where usuid like '%".$filtrar."%' or    usutipodocumento like '%".$filtrar."%' or usunombre like '%".$filtrar."%' or usucontrasena like '%".$filtrar."%' or usuestado like '%".$filtrar."%' or  usurol like '%".$filtrar."%' or usucorreo like '%".$filtrar."%'or ususexo like '%".$filtrar."%';");
        $ps->execute();
        $datos=$ps->fetchALL();
    }catch (exception $e){
        echo "Error al consultar".$e;
    }
    return $datos;
}


public function unousu($usuid)
    {
        try {
            $ps=Conexion::conexionbd()->prepare('Select * from tbusuario where usuid=?;');
            $ps->bindParam(1,$usuid);
            $ps->execute();
            $data=$ps->fetchALL();
        } catch (Exeption $e) {
            echo "Error al consultar".$e;
    }
    return $data;
}



public function usuariouno($usuid)
    {
        try {
            $ps=Conexion::conexionbd()->prepare('Select * from tbusuario where usuid=?;');
            $ps->bindParam(1,$usuid);
            $ps->execute();
            $data=$ps->fetchALL();
        } catch (Exeption $e) {
            echo "Error al consultar".$e;
    }
    return $datosusu;
}


 public function Insertarusu($ide,$tip,$nom,$con,$est,$rol,$cor,$sex,$adjunto)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('INSERT INTO tbusuario (USUID,USUTIPODOCUMENTO,USUNOMBRE,USUCONTRASENA,USUESTADO,USUROL,USUCORREO,USUSEXO,USUFOTO) VALUES(?,?,?,?,?,?,?,?,?)');

            $ps->bindParam(1,$ide);
            $ps->bindParam(2,$tip);
            $ps->bindParam(3,$nom);
            $ps->bindParam(4,$con);
            $ps->bindParam(5,$est);
            $ps->bindParam(6,$rol);
            $ps->bindParam(7,$cor);
            $ps->bindParam(8,$sex);
            $ps->bindParam(9,$adjunto);

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



 public function Actualizarusu($ide,$tip,$nom,$con,$est,$rol,$cor,$sex,$adjunto)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare("UPDATE tbusuario SET USUTIPODOCUMENTO=?,USUNOMBRE=?,USUCONTRASENA=?,USUESTADO=?,USUROL=?,USUCORREO=?,USUSEXO=?,USUFOTO=?  WHERE USUID=?");

            
         
            $ps->bindParam(1,$tip);
            $ps->bindParam(2,$nom);
            $ps->bindParam(3,$con);
            $ps->bindParam(4,$est);
            $ps->bindParam(5,$rol);
            $ps->bindParam(6,$cor);
            $ps->bindParam(7,$sex);  
            $ps->bindParam(8,$adjunto);
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


 public function Eliminarusu($ide)
    {
        try
        {
            $ps=Conexion::conexionbd()->prepare('DELETE FROM  tbusuario   WHERE usuid=?');

            
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


        public function loguin($nom,$clav)
            {
                try {
                    $ps=Conexion::conexionbd()->prepare(" call llamarusuario('".$nom."','".$clav."');");
                    $ps->execute();
                    $datos=$ps->fetchALL();
                } catch (Exeption $e) {
                    echo "Error al consultar".$e;
            }
            return $datos;
        }




public function consultarhom()
    {
        try {
            $ps=Conexion::conexionbd()->prepare('SELECT * from tbusuario where ususexo="Hombre";');
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            
            echo "Error al consultar".$e;
    }
    return $datos;
}


 public function consultarmuj()
    {
        try {
            $ps=Conexion::conexionbd()->prepare('SELECT * from tbusuario where ususexo="Mujer";');
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            
            echo "Error al consultar".$e;
    }
    return $datos;
}



 public function consultaraspir()
    {
        try {
            $ps=Conexion::conexionbd()->prepare('SELECT * from tbusuario where usurol="aspirante";');
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            
            echo "Error al consultar".$e;
    }
    return $datos;
}



 public function consultarempl()
    {
        try {
            $ps=Conexion::conexionbd()->prepare('SELECT * from tbusuario where usurol="empleado";');
            $ps->execute();
            $datos=$ps->fetchALL();
        } catch (Exeption $e) {
            
            echo "Error al consultar".$e;
    }
    return $datos;
}



}


?>
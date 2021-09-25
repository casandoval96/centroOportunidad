<?php

 class Conexion{

	public static function conexionbd()
	{
		try{
			$cnn= new PDO('mysql:host=localhost;dbname=empleo','root','');
			$cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch(exception $e){
			die("Error en la conexion".$e->GetMessage());
			echo "Linea de error ".$e->getLine();
		}
		return $cnn;
	}
}

	Conexion::conexionbd();

?>
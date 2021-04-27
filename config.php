<?php

	//definimos las variables para  la base de datos 
	define ('SERVIDOR','127.0.0.1');
	define ('USUARIO', 'postgres');
	define ('PASSWORD', 'coppel987');
	define ('BASE_DE_DATOS', 'pruebas');
	
	$conexion = pg_connect('host='.SERVIDOR.' dbname= '.BASE_DE_DATOS.' user='.USUARIO.' password='.PASSWORD);
	

?>
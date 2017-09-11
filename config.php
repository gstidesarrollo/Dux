<?php

    //Datos de conexion a la base de datos
	$servidor='192.168.1.40';
	$usuario='conector';
	$pass='Itsm3650';
	$bd='MaestroClientes';

	// Nos conectamos a la base de datos
	$conexion = new mysqli($servidor, $usuario, $pass, $bd);
	$conexion->set_charset('utf8');
	// verificamos si hubo algun error y lo mostramos
	if ($conexion->connect_errno) {
		echo "Error al conectar la base de datos {$conexion->connect_errno}";
	}

?>

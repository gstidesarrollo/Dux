<?php

if(isset($_POST["nombre"]))
{
	$nombre    = $_POST["nombre"];
	$apellido  = $_POST["apellido"];
	$empresa   = $_POST["empresa"];
	$cargo     = $_POST["cargo"];
	$correo    = $_POST["correo"];
	$telefono  = $_POST["telefono"];

	$consulta = "INSERT INTO Contacto (nombre, apellido, empresa, cargo, correo, telefono)
	             VALUES('$nombre','$apellido','$empresa','$cargo','$correo','$telefono')";

	if (!$consulta){
		     echo "Error al guardar";
	    }else{
				echo "Guardado con exito";
			}

	$conexion = new mysqli("192.168.1.40","conector","Itsm3650","gsti_prod_otrs",3306);

	/*$respuesta = new stdClass();

	if($conexion->query($consulta)){
		$respuesta->mensaje = "Su Información se gurado correctamente.";
	}
	else {
		$respuesta->mensaje = "Ocurrio un error";
	}
	echo json_encode($respuesta);*/

}

?>

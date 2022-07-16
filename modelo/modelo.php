<?php 
require_once "conexion.php";

class Modelo extends Conexion
{
    #-------------CONSULTAS QUE AYUDARAN A MOSTRAR INFORMACION DE OTRAS TABLAS EN LAS ALTAS -----
	#LISTADO DE REGISTROS DE LA TABLA ESPECIALIDAD
	static public function consultaEspecialidadModelo($tabla)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_especialidad, nombre_especialidad FROM $tabla ORDER BY nombre_especialidad");

		$consulta -> execute();

		return $consulta->fetchAll();

		$consulta->close();
	}

	#LISTADO DE REGISTROS DE LA TABLA HABITACION
	static public function consultaHabitacionModelo($tabla)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_habitacion, num_camas FROM $tabla ORDER BY num_camas");

		$consulta -> execute();

		return $consulta->fetchAll();

		$consulta->close();
	}

	#LISTADO DE LOS REGISTROS DE LA TABLA INGRESO
	static public function consultaIngresoModelo($tabla)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_ingreso, fecha_ingreso FROM $tabla ORDER BY fecha_ingreso");

		$consulta -> execute();

		return $consulta->fetchAll();

		$consulta->close();
	}

	#LISTADO DE LOS REGISTROS DE LA TABLA MEDICO
	static public function consultaMedicoModelo($tabla)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_medico, fk_persona FROM $tabla ORDER BY fk_persona");

		$consulta -> execute();

		return $consulta->fetchAll();

		$consulta->close();
	}

	#LISTADO DE LOS REGISTROS DE LA TABLA PACIENTE
	static public function consultaPacienteModelo($tabla)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_paciente, fk_persona FROM $tabla ORDER BY fk_persona");

		$consulta -> execute();

		return $consulta->fetchAll();

		$consulta->close();
	}

	#LISTADO DE LOS REGISTROS DE LA TABLA PERSONA
	static public function consultaPersonaModelo($tabla)
	{
		$consulta = Conexion::conectar()->prepare("SELECT codigo_persona, CONCAT(nombre, ' ', apellido1, ' ',apellido2) AS nombres FROM $tabla ORDER BY nombres");


		$consulta -> execute();

		return $consulta->fetchAll();

		$consulta->close();
	}
    #LISTADO DE LOS REGISTROS DE LA TABLA POBLACION
	static public function consultaPoblacionModelo($tabla)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_poblacion, fk_provincia FROM $tabla ORDER BY fk_provincia");

		$consulta -> execute();

		return $consulta->fetchAll();

		$consulta->close();
	}
     #LISTADO DE LOS REGISTROS DE LA TABLA PROVINCIA
	static public function consultaProvinciaModelo($tabla)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_provincia, nombre_provincia FROM $tabla ORDER BY nombre_provincia");

		$consulta -> execute();

		return $consulta->fetchAll();

		$consulta->close();
	}
    #----------------------------------- FIN DE LAS CONSULTAS -------------------------------------------


	#REGISTROS DE LA INFORMACION OBTENIDA DE LA ALTA ESPECIALIDAD
	static public function RegistroEspecialidadModelo($datosModelo, $tabla)
	{
		
		$consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre_especialidad) VALUES (:nombre_especialidad)");	

		# EN ESTA PARTE SE OBTIENEN LOS DATOS 
		$consulta->bindParam(":nombre_especialidad", $datosModelo["nombre_especialidad"], PDO::PARAM_STR);

		if($consulta->execute())
		{
			$resultado = "ok";
		}
		else
		{
			$resultado = "error";
		}

		return $resultado;

		$consulta->close();

	}

	#MFUNCION PARA CONSEGUIR LOS DATOS RECABADOS DE LA TABLA ESPECIALIDAD
	static public function listadoEspecialidadModelo($tabla1)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_especialidad, nombre_especialidad FROM $tabla1");

		$consulta->execute();

		return $consulta->fetchAll();

		$consulta->close();
	}


	#REGISTRO DE LA INFORMACION OBTENIDA DE LA ALTA DE HABITACION
	static public function RegistroHabitacionModelo($datosModelo, $tabla)
	{

		$consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (cod_habitacion, num_camas) VALUES (:cod_habitacion, :num_camas)");	

		$consulta->bindParam(":cod_habitacion", $datosModelo["cod_habitacion"], PDO::PARAM_STR);
		$consulta->bindParam(":num_camas", $datosModelo["num_camas"], PDO::PARAM_STR);
		

		if($consulta->execute())
		{
			$resultado = "ok";
		}
		else
		{
			$resultado = "error";
		}

		return $resultado;

		$consulta->close();

	}

	#OBTENCION DE LOS REGISTROS DE LA TABLA HABITACIOM
	static public function listadoHabitacionModelo($tabla)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_habitacion, num_camas FROM $tabla");

		$consulta->execute();

		return $consulta->fetchAll();

		$consulta->close();
	}

	#REGISTRO DE LA INFORMACION OBTENIDA DE LA ALTA INGRESO
	static public function RegistroIngresoModelo($datosModelo, $tabla)
	{
		$consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (cod_ingreso, fecha_ingreso, num_cama, fk_paciente, fk_medico, fk_habitacion) 
		VALUES (:cod_ingreso, :fecha_ingreso, :num_cama, :fk_paciente, :fk_medico, :fk_habitacion)");	

		#OBTENCION DE DATOS
		$consulta->bindParam(":cod_ingreso", $datosModelo["cod_ingreso"], PDO::PARAM_STR);
		$consulta->bindParam(":fecha_ingreso", $datosModelo["fecha_ingreso"], PDO::PARAM_STR);
		$consulta->bindParam(":num_cama", $datosModelo["num_cama"], PDO::PARAM_STR);
		$consulta->bindParam(":fk_paciente", $datosModelo["fk_paciente"], PDO::PARAM_STR);
		$consulta->bindParam(":fk_medico", $datosModelo["fk_medico"], PDO::PARAM_STR);
		$consulta->bindParam(":fk_habitacion", $datosModelo["fk_habitacion"], PDO::PARAM_STR);

		if($consulta->execute())
		{
			$resultado = "ok";
		}
		else
		{
			$resultado = "error";
		}

		return $resultado;

		$consulta->close();
	}

	#FUNCION PARA OBTENRR REGISTROS DE LA TABLA INGRESO
	static public function listadoIngresoModelo($tabla1, $tabla2, $tabla3, $tabla4)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_ingreso, fecha_ingreso, num_cama, fk_paciente, fk_medico, fk_habitacion 
		FROM $tabla1, $tabla2, $tabla3, $tabla4 WHERE fk_paciente = cod_paciente AND fk_medico = cod_medico AND fk_habitacion = cod_habitacion");

		$consulta->execute();

		return $consulta->fetchAll();

		$consulta->close();
	}
    

	#INFORMACION OBTENIDA DE LA ALTA MEDICO
	static public function RegistroMedicoModelo($datosModelo, $tabla)
	{

		$consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (cod_medico, fk_especialidad, fk_persona) 
		VALUES (:cod_medico, :fk_especialidad, :fk_persona)");	

		$consulta->bindParam(":cod_medico", $datosModelo["cod_medico"], PDO::PARAM_STR);
		$consulta->bindParam(":fk_especialidad", $datosModelo["fk_especialidad"], PDO::PARAM_STR);
        $consulta->bindParam(":fk_persona", $datosModelo["fk_persona"], PDO::PARAM_STR);
		
		
		if($consulta->execute())
		{
			$resultado = "ok";
		}
		else
		{
			$resultado = "error";
		}

		return $resultado;

		$consulta->close();

	}

	#FUNCION PARA OBTENER LOS REGISTROS DE LA TABLA MEDICO
	static public function listadoMedicoModelo($tabla1, $tabla2, $tabla3)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_medico,  
		CONCAT(nombre, ' ', apellido1, ' ', apellido2) AS 'nombres', fk_especialidad, fk_persona 
		FROM $tabla1, $tabla2, $tabla3 WHERE fk_especialidad = cod_especialidad AND fk_persona = cod_persona");

		$consulta->execute();

		return $consulta->fetchAll();

		$consulta->close();
	}

	#INFORMACION DE LA ALTA PACIENTE 
	static public function RegistroPacienteModelo($datosModelo, $tabla)
	{
		
		$consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (cod_paciente, direccion, fecha_nacimiento, fk_persona, fk_poblacion) 
		VALUES (:cod_paciente, :direccion, :fecha_nacimiento, :fk_persona, :fk_poblacion)");	

		$consulta->bindParam(":cod_paciente", $datosModelo["cod_paciente"], PDO::PARAM_STR);
		$consulta->bindParam(":direccion", $datosModelo["direccion"], PDO::PARAM_STR);
		$consulta->bindParam(":fecha_nacimiento", $datosModelo["fecha_nacimiento"], PDO::PARAM_STR);
		$consulta->bindParam(":fk_persona", $datosModelo["fk_persona"], PDO::PARAM_STR);
		$consulta->bindParam(":fk_poblacion", $datosModelo["fk_poblacion"], PDO::PARAM_STR);


		if($consulta->execute())
		{
			$resultado = "ok";
		}
		else
		{
			$resultado = "error";
		}

		return $resultado;

		$consulta->close();

	}


    #OBTENCION DE LOS REGISTROS DE LA TABLA PACIENTE    
	static public function listadoPacienteModelo($tabla1, $tabla2, $tabla3)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_paciente, CONCAT(nombre, ' ', primer_apellido, ' ', segundo_apellido) AS 'nombres', edad, sexo, telefono FROM $tabla1");

		$consulta->execute();

		return $consulta->fetchAll();

		$consulta->close();
	}

	#INFORMACION DE LA ALTA poblacion
	static public function RegistroPoblacionModelo($datosModelo, $tabla)
	{

		$consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (cod_poblacion, cp, fk_provincia) VALUES (:cod_poblacion, :cp, :fk_provincia)");	

		$consulta->bindParam(":cod_poblacion", $datosModelo["cod_poblacion"], PDO::PARAM_STR);
		$consulta->bindParam(":cp", $datosModelo["cp"], PDO::PARAM_STR);
		$consulta->bindParam(":fk_provincia", $datosModelo["fk_provincia"], PDO::PARAM_STR);

		if($consulta->execute())
		{
			$resultado = "ok";
		}
		else
		{
			$resultado = "error";
		}

		return $resultado;

		$consulta->close();

	}

	#OBTENCION DE REGISTROS DE LA TABLA LABORATORIO 
	static public function listadoPoblacionModelo($tabla1, $tabla2)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_poblacion, cp, fk_provincia FROM $tabla1, $tabla2 WHERE fk_provincia = cod_provincia");

		$consulta->execute();

		return $consulta->fetchAll();

		$consulta->close();
	}
	#INFORMACION DE LA ALTA PRODUCTO 
	static public function RegistroPersonaModelo($datosModelo, $tabla)
	{
		$consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (codigo_persona, nombre, apellido1, apellido2, telefono) VALUES (:codigo_persona, :nombre, :apellido1, :apellido2, :telefono");	

		$consulta->bindParam(":codigo_persona", $datosModelo["codigo_persona"], PDO::PARAM_STR);
		$consulta->bindParam(":nombre", $datosModelo["nombre"], PDO::PARAM_STR);
		$consulta->bindParam(":apellido1", $datosModelo["apellido1"], PDO::PARAM_STR);
		$consulta->bindParam(":apellido2", $datosModelo["apellido2"], PDO::PARAM_STR);
		$consulta->bindParam(":telefono", $datosModelo["telefono"], PDO::PARAM_STR);

		if($consulta->execute())
		{
			$resultado = "ok";
		}
		else
		{
			$resultado = "error";
		}

		return $resultado;

		$consulta->close();

	}

	#OBTENCION DE INFORMACION DE LA TABLA PRODUCTO 
	static public function listadoPersonaModelo($tabla1)
	{
		$consulta = Conexion::conectar()->prepare("SELECT codigo_persona, nombre, apellido1, apellido2, telefono FROM $tabla1");

		$consulta->execute();

		return $consulta->fetchAll();

		$consulta->close();
	}

    #INFORMACION DE LA ALTA TIPO ENSAYO
	static public function RegistroProvinciaModelo($datosModelo, $tabla)
	{
		$consulta = Conexion::conectar()->prepare("INSERT INTO $tabla (cod_provincia, nombre_provincia) VALUES (:cod_provincia, :nombre_provincia)");	

		$consulta->bindParam(":cod_provincia", $datosModelo["cod_provincia"], PDO::PARAM_STR);
		$consulta->bindParam(":nombre_provincia", $datosModelo["nombre_provincia"], PDO::PARAM_STR);

		if($consulta->execute())
		{
			$resultado = "ok";
		}
		else
		{
			$resultado = "error";
		}

		return $resultado;

		$consulta->close();

	}

	#OBTENCION DE INFORMACION DE LA TABLA PRODUCTO 
	static public function listadoProvinciaModelo($tabla1)
	{
		$consulta = Conexion::conectar()->prepare("SELECT cod_provincia, nombre_provincia FROM $tabla1");

		$consulta->execute();

		return $consulta->fetchAll();

		$consulta->close();
	}


}

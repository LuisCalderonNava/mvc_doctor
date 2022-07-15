<?php 
class Controlador 
{
	#CON ESTA FUNCION FUNCION SE LLAMA A LA PLANTILLA 
	#-----------------------
	static public function pagina()
	{
		include "vistas/plantilla.php";
	}

	#LLAMADAS A LOS MODULOS 
	static public function enlacesPaginasControlador()
	{
		if(isset($_GET['opcion']))
		{
			$enlace = $_GET['opcion'];
		}
		else
		{
			$enlace = "principal";
		}

		$respuesta = Paginas::enlacesPaginasModelo($enlace);

		include $respuesta;
	}

	#CONSULTA PARA SACAR EL NOMBRE DE LAS especialidades
	static public function consultaEspecialidadControlador()
	{
		$tabla = 'especialidad';
		$respuesta = Modelo::consultaEspecialidadModelo($tabla);

		return $respuesta;
	}

	#CONSULTA PARA las habitaciones
	static public function consultaHabitacionControlador()
	{
		$tabla = 'habitacion';
		$respuesta = Modelo::consultaHabitacionModelo($tabla);

		return $respuesta;
	}

	#CONSULTA para los ingresos
	static public function consultaIngresoControlador()
	{
		$tabla = 'ingreso';
		$respuesta = Modelo::consultaIngresoModelo($tabla);

		return $respuesta;
	}

	#CONSULTA para los medicos
	static public function consultaMedicoControlador()
	{
		$tabla = 'medico';
		$respuesta = Modelo::consultaMedicoModelo($tabla);

		return $respuesta;
	}

	#CONSULTA NOMBRE DE LOS pasientes
	static public function consultaPacienteControlador()
	{
		$tabla = 'paciente';
		$respuesta = Modelo::consultaPacienteModelo($tabla);

		return $respuesta;
	}

	#CONSULTA para ver las personas
	static public function consultaPersonaControlador()
	{
		$tabla = 'persona';
		$respuesta = Modelo::consultaPersonaModelo($tabla);

		return $respuesta;
	}
    #CONSULTA PARA la provincia
	static public function consultaProvinciaControlador()
	{
		$tabla = 'provincia';
		$respuesta = Modelo::consultaProvinciaModelo($tabla);

		return $respuesta;
	}
	  #CONSULTA PARA la provincia
	  static public function consultaPoblacionControlador()
	  {
		  $tabla = 'poblacion';
		  $respuesta = Modelo::consultaPoblacionModelo($tabla);
  
		  return $respuesta;
	  }

	#REGISTRO QUE SACA LA INFORMACION DE LO QUE CONTIENE LA TABLA especialidad
	static public function registroEspecialidadControlador()
	{
		if(isset($_POST['nombre_especialidad']))
		{
			$tabla = "especialidad";

			$datosControlador = array("nombre_especialidad"=>$_POST['nombre_especialidad']);

			$respuesta = Modelo::RegistroEspecialidadModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardo los datos',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'Oops...',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}
	#METODO DE OBTENCION DE INFORMACION especialidad
	static public function MostrarEspecialidadControlador()
	{
		$respuesta = Modelo::listadoEspecialidadModelo("especialidad");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['cod_especialidad']; ?></td>
					<td><?php echo $valores['nombre_especialidad']; ?></td>
				</tr>
			<?php
		}
	}
	#REGISTRO INFROMACION DE habitaciones
	static public function registroHabitacionControlador()
	{
		if(isset($_POST['num_camas']))
		{
			$tabla = "habitacion";

			$datosControlador = array("num_camas"=>$_POST['num_camas']);

			$respuesta = Modelo::RegistroHabitacionModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardo los datos',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'Oops...',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}

	#METODO PARA OBTENER LOS REGISTROS DE LA TABLA habitacion
	static public function MostrarHabitacionControlador()
	{
		$respuesta = Modelo::listadoHabitacionModelo("habitacion");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['cod_habitacion']; ?></td>
					<td><?php echo $valores['num_camas']; ?></td>
				</tr>
			<?php
		}
	}

	#REGISTRO INFORMACION medico
	static public function registroMedicoControlador()
	{
		if(isset($_POST['cod_medico']))
		{
			$tabla = "medico";

			$datosControlador = array("cod_medico"=>$_POST['medico'], "cod_especialidad"=>$_POST['especialidad'], "codigo_persona"=>$_POST['persona']);

			$respuesta = Modelo::RegistroMedicoModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardo los datos',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'Oops...',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
		
	}

	#METODO PARA LA OBTENCION DE LOS REGISTROS DE LA TABLA DE medico
	static public function MostrarMedicoControlador()
	{
		$respuesta = Modelo::listadoMedicoModelo("especialidad", "persona", "medico");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['cod_medico']; ?></td>
					<td><?php echo $valores['cod_especialidad']; ?></td>
					<td><?php echo $valores['codigo_persona']; ?></td>
				</tr>
			<?php
		}
	}
	

	#REGISTRO INFROMACION paciente
	static public function registroPacienteControlador()
	{
		if(isset($_POST['medidas']))
		{
			$tabla = "paciente";

			$datosControlador = array("cod_paciente"=>$_POST['cod_paciente'],"direccion"=>$_POST['direccion'], "fecha_nacimiento"=>$_POST['fecha_nacimiento'], "fk_persona"=>$_POST['fk_persona'], "fk_poblacion"=>$_POST['fk_poblacion']);

			$respuesta = Modelo::RegistroPacienteModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardo los datos',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'Oops...',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
		
	}

	#OBTENCION DE LOS REGISTROS DE LA TABLA paciente
	static public function MostrarPacienteControlador()
	{
		$respuesta = Modelo::listadoPacienteModelo("paciente", "poblacion", "persona" );

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['cod_paciente']; ?></td>
					<td><?php echo $valores['direccion']; ?></td>
					<td><?php echo $valores['fecha_nacimiento']; ?></td>
                    <td><?php echo $valores['fk_persona']; ?></td>
					<td><?php echo $valores['fk_poblacion']; ?></td>
				</tr>
			<?php
		}
	}

	#INFORMACION DEL JEFE persona
	static public function registroPersonaControlador()
	{
		if(isset($_POST['nombre']))
		{
			$tabla = "persona";

			$datosControlador = array("codigo_persdona"=>$_POST['codigo_persdona'],"nombre"=>$_POST['nombre'],"apellido1"=>$_POST['apellido1'],"apellido2"=>$_POST['apellido2'], "telefono"=>$_POST['telefono']);

			$respuesta = Modelo::RegistroPersonaModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardo los datos',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'Oops...',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
		
	}

	#OBTENCION DE REGISTROS DE LA TABLA persona
	static public function MostrarPersonaControlador()
	{
		$respuesta = Modelo::listadoPersonaModelo("persona");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['codigo_persona']; ?></td>
					<td><?php echo $valores['nombre']; ?></td>
					<td><?php echo $valores['apellido1']; ?></td>
					<td><?php echo $valores['apellido2']; ?></td>
					<td><?php echo $valores['telefono']; ?></td>
				</tr>
			<?php
		}
	}

	#INFROMACION poblacion
	static public function registroPoblacionControlador()
	{
		if(isset($_POST['cod_poblacion']))
		{
			$tabla = "poblacion";

			$datosControlador = array("cod_poblacion"=>$_POST['cod_poblacion'], "cp"=>$_POST['cp'], "fk_provincia"=>$_POST['fk_provincia']);

			$respuesta = Modelo::RegistroPoblacionModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardo los datos',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'Oops...',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}

	#OBTENCION DE REGISTROS DE LA TABLA LABORATORIO
	static public function MostrarPoblacionControlador()
	{
		$respuesta = Modelo::listadoPoblacionModelo("poblacion", "provincia");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['cod_poblacion']; ?></td>
					<td><?php echo $valores['cp']; ?></td>
					<td><?php echo $valores['fk_provincia']; ?></td>
				</tr>
			<?php
		}
	}

	#INFORMACION DE LA TABLA Provincia
	static public function registroProvinciaControlador()
	{
		if(isset($_POST['nombre_provincia']))
		{
			$tabla = "provincia";

			$datosControlador = array("cod_provincia"=>$_POST['cod_provincia'], "nombre_provincia"=>$_POST['nombre_provincia']);

			$respuesta = Modelo::RegistroProvinciaModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardo los datos',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'Oops...',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}

	#INFORMACION DE PROvincia
	static public function MostrarProvinciaControlador()
	{
		$respuesta = Modelo::listadoProvinciaModelo("provincia");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['cod_provincia']; ?></td>
					<td><?php echo $valores['nombre_provincia']; ?></td>
				</tr>
			<?php
		}
	}
    #INFORMACION DE LA TABLA ENSAYO
	static public function registroIngresoControlador()
	{
		if(isset($_POST['fecha_ingreso']))
		{
			$tabla = "ingreso";

			$datosControlador = array("cod_ingreso"=>$_POST['cod_ingreso'],"fecha_ingreso"=>$_POST['fecha_ingreso'],"num_cama"=>$_POST['num_cama'],"fk_paciente"=>$_POST['fk_paciente'],"fk_medico"=>$_POST['fk_medico'],"fk_habitacion"=>$_POST['fk_habitacion'],);

			$respuesta = Modelo::RegistroTPensayoModelo($datosControlador, $tabla);

			if($respuesta == 'ok')
			{
				?>
				<script>
					Swal.fire({
						  position: 'top-end',
						  icon: 'success',
						  title: 'Se guardo los datos',
						  showConfirmButton: false,
						  timer: 1500
						})
				</script>
				<?php
			}
			else 
			{
				?>
				<script>
					Swal.fire({
					  icon: 'error',
					  title: 'Oops...',
					  text: 'Something went wrong!'
					})
				</script>
				<?php
			}

		}
	}

	#OBTENCION DE INFORMACION DE TIPO ENSAYO
	static public function MostrarIngresoControlador()
	{
		$respuesta = Modelo::listadoIngresoModelo("ingreso","paciente","medico","habitacion");

		foreach ($respuesta as $renglon => $valores) 
		{
			?>
				<tr>
					<td><?php echo $valores['cod_ingreso']; ?></td>
					<td><?php echo $valores['fecha_ingreso']; ?></td>
					<td><?php echo $valores['num_cama']; ?></td>
					<td><?php echo $valores['fk_paciente']; ?></td>
					<td><?php echo $valores['fk_medico']; ?></td>
					<td><?php echo $valores['fk_habitacion']; ?></td>
				</tr>
			<?php
		}
	}


}
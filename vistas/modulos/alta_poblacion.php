<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta Poblacion</h1>
    <p class="lead">llene todos los campos solicitados, Por favor</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
	<!--Codigo postal-->
	<div class="mb-3">
  	<label for="cp" class="form-label">Codigo Postal</label>
  	<input type="text" class="form-control" id="cp" placeholder="36639" name="cp" maxlength="5" required onkeypress="return soloNumeros(event)">
	</div>
    <!--Provincia -->
    <div class="mb-3">
	<label for="provincia" class="form-label">Provincia</label>
	<select class="form-select" aria-label="Default select example" name="provincia" id="provincia" required>
	  <option value="">Seleccione...</option>
	  <?php 
	  	$consulta = Controlador::consultaProvinciaControlador();
	  	foreach($consulta as $datos => $valores)
	  	{
	  		echo '<option value="'.$valores["cod_provincia"].'">'.$valores["nombre_provincia"].'</option>';
	  	}
	  ?>
	</select>
	</div>
	<!--Boton-->
	<div class="d-grid gap-2 col-6 mx-auto">
  		<button type="submit" class="btn btn-secondary">Guardar</button>
	</div>
	<script type="text/javascript">
    function soloNumeros(e)
    {
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "123456789";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales)
       {
            if(key == especiales[i])
            {
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial)
        {
            return false;
        }
    }
    </script>
</form>
<?php
	$registro = new Controlador();
	$registro -> registroPoblacionControlador();
?>
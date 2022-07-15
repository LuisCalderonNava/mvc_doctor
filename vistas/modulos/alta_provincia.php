<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Alta Provincia</h1>
    <p class="lead">llene todos los campos solicitados, Por favor</p>
  </div>
</div>
<br><br>
<form method="POST" enctype="multipart/form-data" autocomplete="off">
	<!--Nombre de la categoria-->
	<div class="mb-3">
  	<label for="provincia" class="form-label">Nombre de la provincia</label>
  	<input type="text" class="form-control" id="nombre_provincia" placeholder="malaga" name="nombre_provincia" required onkeypress="return soloLetras(event)" maxlength="30">
	</div>
	<!--Boton-->
	<div class="d-grid gap-2 col-6 mx-auto">
  		<button type="submit" class="btn btn-secondary">Guardar</button>
	</div>
	<script type="text/javascript">
    function soloLetras(e)
    {
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
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
	$registro -> registroProvinciaControlador();
?>
</div><br>
    <div class="bs-example">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="page-header clearfix">
            <h2 class="pull-left">Lista de Pacientes</h2>
    </div>
    <table id="paciente" class="table table-sm table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>codigo del paciente</th>
                <th>Direccion</th>
                <th>Fecha de nacimiento</th>
                <th>Persona</th>
                <th>Poblacion</th>
                <?php
$paciente =  new Controlador();
$paciente -> MostrarPacienteControlador();
?>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>codigo del medico</th>
            </tr>
        </tfoot>
    </table>
        </div>
        </div> 
        </div>
        </div>    
</body>    
</html>
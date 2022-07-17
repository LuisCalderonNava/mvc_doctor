
    </div><br>
    <div class="bs-example">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="page-header clearfix">
            <h2 class="pull-left">Lista de Especialidades</h2>
    </div>

    <table id="text" class="table table-sm table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>codigo de la especialidad</th>
                <th>Nombre de la Especialidad</th>
                <?php
$especialidad = new Controlador();
$especialidad -> MostrarEspecialidadControlador();
?>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre de la Especialidad</th>
            </tr>
        </tfoot>
    </table>
        </div>
        </div> 
        </div>
        </div>    
</body>    
</html>
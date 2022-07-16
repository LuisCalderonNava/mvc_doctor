</div><br>
    <div class="bs-example">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="page-header clearfix">
            <h2 class="pull-left">Lista de Especialidades</h2>
    </div>
    <table id="especialidad" class="table table-sm table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>codigo de la habitacion</th>
                <th>Numero de camas</th>
                <?php
$habitacion = new Controlador();
$habitacion -> MostrarHabitacionControlador();
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
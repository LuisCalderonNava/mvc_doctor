</div><br>
    <div class="bs-example">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="page-header clearfix">
            <h2 class="pull-left">Lista de Ingresos</h2>
    </div>
    <table id="especialidad" class="table table-sm table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>codigo de ingreso</th>
                <th>Fecha de ingreso</th>
                <th>Numero de cama</th>
                <th>Paciente:  </th>
                <th>Medico: </th>
                <th>Habitacion: </th>
<?php
$ingreso = new Controlador();
$ingreso -> MostrarIngresoControlador();

?>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>codigo de ingreso</th>
            </tr>
        </tfoot>
    </table>
        </div>
        </div> 
        </div>
        </div>    
</body>    
</html>
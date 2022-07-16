</div><br>
    <div class="bs-example">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="page-header clearfix">
            <h2 class="pull-left">Lista de Especialidades</h2>
    </div>
    <table id="medico" class="table table-sm table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>codigo del medico</th>
                <th>Especialidad</th>
                <th>Persona</th>
                <?php
$medico =  new Controlador();
$medico -> MostrarMedicoControlador();
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
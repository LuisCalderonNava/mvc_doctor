</div><br>
    <div class="bs-example">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="page-header clearfix">
            <h2 class="pull-left">Lista de Personas</h2>
    </div>
    <table id="persona" class="table table-sm table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>codigo de la persona</th>
                <th>Nombre </th>
                <th>apellido 1</th>
                <th>apellido 2</th>
                <th>Telefono</th>
                <?php
$persona =  new Controlador();
$persona -> MostrarPersonaControlador();
?>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>codigo de la persona</th>
            </tr>
        </tfoot>
    </table>
        </div>
        </div> 
        </div>
        </div>    
</body>    
</html>
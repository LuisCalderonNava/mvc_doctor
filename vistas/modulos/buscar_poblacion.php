</div><br>
    <div class="bs-example">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="page-header clearfix">
            <h2 class="pull-left">Lista de Poblacion</h2>
    </div>
    <table id="poblacion" class="table table-sm table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>codigo de la poblacion</th>
                <th>CP </th>
                <th>Provincia</th>
                <?php
$poblacion =  new Controlador();
$poblacion -> MostrarPoblacionControlador();
?>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>codigo de la provincia</th>
            </tr>
        </tfoot>
    </table>
        </div>
        </div> 
        </div>
        </div>    
</body>    
</html>
</div><br>
    <div class="bs-example">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="page-header clearfix">
            <h2 class="pull-left">Lista de Provincia</h2>
    </div>
    <table id="poblacion" class="table table-sm table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>codigo de la provincia</th>
                <th>Nombre de la provincia </th>
                <?php
$provincia =  new Controlador();
$provincia -> MostrarProvinciaControlador();
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
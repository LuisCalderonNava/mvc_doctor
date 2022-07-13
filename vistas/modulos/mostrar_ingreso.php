<?php 
// Database connection info 
$dbDetails = array( 
'host' => 'localhost', 
'user' => 'root', 
'pass' => '', //Se deja en blanco porque en este caso el usuario root no tiene password 
'db' => 'medicos'
); 
// mysql db table to use 
$table = 'ingreso'; 
// Table's primary key 
$primaryKey = 'cod_ingreso'; 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database. 
// The `dt` parameter represents the DataTables column identifier. 
$columns = array
( 
    array( 'db' => 'cod_ingreso', 'dt' => 0 ),
    array( 'db' => 'fecha_ingreso', 'dt' => 1 ),
    array( 'db' => 'num_cama', 'dt' => 2 ),
    array( 'db' => 'fk_paciente', 'dt' => 3 ),
    array( 'db' => 'fk_medico', 'dt' => 4 ),
    array( 'db' => 'fk_habitacion', 'dt' => 5 ),
); 
// Include SQL query processing class 
require 'ssp.class.php'; 
// Output data as json format 
echo json_encode( 
SSP::simple($_GET, $dbDetails, $table, $primaryKey, $columns)
);
$ingreso = new Controlador();
$ingreso -> MostrarIngresoControlador();
?>
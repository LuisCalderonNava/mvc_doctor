<?php 
// Database connection info 
$dbDetails = array( 
'host' => 'localhost', 
'user' => 'root', 
'pass' => '', //Se deja en blanco porque en este caso el usuario root no tiene password 
'db' => 'medicos'
); 
// mysql db table to use 
$table = 'paciente'; 
// Table's primary key 
$primaryKey = 'cod_paciente'; 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database. 
// The `dt` parameter represents the DataTables column identifier. 
$columns = array
( 
    array( 'db' => 'cod_paciente', 'dt' => 0 ),
    array( 'db' => 'direccion', 'dt' => 1 ),
    array( 'db' => 'fecha_nacimiento', 'dt' => 2 ),
    array( 'db' => 'fk_persona', 'dt' => 3 ),
    array( 'db' => 'fk_poblacion', 'dt' => 4 )
); 
// Include SQL query processing class 
require 'ssp.class.php'; 
// Output data as json format 
echo json_encode( 
SSP::simple($_GET, $dbDetails, $table, $primaryKey, $columns)
);
$paciente =  new Controlador();
$paciente -> MostrarPacienteControlador();
?>
<?php 
// Database connection info 
$dbDetails = array( 
'host' => 'localhost', 
'user' => 'root', 
'pass' => '', //Se deja en blanco porque en este caso el usuario root no tiene password 
'db' => 'medicos'
); 
// mysql db table to use 
$table = 'persona'; 
// Table's primary key 
$primaryKey = 'codigo_persona'; 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database. 
// The `dt` parameter represents the DataTables column identifier. 
$columns = array
( 
    array( 'db' => 'codigo_persona', 'dt' => 0 ),
    array( 'db' => 'nombre', 'dt' => 1 ),
    array( 'db' => 'apellido1', 'dt' => 2 ),
    array( 'db' => 'apellido2', 'dt' => 3 ),
    array( 'db' => 'telefono', 'dt' => 4 )
); 
// Include SQL query processing class 
require 'ssp.class.php'; 
// Output data as json format 
echo json_encode( 
SSP::simple($_GET, $dbDetails, $table, $primaryKey, $columns)
);
$persona =  new Controlador();
$persona -> MostrarPersonaControlador();
?>
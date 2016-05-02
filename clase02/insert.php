<?php
require 'medoo.php';
 
$database = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'test',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'charset' => 'utf8'
]);
 

if($_POST){
    
    $database->insert("tb_personal", [
        "depto" => $_POST["depto"],
        "nombre" => $_POST["nombre"],
        "apellido" => $_POST["apellido"]
    ]);
}

?>
<html>
    
    <head></head>
    <body>
        <form action="insert.php" method="post">
           <label>Departamento</label>
            <input type="text" name="depto">
            <label>Nombre</label>
            <input type="text" name="nombre">
            <label>Apellido</label>
            <input type="text" name="apellido">
            <input type="submit">
            
        </form>
    </body>
</html>









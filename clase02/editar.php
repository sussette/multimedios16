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
 
/*$database->insert("tb_personal", [
	"depto" => "foo",
	"nombre" => "foo@bar.com",
	"apellido" => "foo@bar.com"
]);*/

if($_GET){
    $data = $database->select(
        "tb_personal", 
        "*",
        [
            "id_personal" => $_GET["id"]
        ]);
}

if($_POST){
    
    $database->update(
        "tb_personal", 
        [
            "depto" => $_POST["depto"],
            "nombre" => $_POST["nombre"],
            "apellido" => $_POST["apellido"]
        ],[
            "id_personal" => $_POST["id"]
        ]);
}

?>
<html>
    
    <head></head>
    <body>
        <form action="editar.php" method="post">
           <label>Departamento</label>
            <input type="text" name="depto" value='<?php echo $data[0]["depto"] ?>'>
            <label>Nombre</label>
            <input type="text" name="nombre" value='<?php echo $data[0]["nombre"] ?>'>
            <label>Apellido</label>
            <input type="text" name="apellido" value='<?php echo $data[0]["apellido"] ?>'>
            <input type="hidden" name="id" value='<?php echo $data[0]["id_personal"] ?>'>
            <input type="submit">
            
        </form>
    </body>
</html>









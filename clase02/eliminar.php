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
 
if($_GET){
    $data = $database->select(
        "tb_personal", 
        "*",
    [
        "id_personal" => $_GET["id"]
    ]);
}

if($_POST){
    
    $database->delete(
        "tb_personal",
    [
        "id_personal" => $_POST["id"]
    ]);
    header("location:list.php");
}

?>
<html>
    
    <head></head>
    <body>
        <form action="eliminar.php" method="post">
           <h2>Eliminar</h2>
            <h3><?php echo $data[0]["nombre"]." ".$data[0]["apellido"]; ?></php></h3>
            
            <input type="hidden" name="id" value='<?php echo $data[0]["id_personal"] ?>'>
            <input type="submit" value="SI">
            <input type="button" value="NO" onclick="history.back();">
            
        </form>
    </body>
</html>









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
 
$data = $database->select("tb_personal", "*");

?>


<html>
    <head></head>
    <body>
        <table border="1">
           <tr><td>Depto</td><td>Nombre</td><td>Apellido</td><td>Opciones</td></tr>
         
            <?php
                $len = count($data);
                for($i=0; $i<$len; $i++){
                    echo  "<tr><td>".$data[$i]["id_depto"]."</td><td>".$data[$i]["nombre"]."</td><td>".$data[$i]["apellido"]."</td><td><a href='editar.php?id=".$data[$i]["id_personal"]."'>Editar</a> <a href='eliminar.php?id=".$data[$i]["id_personal"]."'>Eliminar</a></td></tr>";
                }
            ?>
        </table>
        <br>
        <a href="insert.php">INSERT</a>
    </body>
</html>













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
 
//$data = $database->select("tb_personal", "*");

/*
select 
    tb_personal.id_personal, tb_personal.nombre, tb_personal.apellido, tb_personal.id_depto, tb_deptos.id_depto, tb_deptos.depto
from 
    tb_personal inner join tb_deptos
on 
    tb_personal.id_depto = tb_deptos.id_depto
*/

$data = $database->select("tb_personal", [
		  "[><]tb_deptos" => ["id_depto" => "id_depto"]
		],[
			"tb_personal.id_personal",
			"tb_personal.nombre",
            "tb_personal.apellido",
            "tb_personal.gender",
			"tb_personal.profile",
			"tb_deptos.id_depto",
			"tb_deptos.depto"
		]);

?>


<html>
    <head></head>
    <body>
        <table border="1">
           <tr><td>Depto</td><td>Nombre</td><td>Apellido</td><td>Perfil</td><td>Opciones</td></tr>
         
            <?php
                $len = count($data);
                for($i=0; $i<$len; $i++){
                    echo  "<tr><td>".$data[$i]["depto"]."</td><td>".$data[$i]["nombre"]."</td><td>".$data[$i]["apellido"]."</td><td><img width='64' height='64' src='".$data[$i]["profile"]."'/></td><td><a href='editar.php?id=".$data[$i]["id_personal"]."'>Editar</a> <a href='eliminar.php?id=".$data[$i]["id_personal"]."'>Eliminar</a></td></tr>";
                }
            ?>
        </table>
        <br>
        <a href="insert.php">INSERT</a>
    </body>
</html>













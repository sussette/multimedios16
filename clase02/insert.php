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
        "id_depto" => $_POST["depto"],
        "nombre" => $_POST["nombre"],
        "apellido" => $_POST["apellido"]
    ]);
    
    echo "depto-> ".$_POST["depto"];
}

$deptos = $database->select("tb_deptos", "*");

?>
<html>
    
    <head>
        
        
    </head>
    <body>
        <form action="insert.php" method="post">
           
           <table>
               <tr>
                   <td><label>Departamento</label></td>
                   <td>
                       <select name="depto" id="">
                
                        <?php

                            $len = count($deptos);
                            for($i=0; $i<$len; $i++){
                                echo "<option value=".$deptos[$i]["id_depto"].">".$deptos[$i]["depto"]."</option>";
                            }
                        ?>
                
                        </select>
                    </td>
               </tr>
               
                <tr>
                    <td><label>Nombre</label></td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                
                <tr>
                   <td><label>Apellido</label></td>
                   <td><input type="text" name="apellido"></td>
                </tr>
                
                <tr>
                   <td>
                    <input type="submit" value="REGISTRAR">
                    </td>
                </tr>
           </table>
            
        </form>
    </body>
</html>









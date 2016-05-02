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
    
    $database->update(
        "tb_personal", 
        [
            "depto" => $_POST["depto"],
            "nombre" => $_POST["nombre"],
            "apellido" => $_POST["apellido"]
        ],[
            "id_personal" => $_POST["id"]
        ]);
    header("location:list.php");
}

$deptos = $database->select("tb_deptos", "*");

?>
<html>
    
    <head>
        
        
    </head>
    <body>
        <form action="editar.php" method="post">
           <table>
               <tr>
                   <td><label>Departamento</label></td>
                   <td><select name="depto" id="">
                
                        <?php

                            $len = count($deptos);
                            for($i=0; $i<$len; $i++){
                                if($deptos[$i]["id_depto"] == $data[0]["id_depto"]){
                                    echo "<option value=".$deptos[$i]["id_depto"]." selected>".$deptos[$i]["depto"]."</option>";
                                }else{
                                   echo "<option value=".$deptos[$i]["id_depto"].">".$deptos[$i]["depto"]."</option>"; 
                                }

                            }
                        ?>

                    </select></td>
               </tr>
               <tr>
                   <td><label>Nombre</label></td>
                   <td><input type="text" name="nombre" value='<?php echo $data[0]["nombre"] ?>'></td>
               </tr>
               <tr>
                   <td><label>Apellido</label></td>
                   <td><input type="text" name="apellido" value='<?php echo $data[0]["apellido"] ?>'></td>
               </tr>
                <tr>
                    <td><input type="hidden" name="id" value='<?php echo $data[0]["id_personal"] ?>'></td>
                    <td><input type="submit" value="EDITAR">
            <input type="button" value="CANCELAR" onclick="history.back();"></td>
                </tr>
            
        </form>
    </body>
</html>
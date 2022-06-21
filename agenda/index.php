<?php
include "BD.php";
$sql = "INSERT INTO pessoas (nome, email) VALUES ('Eu', 'email@email.com')";

$resultado = $mysqli->query($sql);
foreach ($resultado as $linha){

}
?>
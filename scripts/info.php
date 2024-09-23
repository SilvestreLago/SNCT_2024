<?php 
include_once "./scripts/conn.php";

//CONSULTA DE DADOS
$query = "SELECT nome FROM usuario WHERE id = 1";
$result = $db->query($query);

//TRANSFORMA EM LISTA E PRINTA
foreach ($result as $row){
    echo "$row[nome]";
}

?>
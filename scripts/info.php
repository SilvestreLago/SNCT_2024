<?php 
include_once "./scripts/conn.php";

//CONSULTA DE DADOS
$query = "SELECT * FROM usuario WHERE id = 1";
$result = $db->query($query);

//TRANSFORMA EM LISTA E DEFINE VARIÁVEIS PARA PRINTAR
foreach ($result as $row){
    $nome = "$row[nome]";
    $cidade = "$row[cidade]";
    $estado = "$row[estado_civil]";
    $interesses = "$row[interesses]";
    $texto = "$row[texto]";
    $foto = "$row[foto]";
}
?>
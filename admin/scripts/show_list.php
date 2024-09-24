<?php
//SELECIONAR TODAS AS POSTAGENS
include_once 'conn.php';
$query = "SELECT * FROM post";
$result = $db->query($query);

//MOSTRAR EM LISTA AS POSTAGENS
foreach($result as $row){
    echo"<p>$row[titulo] <input type='checkbox' name='titulo[]' value='$row[titulo]'></p>";
}


?>
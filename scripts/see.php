<?php 
include_once './scripts/conn.php';

//SELECIONA TODOS OS POST ORDENADO PELO MAIS NOVO
$query = 'SELECT * FROM post ORDER BY data_publicacao DESC';
$result = $db->query($query);

//MOSTRA OS POSTS
foreach($result as $row){ 
//CARD DE PUBLICAÇÃO
    echo"
    <div class='card'>
        <div class='card-header'>
            <h3>$row[titulo]</h3>
        </div>
        <div class='card-body'>
            <blockquote class='blockquote mb-0'>
            <p>$row[conteudo]</p>
            <footer class='blockquote-footer'>$row[data_publicacao]<cite title='Source Title'></cite></footer>
            </blockquote>
        </div>
    </div>
    <br>
    ";
}

?>

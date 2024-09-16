<?php 
include_once './scripts/conn.php';
$query = 'SELECT * FROM post';
$result = $db->query($query);

foreach($result as $row){ //CARD DE PUBLICAÇÃO
    echo"
    <article style='display: flex; justify-content: center; margin-top: 50px;'>
        <div class='card text-center' style='width: fit-content; max-width:500px;'>
            <div class='card-header'>
                <h5 class='card-title'>$row[titulo]</h5>
            </div>
            <div class='card-body'>
                <p class='card-text'>$row[conteudo]</p>
            </div>
            <div class='card-footer text-body-secondary'>
                $row[data_publicacao]
            </div>
        </div>
    </article>
    ";
}
?>

<?php 
//Estabelecer conexão com o banco de dados.
try{
    $caminho_DB = __DIR__ . '/' . '../../bd/data_base.db';

    $db = new PDO('sqlite:' . $caminho_DB);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){ //ERRO
    echo'Erro na conexão com o banco de dados. '  . $e->getMessage();
}

?>
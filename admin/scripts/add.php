<?php 
include_once "conn.php";

//CONTEUDO PARA ADIÇÃO
$titulo = trim(htmlspecialchars(strip_tags( $_POST['titulo']))) ?? '';
$conteudo = trim(htmlspecialchars(strip_tags($_POST['conteudo']))) ?? '';
$dataP = date("Y-m-d H:i:s");

if($titulo != '' && $conteudo != ''){
    try{//TENTATIVA DE ADD
        $query = $db->prepare("INSERT INTO post(titulo, conteudo, data_publicacao) VALUES (:titulo, :conteudo, :data_publicacao)");
    
        $query->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $query->bindParam(':conteudo', $conteudo, PDO::PARAM_STR);
        $query->bindParam(':data_publicacao', $dataP, PDO::PARAM_STR);
    
        $result = $query->execute();
    
        header('Location: ../index.php?add=success');
    }catch (PDOException $e){ //ERRO
        echo "Erro: " . $e->getMessage();
        header('Location: ../index.php?erro=add');
    }
}else{
    header('Location: ../index.php?erro=add');
}

?>
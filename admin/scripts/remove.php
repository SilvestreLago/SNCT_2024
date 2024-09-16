<?php 
include_once "conn.php";

//CONTEUDO PARA ADIÇÃO
$titulo = trim(htmlspecialchars(strip_tags( $_POST['titulo']))) ?? '';

if($titulo != ''){
    try{//TENTATIVA DE REMOVER
        $query = $db->prepare("DELETE FROM post WHERE titulo = :titulo");
    
        $query->bindParam(':titulo', $titulo, PDO::PARAM_STR);
    
        $result = $query->execute();
    
    
        header('Location: ../remove.php?add=success');
    }catch (PDOException $e){ //ERRO
        echo "Erro: " . $e->getMessage();
        header('Location: ../remove.php?erro=add');
    }
}else{
   header('Location: ../remove.php?erro=add');
}

?>
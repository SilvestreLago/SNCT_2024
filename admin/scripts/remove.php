<?php 
include_once "conn.php";

//TÍTULO PARA REMOÇÃO
$titulo =  trim(htmlspecialchars(strip_tags( $_POST['titulo']))) ?? '';

if($titulo != ''){
    try{//TENTATIVA DE REMOVER
        $query = $db->prepare("DELETE FROM post WHERE titulo = :titulo");
    
        $query->bindParam(':titulo', $titulo, PDO::PARAM_STR);
    
        $result = $query->execute();
    
        header('Location: ../remove_T.php?add=success');
    }catch (PDOException $e){ //ERRO
        echo "Erro: " . $e->getMessage();
        header('Location: ../remove_T.php?erro=add');
    }
}else{ //ERRO
    header('Location: ../remove.php?erro=add');
}

?>
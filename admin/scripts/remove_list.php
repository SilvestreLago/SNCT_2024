<?php 
include_once "conn.php";

//TODOS OS TÍTULOS SELECIONADOS
$num = count($_POST['titulo']) -1;

//CONTEUDO PARA REMOÇÃO
for($i=0 ; $i<=$num; $i++){
    $titulo = $_POST['titulo'][$i];
    try{//TENTATIVA DE REMOVER
        $query = $db->prepare("DELETE FROM post WHERE titulo = :titulo");
    
        $query->bindParam(':titulo', $titulo, PDO::PARAM_STR);
    
        $result = $query->execute();    
    }catch (PDOException $e){ //ERRO
        echo "Erro: " . $e->getMessage();
        header('Location: ../remove_L.php?erro=add');
    }
}

//REDIRECIONAMENTO FINAL
header('Location: ../remove_L.php?add=success');


?>
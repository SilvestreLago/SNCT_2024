<?php 
include_once "conn.php";

$num = count($_POST['titulo']) -1;
//CONTEUDO PARA ADIÇÃO
for($i=0 ; $i<=$num; $i++){
    $titulo = $_POST['titulo'][$i];
    try{//TENTATIVA DE REMOVER
        $query = $db->prepare("DELETE FROM post WHERE titulo = :titulo");
    
        $query->bindParam(':titulo', $titulo, PDO::PARAM_STR);
    
        $result = $query->execute();    
    }catch (PDOException $e){ //ERRO
        echo "Erro: " . $e->getMessage();
        header('Location: ../remove.php?erro=add');
    }
}
header('Location: ../remove.php?add=success');


?>
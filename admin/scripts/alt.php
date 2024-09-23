<?php
include_once "./conn.php";

//CONTEÚDO PARA ALTERAÇÃO
$email = trim(htmlspecialchars(strip_tags( $_POST['email']))) ?? '';
$senha = trim(htmlspecialchars(strip_tags( $_POST['passwd']))) ?? '';
$name = trim(htmlspecialchars(strip_tags( $_POST['name']))) ?? '';

if($email != '' and $senha != ''){
    try{//TENTATIVA DE ADD
        
        $query = $db->prepare("UPDATE usuario SET nome = :nome, email = :email, senha = :senha WHERE id = 1;");
        
        $query->bindParam(':nome', $name, PDO::PARAM_STR);
        
        $query->bindParam(':email', $email, PDO::PARAM_STR);

        $senha = password_hash($senha, PASSWORD_DEFAULT);
        $query->bindParam(':senha', $senha, PDO::PARAM_STR);
    
        $result = $query->execute();
    
        header('Location: ../alt.php?alt=success');
    }catch (PDOException $e){ //ERRO
        echo "Erro: " . $e->getMessage();
        header('Location: ../alt.php?erro=alt');
    }
}
else{
    header('Location: ../alt.php?erro=alt');
}
?>
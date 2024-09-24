<?php
include_once "./conn.php";

//CONTEÚDO PARA ALTERAÇÃO
$email = trim(htmlspecialchars(strip_tags( $_POST['email']))) ?? '';
$senha = trim(htmlspecialchars(strip_tags( $_POST['passwd']))) ?? '';
$name = trim(htmlspecialchars(strip_tags( $_POST['name']))) ?? '';
$city = trim(htmlspecialchars(strip_tags( $_POST['cidade']))) ?? '';
$estado = trim(htmlspecialchars(strip_tags( $_POST['estado']))) ?? '';
$interesses = trim(htmlspecialchars(strip_tags( $_POST['interesses']))) ?? '';
$texto = trim(htmlspecialchars(strip_tags( $_POST['texto']))) ?? '';


//ALTERAÇÕES
if($email != ''){
    try{ //EMAIL
        $query1 = $db->prepare("UPDATE usuario SET email = :email WHERE id = 1;");
        $query1->bindParam(':email', $email, PDO::PARAM_STR);
        $result = $query1->execute(); 
    }catch (PDOException $e){ //ERRO
        echo "Erro: " . $e->getMessage();
        header('Location: ../alt.php?erro=alt');
    }
}
if($senha != ''){ 
    try{ //SENHA
        $senha = password_hash($senha, PASSWORD_DEFAULT);
        $query2 = $db->prepare("UPDATE usuario SET senha = :senha WHERE id = 1;");
        $query2->bindParam(':senha', $senha, PDO::PARAM_STR);
        $result = $query2->execute(); 
    }catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
        header('Location: ../alt.php?erro=alt');
    }
}
if($name != ''){
    try{ //NOME
        $query3 = $db->prepare("UPDATE usuario SET nome = :nome WHERE id = 1;");
        $query3->bindParam(':nome', $name, PDO::PARAM_STR);
        $result = $query3->execute(); 
    }catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
        header('Location: ../alt.php?erro=alt');
    }
}
if($city != ''){
    try{ //CIDADE
        $query4 = $db->prepare("UPDATE usuario SET cidade = :cidade WHERE id = 1;");
        $asd = $query4->bindParam(':cidade', $city, PDO::PARAM_STR);
        $result = $query4->execute(); 
    }catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
        header('Location: ../alt.php?erro=alt');
    }
}
if($estado != ''){
    try{ //ESTADO CIVIL
        $query5 = $db->prepare("UPDATE usuario SET estado_civil = :estado WHERE id = 1;");
        $query5->bindParam(':estado', $estado, PDO::PARAM_STR);
        $result = $query5->execute(); 
    }catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
        header('Location: ../alt.php?erro=alt');
    }
}
if($interesses != ''){
    try{ //INTERESSES
        $query6 = $db->prepare("UPDATE usuario SET interesses = :interesses WHERE id = 1;");
        $query6->bindParam(':interesses', $interesses, PDO::PARAM_STR);
        $result = $query6->execute();   
    }catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
        header('Location: ../alt.php?erro=alt');
    }
}
if($texto != ''){
    try{ //TEXTO
        $query7 = $db->prepare("UPDATE usuario SET texto = :texto WHERE id = 1;");
        $query7->bindParam(':texto', $texto, PDO::PARAM_STR);
        $result = $query7->execute(); 
    }catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
        header('Location: ../alt.php?erro=alt');
    }
}
else{ //ERRO
    header('Location: ../alt.php?erro=alt');
}

//REDIRECIONAMENTO FINAL
header("Location: ../alt.php?alt=add");
?>
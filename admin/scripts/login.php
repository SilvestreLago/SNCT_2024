<?php 
include_once "./conn.php";

//CONSULTA DE DADOS
$query = "SELECT id, nome, email, senha FROM usuario WHERE id = 1";
$result = $db->query($query);

//REQUISIÇÕES
$email = htmlspecialchars(strip_tags($_POST['email'])) ?? '';
$senha = htmlspecialchars(strip_tags($_POST['passwd'])) ?? '';

//TRANSFORMA EM LISTA E VERIFICA
foreach ($result as $row){
    if(password_verify($senha, $row['senha']) && $email == $row['email']){
        //echo password_hash($row['senha'], PASSWORD_DEFAULT);
        session_start();
        $_SESSION['LOGADO'] = TRUE;
        header('Location: ../index.php'); //INDEX
    }else{
        header('Location: ../login.php?erro=incorrect'); //LOGIN COM ERRO
    }
}

?>
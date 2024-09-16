<?php 
//VERIFICA SE JÁ ESTÁ LOGADO
session_start();
if(!isset($_SESSION['LOGADO']) == TRUE){
    unset($_SESSION['LOGADO']);
    session_destroy();
    header('Location: ./login.php?erro=incorrect');
}
?>
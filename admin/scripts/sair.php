<?php 
//SAIR DE ADMIN
session_start();
unset($_SESSION['LOGADO']);
session_destroy();
header('Location: ../login.php');
?>
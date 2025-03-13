<?php
if(!isset($_POST['usuario'])||$_POST['usuario']==''){
    die("favor informar um usuario");
} 
if(!isset($_POST['senha'])||$_POST['senha']==''){
    die("favor informar um usuario");
}
if($_POST['usuario']=='123'&& $_POST['senha']=='123'){
    session_start();
    $_SESSION['usuario']= $_POST['usuario'];
    $_SESSION['senha']= $_POST['senha'];

    header("Location:principal.php");
    die;
}else{
    die("usuário e senha invalidos");
}
?>
    
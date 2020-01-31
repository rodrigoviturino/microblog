<?php 

require_once "./config/Database.php";

$teste = new Database();

if( isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']) ) {

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $teste->adicionar($nome, $email, $senha);

    header("Location: login.php");
}
?>
<?php 

require_once "./config/Database.php";

$teste = new Database();

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $teste->adicionar($email, $nome, $senha);

        header("Location: admin-user.php");

?>
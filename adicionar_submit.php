<?php 

require_once "./config/Database.php";

$usuario = new Database();

if( !empty($_POST['email']) ) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuario->adicionar($nome, $email, $senha);

        header("Location: admin-user.php");
    }

?>
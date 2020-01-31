<?php
session_start();

if( isset($_POST['email']) && !empty($_POST['email']) ) {
    
    $pdo = new PDO("mysql:dbname=microblog_php;host=localhost",'root','');

    try {

        $email = $_POST['email'];
        $senha = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha ";
        $sql = $pdo->prepare($sql);

        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $dado = $sql->fetch();

            $_SESSION['id'] = $dado['id'];
            header("Location: admin.php");
        }

    } catch (PDOException $e) {
        echo "Falha: ".$e->getMessage();
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/db192ad007.js" crossorigin="anonymous"></script>
    <title>Login - Microblog</title>
</head>
<body>

<!-- Content -->
<main class="login">
    
    <div class="login__column-left">
        <a href="#" class="logo">Microblog</a>
        <a href="index.php" class="page-initial">Acessar Página inicial <i class="fas fa-angle-double-right"></i></a>
    </div>

    <div class="login__column-right">


    <!-- Modal -->
    <?php
    include_once "./config/Database.php";

    $usuario = new Database();
    
    ?>
        <section class="form-add-user login-addUser-js">
            <div class="form-add-user__header btn-close-js">
                <i class="btn-close  fas fa-times-circle fa-2x"></i>
            </div>

            <h2 class="title">São só esses dados mesmo!</h2>

            <h3><?=  $feedback; ?></h3>

            <form method="POST" action="login_add_user.php" class="form-add-user__form">
                <div class="mb-1">
                    <input type="text" name="nome" placeholder="Digite seu nome">
                </div>
                <div class="mb-1">
                    <input type="text" name="email" placeholder="Digite seu e-mail">
                </div>
                <div class="mb-1">
                    <input type="text" name="senha" placeholder="Qual será sua senha?">
                </div>
                <!-- <button name="inserir" class="btn-insert">Inserir Usuário</button> -->
                <input type="submit" name="inserir" class="btn-insert" value="Confirmar">
            </form>

        </section>
    <!-- end Modal -->
        
        <h2 class="title">Login Here</h2>

        <form method="POST" class="form">
            <input type="email" placeholder="E-mail Address" name="email">
            <input type="text" placeholder="Password" name="password">
            <!-- <a href="#" class="password">Recuperar senha</a> -->
            <span>✈</span>
            <a href="#" class="btn-register-user">Fazer Cadastro</a>
            <button type="submit">Login</button>
        </form>

    </div>

</main>
<!-- end Content -->

<script>
let btn_add_user = document.querySelector('.btn-register-user');
let btn_close_user = document.querySelector('.login-addUser-js .btn-close');

console.log(btn_add_user);


btn_add_user.addEventListener('click', function(e){
    e.preventDefault();
    console.log(document.querySelector('.login-addUser-js').classList.add('active-modal-form-add-user'));
});


btn_close_user.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector('.login-addUser-js').classList.toggle('active-modal-form-add-user');
});

</script>

</body>
</html>
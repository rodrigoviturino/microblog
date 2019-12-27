<?php
    include_once "./include/header_admin.php"; 
    include_once "./config/Database.php";

    $usuario = new Database();

?>

<!-- Side Panel -->
<main class="main-admin">

    <div class="main-admin__wrapper">

        <aside class="main-admin__wrapper__panel">
            <ul>
                <li>
                    <i class="far fa-copy fa-2x">
                    </i>
                    <a href="admin-posts.php">Posts</a>
                </li>
                <li>
                    <i class="far fa-user fa-2x">
                    </i>
                    <a href="admin-user.php" class="activeMenuPanel">Usuario</a>
                </li>
            </ul>
        </aside>

        <section class="main-admin__wrapper__content-posts">
            
            <!-- <div class="breadcrumb">
                <p>Home / Posts</p>
                <hr>
            </div> -->

            <!-- Title Main -->
            <div class="block-title">
                <h2>Gerenciamento de Usuários</h2>
            </div>
            <!-- end Title Main -->

            <!-- Button Insert Posts -->
            <div class="insert-posts">
                <a href="#" class="btn-insert-posts">Inserir Novo Usuários</a>
            </div>

            <!-- Insert New User -->
            <section class="form-add-post form-add-js">
                <div class="form-add-post__header btn-close-js">
                    <i class="btn-close  fas fa-times-circle fa-2x"></i>
                </div>

                <h2 class="title">Inserir Usuário</h2>

                <form method="POST" action="adicionar_submit.php" class="form-add-post__form">
                    <div class="mb-1">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome">
                    </div>
                    <div class="mb-1">
                        <label for="email">E-mail:</label>
                        <input type="text" name="email">
                    </div>
                    <div class="mb-1">
                        <label for="senha">Senha:</label>
                        <input type="text" name="senha">
                    </div>
                    <!-- <button name="inserir" class="btn-insert">Inserir Usuário</button> -->
                    <input type="submit" name="inserir" class="btn-insert" value="Inserir Usuário">
                </form>

            </section>
            <!-- end Insert New User -->

            <!-- end Button Insert Posts -->
            
            <!-- Table Posts -->
            <table class="table-posts">

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Senha</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Row Info Table -->
                    <?php 
                        $resultado = $usuario->getAll();

                        foreach ($resultado as $item) {
                    ?>                
                        <tr>
                            <td><?= $item['id'];  ?></td>
                            <td><?= $item['nome'];  ?></td>
                            <td><?= $item['email']; ?></td>
                            <td><?= $item['senha']; ?></td>
                            <td>
                                <a href="#" class="btn-update">Editar</a>
                            </td>
                            <td>
                                <a href="#" class="btn-delete">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>
                    <!-- <tr>
                        <td>Rodrigo Viturino</td>
                        <td>viturino_souza@outlook.com</td>
                        <td>
                            <a href="#" class="btn-update">Atualizar</a>
                        </td>
                        <td>
                            <a href="#" class="btn-delete">Excluir</a>
                        </td>
                    </tr> -->
                    <!-- end Row Info Table -->

                    <!-- Row Info Table -->
                    <!-- <tr>
                        <td>joao Vitor</td>
                        <td>joao@outlook.com</td>
                        <td>
                            <a href="#" class="btn-update">Atualizar</a>
                        </td>
                        <td>
                            <a href="#" class="btn-delete">Excluir</a>
                        </td>
                    </tr> -->
                    <!-- end Row Info Table -->

                    <!-- Row Info Table -->
                    <!-- <tr>
                        <td>Lorem Ipsum</td>
                        <td>teste@teste.com</td>
                        <td>
                            <a href="#" class="btn-update">Atualizar</a>
                        </td>
                        <td>
                            <a href="#" class="btn-delete">Excluir</a>
                        </td>
                    </tr> -->
                    <!-- end Row Info Table -->
                </tbody>

            </table>
            <!-- end Table Posts -->

        </section>

    </div>

</main>
<!-- end Side Panel -->


<!-- Scripts -->
<script src="assets/js/main.js"></script>
<!-- end Scripts -->
    
</body>
</html>
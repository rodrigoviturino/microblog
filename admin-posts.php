<?php include_once "./include/header_admin.php"; ?>

<!-- Side Panel -->
<main class="main-admin">

    <div class="main-admin__wrapper">

        <aside class="main-admin__wrapper__panel">
            <ul>
                <li>
                    <i class="far fa-copy fa-2x">
                    </i>
                    <a href="admin-posts.php" class="activeMenuPanel">Posts</a>
                </li>
                <li>
                    <i class="far fa-user fa-2x">
                    </i>
                    <a href="admin-user.php">Usuario</a>
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
                <h2>Gerenciamento de Posts</h2>
            </div>
            <!-- end Title Main -->
            

            <!-- Button Insert Posts -->
            <div class="insert-posts my-1">
                <a href="#" class="btn-insert-posts">Inserir Novo Posts</a>
            </div>

            <section class="form-add-post form-add-js">
                <div class="form-add-post__header btn-close-js">
                    <i class="btn-close  fas fa-times-circle fa-2x"></i>
                </div>
                <h2 class="title">Inserir Post</h2>

                <form action="#" class="form-add-post__form">
                    <div class="mb-1">
                        <label for="titulo">Titulo:</label>
                        <input type="text" name="titulo">
                    </div>
                    <div class="mb-1">
                        <label for="titulo">Texto:</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-1">
                        <label for="titulo">Resumo:</label>
                        <textarea name="" id="" cols="10" rows="5"></textarea>
                    </div>
                    <div class="mb-1">
                        <label for="imagem">Selecionar uma imagem para este post:</label>
                        <input type="file" name="imagem" id="imagem">
                    </div>
                    <button name="inserir" class="btn-insert">Inserir Post</button>
                </form>

            </section>
            <!-- end Button Insert Posts -->

            <!-- Table Posts -->
            <table class="table-posts">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Data</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    
                    <!-- Row Info Table -->
                    <tr>
                        <td>1</td>
                        <td>React</td>
                        <td>09/12/2019</td>
                        <td>
                            <a href="#" class="btn-update">Editar</a>
                        </td>
                        <td>
                            <a href="#" class="btn-delete">Excluir</a>
                        </td>
                    </tr>
                    <!-- end Row Info Table -->

                    <!-- Row Info Table -->
                    <tr>
                        <td>2</td>
                        <td>Angular</td>
                        <td>10/12/2019</td>
                        <td>
                            <a href="#" class="btn-update">Editar</a>
                        </td>
                        <td>
                            <a href="#" class="btn-delete">Excluir</a>
                        </td>
                    </tr>
                    <!-- end Row Info Table -->

                    <!-- Row Info Table -->
                    <tr>
                        <td>3</td>
                        <td>Vue.js</td>
                        <td>11/12/2019</td>
                        <td>
                            <a href="#" class="btn-update">Editar</a>
                        </td>
                        <td>
                            <a href="#" class="btn-delete">Excluir</a>
                        </td>
                    </tr>
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
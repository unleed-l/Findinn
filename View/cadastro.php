<?php
$style = "cadastrar.css";
$title = "Cadastro";
require "page.php";
?>

<body class="bg-dark">
    <div class="bg-dark">
        <nav>
            <div class="container justify-content-center">
                <!-- Brand -->
                <a class="navbar-brand" href="index.html"><img src="logo.png" alt="logo" />
                </a>
            </div>
        </nav>

        <div class="d-flex bg-dark mt-5">
            <div class="container-fluid d-flex justify-content-center mt-5">
                <div class="text-white mt-5 w-25">
                    <h1 class="pb-3 flex">Cadastro de Usuário</h1>
                    <form name="cadLivro" method="post" action="incluirLivro" enctype="multipart/form-data">
                        <div class="form-group pt-2">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Informe o seu Nome" name="nome" required />
                        </div>
                        <div class="form-group pt-2">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" placeholder="Informe o seu Telefone" name="telefone" required />
                        </div>
                        <div class="form-group pt-2">
                            <label for="pais">País</label>
                            <input type="pais" class="form-control" id="pais" placeholder="Informe o seu País" name="pais" required />
                        </div>
                        <div class="form-group pt-2">
                            <label for="Nome">Email</label>
                            <input type="Nome" class="form-control" id="Nome" placeholder="Informe o seu Email" name="Nome" required />
                        </div>
                        <div class="form-group pt-2">
                            <label for="Nome">Senha</label>
                            <input type="Senha" class="form-control" id="Senha" placeholder="Informe a sua Senha" name="Senha" required />
                        </div>
                        <div class="flex">
                            <button type="submit" class="btn btn-primary">
                                Cadastrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
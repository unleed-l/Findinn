<?php
$style = "cadastrar.php";
$title = "Cadastro";
require "page.php";
?>

<body class="bg-dark">
    <div class="bg-dark">
        <nav>
            <div class="container justify-content-center">
                <!-- Brand -->
                <a class="navbar-brand" href="Home"><img src='<?php echo 'App/View/assets/logo.png';?>' alt="logo" />
                </a>
            </div>
        </nav>
        <div class="d-flex bg-dark mt-5">
            <div class="container-fluid d-flex justify-content-center mt-5">
                <div class="text-white mt-5 w-25">
                    <h1 class="pb-3 flex">Cadastro de Usuário</h1>
                    <form name="cadastrarUser" method="POST" action="AUTHUSER" enctype="multipart/form-data">
                        <div class="form-group pt-2">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Informe o seu Nome"
                                name="nome" required />
                        </div>
                        <div class="form-group pt-2">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" placeholder="Informe o seu CPF" name="cpf"
                                required />
                        </div>
                        <div class="form-group pt-2">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" placeholder="Informe o seu Telefone"
                                name="telefone" required />
                        </div>
                        <div class="form-group pt-2">
                            <label for="pais">País</label>

                            <select class="form-select" name="pais">
                                <option selected>Selecione o País</option>
                                <option value="1" name="pais">Brasil</option>
                            </select>
                        </div>
                        <div class="form-group pt-2">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Informe o seu Email"
                                name="email" required />
                        </div>
                        <div class="form-group pt-2">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" placeholder="Informe a sua Senha"
                                name="senha" required />
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
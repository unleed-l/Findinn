<?php
$style = "cadastrar.php";
$title = "Login";
require "page.php";
?>

<body class="d-flex bg-dark mt-5">
    <nav class="ms-3">
        <div class="container justify-content-center">
            <!-- Brand -->
            <a class="navbar-brand" href="Home"><img src='<?php echo 'App/View/assets/logo.png';?>' alt="logo" />
            </a>
        </div>
    </nav>
    <div class="container d-flex justify-content-center centralize">
        <div class="text-white mt-5 w-25">
            <h1 class="pb-3 flex">Login</h1>
            <form name="login" method="post" action="authLogin" enctype="multipart/form-data">
                <div class="form-group pt-2">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Informe o seu Email" name="email"
                        required />
                </div>
                <div class="form-group pt-2">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="Informe a sua Senha"
                        name="senha" required />
                </div>
                <div class="flex">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
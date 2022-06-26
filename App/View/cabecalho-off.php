<?php
$logo = require_once "App/View/assets/logo.png";
?>

<nav class="bg-primaryX text-lightX navbar navbar-expand-xl navbar-dark navbar-togglable fixed-top">
    <div class="container justify-content-center">
        <a class="navbar-brand" href="Home"><img src='<?php echo 'App/View/assets/logo.png';?>' alt="logo" />
        </a>

        <ul class="nav justify-content-center">
            <li class="nav-item mx-2">
                <a class="nav-link linksNav" href="Acomodacoes">Acomodações</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link linksNav" href="Cadastro">Cadastre-se</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link linksNav" href="Login">Login</a>
            </li>
        </ul>
    </div>
</nav>
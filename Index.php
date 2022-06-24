<?php

//testa a variável url que veio lá do htaccess
if (isset($_GET['url'])) //se estiver preenchida, pega o valor
{
    $url =  strtoupper($_GET['url']);
    // echo $url;
    switch ($url) {
        case "HOME":
            require "App/Controller/HomeController.php";
            $HomeController = new HomeController();
            $HomeController->Controller();
            break;
        case "USERPAGE":
            require "App/Controller/UserPageController.php";
            $UserPageController = new UserPageController();
            $UserPageController->Controller();
            break;
        case "CADASTRO":
            require "App/Controller/CadastroController.php";
            $CadastroController = new CadastroController();
            $CadastroController->Controller();
            break;
        case "AUTHUSER":
            require "App/Controller/UserController.php";
            $UserController = new UserController();
            $UserController->Controller();
            break;
        // case "CADASTRARACOMODACAO":
        //     require "App/Controller/ImovelPageController.php";
        //     $ImovelPage = new ImovelPageController();
        //     $ImovelPage->Controller();
        //     break;
        // case "IMOVELPAGE":
        //     require "App/Controller/ImovelController.php";
        //     $ImovelController = new ImovelController();
        //     $ImovelController->Controller();
        //     break;
        // case "TESTE":
        //     require "App/View/teste.php";
        //     break;
        default:
            break;
    }
} else {
    $url = 'App/View/404.php';
}

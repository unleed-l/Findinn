<?php

if (isset($_GET['url'])) {
    $url = strtoupper($_GET['url']);
    // echo $url;
    switch ($url) {
        case "HOME":
            require "App/Controller/HomeController.php";
            $HomeController = new HomeController();
            $HomeController->Controller();
            break;
        case "LOGAR":
            require "App/Controller/LoginPageController.php";
            $LoginPageController = new LoginPageController();
            $LoginPageController->Controller();
            break;
        case "AUTHLOGIN":
            require "App/Controller/LoginController.php";
            $LoginController = new LoginController();
            $LoginController->Controller();
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
        case "CADASTRARACOMODACAO":
            require "App/Controller/ImovelPageController.php";
            $ImovelPage = new ImovelPageController();
            $ImovelPage->Controller();
            break;
        case "IMOVELPAGE":
            require "App/Controller/ImovelController.php";
            $ImovelController = new ImovelController();
            $ImovelController->Controller();
            break;
        case "MINHASACOMODACOES":
            require "App/Controller/MinhasAcomomodacoesController.php";
            $AcomodaçãoController = new MinhasAcomomodacoesController();
            $AcomodaçãoController->Controller();
            break;
        case "ACOMODACOES":
            require "App/Controller/AcomodacoesController.php";
            $AcomodacoesController = new AcomodacoesController();
            $AcomodacoesController->Controller();
            break;
        case "RESERVAR":
            require "App/Controller/ReservaController.php";
            $ReservaController = new ReservaController();
            $ReservaController->Controller();
            break;
        case "IMOVELRESERVADO":
            require "App/Controller/ImovelReservadoController.php";
            $ImovelReservadoController = new ImovelReservadoController();
            $ImovelReservadoController->Controller();
            break;
        // case "TESTE":
        //     require "App/View/teste.php";
        //     break;
        default:
            break;
    }
} else {
    $url = 'App/View/404.php';
}

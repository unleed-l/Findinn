<?php

require_once "App/Model/Usuario.php";
require_once "IController.php";
class LoginController implements IController
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function Controller()
    {
        $this->usuario->setEmail($_POST['email']);
        $this->usuario->setSenha($_POST['senha']);

        $this->usuario->logar();
        require "App/View/UserPage.php";
    }
}

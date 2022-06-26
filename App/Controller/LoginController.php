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
        $this->usuario->setEmail(addslashes($_POST['email']));
        $this->usuario->setSenha(addslashes($_POST['senha']));
        
        if ($this->usuario->logar()){
            require "App/View/UserPage.php";
        }else{
            echo "Login ou senha inválidos";
        }
    }
}

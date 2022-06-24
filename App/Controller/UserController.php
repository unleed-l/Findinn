<?php

require "App/Model/Usuario.php";
require "IController.php";

class UserController implements IController
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function Controller()
    {
        $pais = addslashes($_POST['pais']);
        
        $this->usuario->setnome($_POST['nome']);
        $this->usuario->setCpf($_POST['cpf']);
        $this->usuario->setTel($_POST['telefone']);
        $this->usuario->setsenha($_POST['senha']);
        $this->usuario->setEmail($_POST['email']);
        $this->usuario->setpais($pais);

        $this->usuario->cadastrarUsuario();
        
        require "App/View/UserPage.php";
    }
}

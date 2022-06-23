<?php

require_once "IController.php";
require_once 'App/Model/Usuario.php';
require_once 'App/Model/Imovel.php';

class CadastroImovelController implements IController
{
    private $imovel;

    public function __construct()
    {
        $this->imovel = new Imovel();
    }

    public function Controller()
    {
        require "View/CadastroAcomodacao.php";
    }

    public function CadastrarImovel()
    {
        $this->imovel->setnome($_POST['nomeCartao']);
        $this->imovel->setCpf($_POST['cpf']);
        $this->imovel->setTel($_POST['tel']);
        $this->imovel->setsenha($_POST['senha']);
        $this->imovel->setEmail($_POST['email']);
        $this->imovel->setpais($_POST['pais']);


        $this->imovel->CadastrarAcomodacao();
        require "View/MinhasAcomodacoes.php";
    }
}

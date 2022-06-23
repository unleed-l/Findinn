<?php

require_once "IController.php";
require_once 'App/Model/Usuario.php';
require_once 'App/Model/Imovel.php';

class ImovelController implements IController
{
    private $imovel;
    private $cartao;
    private $tipoImovel;
    private $adicionaisImovel;

    public function __construct()
    {
        $this->imovel = new Imovel();
        $this->cartao = new Cartao();
        $this->tipoImovel = new TipoImovel();
        $this->adicionaisImovel = new AdicionaisImovel();
    }

    public function CadastrarImovel()
    {
        $this->cartao->setTitularCartao($_POST['nomeCartao']);
        $this->cartao->setNumCartao($_POST['numeroCartao']);
        $this->cartao->setDataValidade($_POST['validadeCartao']);
        $this->cartao->setCvv($_POST['cvvCartao']);
        
        $this->imovel->setCep($_POST['cepImovel']);
        $this->imovel->setRua($_POST['ruaImovel']);
        $this->imovel->setNumero($_POST['numeroImovel']);
        $this->imovel->setComplemento($_POST['compImovel']);
        
        $this->imovel->setPais($_POST['paisImovel']);
        $this->imovel->setEstado($_POST['estadoImovel']);
        $this->imovel->setCidade($_POST['cidadeImovel']);

        $this->imovel->setCapacidadeMaxima($_POST['capacidadeImovel']);
        $this->imovel->setDiaria($_POST['diariaImovel']);
        
        $this->adicionaisImovel->set;

        $this->tipoImovel->setTipo($_POST['tipoResidencia']);

        $this->imovel->CadastrarAcomodacao();
        require "View/MinhasAcomodacoes.php";
    }

    public function Controller()
    {
        require "View/CadastroAcomodacao.php";
    }
}

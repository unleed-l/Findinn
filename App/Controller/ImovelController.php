<?php
require "IController.php";
require_once "App/Model/Cartao.php";
require_once "App/Model/Usuario.php";
// require_once 'App/Model/Imovel.php';
// require_once 'App/Model/AdicionaisImovel.php';
// require_once 'App/Model/TipoImovel.php';

class ImovelController implements IController
{
    private $imovel;
    private $cartao;
    private $tipoImovel;
    private $adicionaisImovel;
    private $usuario;

    public function __construct()
    {
        $this->cartao = new Cartao();
        $this->imovel = new Imovel();
        $this->tipoImovel = new TipoImovel();
    }

    public function Controller()
    {
        $this->cartao->setTitularCartao($_POST['nomeCartao']);
        $this->cartao->setNumCartao($_POST['numeroCartao']);
        $this->cartao->setDataValidade($_POST['validadeCartao']);
        $this->cartao->setCvv($_POST['cvvCartao']);
        $this->cartao->setIdUsuario($_SESSION['id']);

        $this->imovel->setCep($_POST['cepImovel']);
        $this->imovel->setRua($_POST['ruaImovel']);
        $this->imovel->setNumero($_POST['numeroImovel']);
        $this->imovel->setComplemento($_POST['compImovel']);

        // $this->imovel->setPais($_POST['paisImovel']);
        // $this->imovel->setEstado($_POST['estadoImovel']);
        // $this->imovel->setCidade($_POST['cidadeImovel']);

        // $this->imovel->setCapacidadeMaxima($_POST['capacidadeImovel']);
        // $this->imovel->setDiaria($_POST['diariaImovel']);

        // $this->adicionaisImovel->set;

        // $this->tipoImovel->setTipo($_POST['tipoResidencia']);

        /*
        Seguir ordem de cadastro no banco
         */
        //$this->cartao->cadastrarCartao();

        // $this->imovel->CadastrarAcomodacao();
        //require "View/MinhasAcomodacoes.php";
    }
}

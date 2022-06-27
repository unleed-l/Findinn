<?php
require "IController.php";
require_once "App/Model/Cartao.php";
require_once "App/Model/Usuario.php";
require_once "App/Model/Imovel.php";
require_once "App/Model/AdicionaisImovel.php";
require_once "App/Model/TipoImovel.php";

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
        $this->adicionaisImovel = new AdicionaisImovel();
        $this->tipoImovel = new TipoImovel();
    }

    public function Controller()
    {
        $this->cartao->setTitularCartao($_POST['nomeCartao']);
        $this->cartao->setNumCartao($_POST['numeroCartao']);
        $this->cartao->setDataValidade($_POST['validadeCartao']);
        $this->cartao->setCvv($_POST['cvvCartao']);
        $this->cartao->setIdUsuario($_SESSION['id']);

        $this->cartao->cadastrarCartao();

        $this->imovel->setCep($_POST['cepImovel']);
        $this->imovel->setRua($_POST['ruaImovel']);
        $this->imovel->setNumero($_POST['numeroImovel']);
        $this->imovel->setComplemento($_POST['compImovel']);
        $this->imovel->setAnfitriao($_SESSION['id']);

        $this->imovel->setIdPais(1);

        $this->imovel->setEstado($_POST['estadoImovel']);

        $this->imovel->inserirEstado();

        $this->imovel->setCidade($_POST['cidadeImovel']);

        $this->imovel->inserirCidade();

        $this->imovel->setCapacidadeMaxima($_POST['capacidadeImovel']);
        $this->imovel->setDiaria($_POST['diariaImovel']);

        if (!isset($_POST['cozinha'])) {
            $_POST['cozinha'] = 0;
        }
        if (!isset($_POST['jacuzzi'])) {
            $_POST['jacuzzi'] = 0;
        }
        if (!isset($_POST['refrigerador'])) {
            $_POST['refrigerador'] = 0;
        }
        if (!isset($_POST['detector'])) {
            $_POST['detector'] = 0;
        }
        if (!isset($_POST['wifi'])) {
            $_POST['wifi'] = 0;
        }
        if (!isset($_POST['ar'])) {
            $_POST['ar'] = 0;
        }
        if (!isset($_POST['alarme'])) {
            $_POST['alarme'] = 0;
        }

        $this->adicionaisImovel->setCozinha($_POST['cozinha']);
        $this->adicionaisImovel->setJacuzzi($_POST['jacuzzi']);
        $this->adicionaisImovel->setRefrigerador($_POST['refrigerador']);
        $this->adicionaisImovel->setDetectorFumaca($_POST['detector']);
        $this->adicionaisImovel->setWifi($_POST['wifi']);
        $this->adicionaisImovel->setArCondicionado($_POST['ar']);
        $this->adicionaisImovel->setAlarmeIncendio($_POST['alarme']);

        $this->adicionaisImovel->inserirAdicionais();

        $this->imovel->setAdicionaisImovel($_SESSION['idAdicionais']);

        $ImovelTipo = addslashes($_POST['tipoResidencia']);
        $this->tipoImovel->setTipo($ImovelTipo);

        $this->tipoImovel->inserirTipoImovel();

        $this->imovel->setTipoImovel($_SESSION['idTipoImovel']);
        $this->imovel->setDiaria($_POST['diariaImovel']);

        $this->imovel->setImagens($_POST['imagemImovel']);
        $this->imovel->setDescricao($_POST['descricaoImovel']);

        $result = $this->imovel->cadastrarImovel();

        var_dump($result);
        // require_once "App/View/UserPage.php";
    }

}

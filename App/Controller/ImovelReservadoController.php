<?php


require "IController.php";
require_once 'App/Model/ConexaoBD.php';
require_once 'App/Model/Cartao.php';
class ImovelReservadoController implements IController
{

    public function __construct(){

        $this->cartao = new Cartao();
    }

    public function Controller()
    {
        try{

            
            $this->cartao->setTitularCartao($_POST['nomeCartao']);
            $this->cartao->setNumCartao($_POST['numeroCartao']);
            $this->cartao->setDataValidade($_POST['validadeCartao']);
            $this->cartao->setCvv($_POST['cvvCartao']);
            $this->cartao->setIdUsuario($_SESSION['id']);

            $this->cartao->cadastrarCartao();

            $conn = ConexaoBD::Conexao();

            $dataini = $_POST['PeriodoInicial'];
            $datafim = $_POST['PeriodoFinal'];
            $idUser = $_SESSION['id'];
            $idAco = $_SESSION['idReserva'];
            $idCartao = $_SESSION['idCartao'];
            
            $sql = $conn->prepare("INSERT INTO findinn.locacao (data_inicio, data_fim,id_acomodacao,id_usuario,cartao_id_cartao) VALUES (:dataini,:datafim,:idAco,:idUser,:idCartao)");
            $sql->bindParam('dataini',$dataini);
            $sql->bindParam('datafim',$datafim);
            $sql->bindParam('idAco',$idAco);
            $sql->bindParam('idUser',$idUser);
            $sql->bindParam('idCartao',$idCartao);
    
            $sql->execute();
            
        }catch (PDOException $e){
            return $e->getMessage();
        }
        

        //require "App/View/UserPage.php";
    }

    
}

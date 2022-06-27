<?php

require_once "App/Model/Usuario.php";
require_once "ConexaoBD.php";

class Imovel
{
    private $anfitriao;
    private $cep;
    private $rua;
    private $numero;
    private $pais;
    private $cidade;
    private $estado;
    private $complemento;
    private $diaria;
    private $tipoImovel;
    private $adicionaisImovel;
    private $capacidadeMaxima;
    private $descricao;
    private $imagens;
    private $idImovel;
    private $idCidade;
    private $idEstado;
    private $idPais;

    /**
     * Get the value of anfitriao
     */
    public function getAnfitriao()
    {
        return $this->anfitriao;
    }

    /**
     * Set the value of anfitriao
     *
     * @return  self
     */
    public function setAnfitriao($anfitriao): self
    {
        $this->anfitriao = $anfitriao;

        return $this;
    }

    /**
     * Get the value of cep
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     *
     * @return  self
     */
    public function setCep($cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of rua
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set the value of rua
     *
     * @return  self
     */
    public function setRua($rua): self
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     *
     * @return  self
     */
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getIdCidade()
    {
        return $this->idCidade;
    }

    public function setIdCidade($idCidade): self
    {
        $this->idCidade = $idCidade;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;
        return $this;
    }

    public function getIdEstado()
    {
        return $this->idEstado;
    }

    public function setIdEstado($idEstado): self
    {
        $this->idEstado = $idEstado;
        return $this;
    }

    /**
     * Get the value of pais
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */
    public function setPais($pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getIdPais()
    {
        return $this->idPais;
    }

    public function setIdPais($idPais): self
    {
        $this->idPais = $idPais;
        return $this;
    }

    /**
     * Get the value of complemento
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set the value of complemento
     *
     * @return  self
     */
    public function setComplemento($complemento): self
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get the value of diaria
     */
    public function getDiaria()
    {
        return $this->diaria;
    }

    /**
     * Set the value of diaria
     *
     * @return  self
     */
    public function setDiaria($diaria): self
    {
        $this->diaria = $diaria;

        return $this;
    }

    /**
     * Get the value of tipoImovel
     */
    public function getTipoImovel()
    {
        return $this->tipoImovel;
    }

    /**
     * Set the value of tipoImovel
     *
     * @return  self
     */
    public function setTipoImovel($tipoImovel)
    {
        $this->tipoImovel = $tipoImovel;

        return $this;
    }

    /**
     * Get the value of imagens
     */
    public function getImagens()
    {
        return $this->imagens;
    }

    /**
     * Set the value of imagens
     *
     * @return  self
     */
    public function setImagens($imagens)
    {
        $this->imagens = $imagens;

        return $this;
    }

    /**
     * Get the value of adicionaisImovel
     */
    public function getAdicionaisImovel()
    {
        return $this->adicionaisImovel;
    }

    /**
     * Set the value of adicionaisImovel
     *
     * @return  self
     */
    public function setAdicionaisImovel($adicionaisImovel)
    {
        $this->adicionaisImovel = $adicionaisImovel;

        return $this;
    }

    /**
     * Get the value of capacidadeMaxima
     */
    public function getCapacidadeMaxima()
    {
        return $this->capacidadeMaxima;
    }

    /**
     * Set the value of capacidadeMaxima
     *
     * @return  self
     */
    public function setCapacidadeMaxima($capacidadeMaxima)
    {
        $this->capacidadeMaxima = $capacidadeMaxima;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }
    /**
     * Get the value of idImovel
     */
    public function getIdImovel()
    {
        return $this->idImovel;
    }

    /**
     * Set the value of idImovel
     *
     * @return  self
     */
    public function setIdImovel($idImovel)
    {
        $this->idImovel = $idImovel;

        return $this;
    }

    public function inserirPais()
    {

        try {
            $conn = ConexaoBD::Conexao();

            $nomePais = $this->getPais();

            $sql = $conn->prepare('INSERT INTO findinn.pais (nome) VALUES (:nomePais)');

            $sql->bindParam("nomePais", $nomePais);

            $sql->execute();

            $idPais = $conn->lastInsertId();
            $this->setIdPais($idPais);
            $_SESSION['idPais'] = $idPais;
            return $idPais;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function inserirEstado()
    {

        try {
            $conn = ConexaoBD::Conexao();

            $nomeEstado = $this->getEstado();
            $idPais = $this->getIdPais();

            $sql = $conn->prepare('INSERT INTO findinn.estado (nome, id_pais) VALUES (:nomeEstado, :idPais)');

            $sql->bindParam("nomeEstado", $nomeEstado);
            $sql->bindParam("idPais", $idPais);

            $sql->execute();

            $idEstado = $conn->lastInsertId();
            $this->setIdEstado($idEstado);
            $_SESSION['idEstado'] = $idEstado;
            return $idEstado;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function inserirCidade()
    {

        try {
            $conn = ConexaoBD::Conexao();

            $nomeCidade = $this->getCidade();
            $idEstado = $this->getIdEstado();

            $sql = $conn->prepare('INSERT INTO findinn.cidade (nome, estado_id_estado) VALUES (:nomeCidade, :idEstado)');

            $sql->bindParam("nomeCidade", $nomeCidade);
            $sql->bindParam("idEstado", $idEstado);

            $sql->execute();

            $idCidade = $conn->lastInsertId();
            $this->setIdCidade($idCidade);
            $_SESSION['idCidade'] = $idCidade;
            return $idCidade;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function cadastrarImovel()
    {
        try {

            $conn = ConexaoBD::Conexao();

            // $usuario = Imovel::getAnfitriao();
            $usuario = $this->getAnfitriao();
            $cidade = $this->getIdCidade();
            $cep = $this->getCep();
            $rua = $this->getRua();
            $numero = $this->getNumero();
            $complemento = $this->getComplemento();
            $diaria = $this->getDiaria();
            $imgPrincipal = $this->getImagens();
            $descricao = $this->getDescricao();
            $capacidade = $this->getCapacidadeMaxima();
            $tipoAcomodacao = $this->getTipoImovel();
            $idAdicional = $this->getAdicionaisImovel();
            $imgSecundaria = "1";

            $sql = $conn->prepare('INSERT INTO findinn.acomodacao (id_usuario, id_cidade, cep, rua, numero, complemento, valor_diaria, imagem_principal, imagem_secundaria, descricao, capacidade, id_tipo_acomodacao, id_adicional_acomodacao) VALUES (:usuario, :cidade, :cep, :rua, :numero, :complemento, :diaria, :imgPrincipal, :imgSecundaria, :descricao, :capacidade, :tipoAcomodacao, :idAdicional)');

            $sql->bindParam("usuario", $usuario);
            $sql->bindParam("cidade", $cidade);
            $sql->bindParam("cep", $cep);
            $sql->bindParam("rua", $rua);
            $sql->bindParam("numero", $numero);
            $sql->bindParam("complemento", $complemento);
            $sql->bindParam("diaria", $diaria);
            $sql->bindParam("imgPrincipal", $imgPrincipal);
            $sql->bindParam("descricao", $descricao);
            $sql->bindParam("capacidade", $capacidade);
            $sql->bindParam("tipoAcomodacao", $tipoAcomodacao);
            $sql->bindParam("idAdicional", $idAdicional);
            $sql->bindParam("imgSecundaria", $imgSecundaria);

            $sql->execute();

            $lastIdImovel = $conn->lastInsertId();
            $this->setIdImovel($lastIdImovel);
            $_SESSION['idImovel'] = $lastIdImovel;

            // $imagem = $this->getImagens();
            // if ($imagem != null) {
            //     $imgPrincipalFinal = 'Principal' . $lastIdImovel . '.jpg';
            //     //move o arquivo para a pasta atual com esse novo nome
            //     if (move_uploaded_file($imagem['tmp_name'], dirname(dirname(__FILE__)) . '\View\assets\\' . $imgPrincipalFinal)) {
            //         $sql = $conn->prepare('UPDATE findinn.acomodacao SET imagem_principal = :nomeImagem WHERE id_acomodacao = :lastIdImovel');
            //         $sql->bindParam("nomeImagem", $imgPrincipalFinal);
            //         $sql->bindParam("lastIdImovel", $lastIdImovel);
            //         $sql->execute();
            //     }
            // }
            return $lastIdImovel;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function listarImovel()
    {
        //vai ao banco de dados e pega todos os acomodacaos
        try {
           
            $conn = ConexaoBD::Conexao();
            $sql = $conn->prepare('SELECT * FROM findinn.acomodacao WHERE id_usuario = :idUsuario');
            $sql->bindParam('idUsuario',$_SESSION['id']);
            $sql->execute();

            $lista = array();
            $i = 0;

            
            while ($dados = $sql->fetch(PDO::FETCH_ASSOC)) {
                $acomodacao = new Imovel();
                $acomodacao->setIdImovel($dados['id_acomodacao']);
                $acomodacao->setAnfitriao($dados['id_usuario']);
                $acomodacao->setIdCidade($dados['id_cidade']);
                $acomodacao->setCep($dados['cep']);
                $acomodacao->setRua($dados['rua']);
                $acomodacao->setNumero($dados['numero']);
                $acomodacao->setComplemento($dados['complemento']);
                $acomodacao->setDiaria($dados['valor_diaria']);
                $acomodacao->setImagens($dados['imagem_principal']);
                $acomodacao->setDescricao($dados['descricao']);
                $acomodacao->setCapacidadeMaxima($dados['capacidade']);
                $acomodacao->setTipoImovel($dados['id_tipo_acomodacao']);
                $acomodacao->setAdicionaisImovel($dados['id_adicional_acomodacao']);

                $lista[$i] = $acomodacao;
                $i++;
            }

            // for ($j = 0; $j < count($lista); $j++) {
            //     $caracteristicas = array();
            //     $minhaConexao = Conexao::getConexao();
            //     $id = $lista[$j]->getId();
            //     $sql = $minhaConexao->prepare("
            //             select * from acomodacao inner join
            //             acomodacao_has_caracteristica on idacomodacao = acomodacao_idacomodacao
            //             inner join caracteristica
            //             on caracteristica_idcaracteristica = idcaracteristica where idacomodacao = '$id';
            //             ");
            //     $sql->execute();
            //     $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            //     $i = 0;
            //     while ($dados = $sql->fetch(PDO::FETCH_ASSOC)) {
            //         $carac = $dados['caracteristica'];
            //         $caracteristicas[$i] = $carac;
            //         $i++;
            //     }
            //     $lista[$j] = array($lista[$j], $caracteristicas);
            // };

            return $lista;
        } catch (PDOException $e) {
            return array();
        }
    }
}

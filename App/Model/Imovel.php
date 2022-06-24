<?php


require "Usuario.php";
require "ConexaoBD.php";


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


    // function __construct(Usuario $anfitriao, string $cep, string $rua, string $numero, string $cidade, string $estado, string $complemento, string $diaria, TipoImovel $tipoImovel, AdicionaisImovel $adicionaisImovel, string $imagens, int $capacidadeMaxima, string $descricao)
    // {
    //     $this->anfitriao = $anfitriao;
    //     $this->cep = $cep;
    //     $this->rua = $rua;
    //     $this->numero = $numero;
    //     $this->cidade = $cidade;
    //     $this->estado = $estado;
    //     $this->complemento = $complemento;
    //     $this->diaria = $diaria;
    //     $this->tipoImovel = $tipoImovel;
    //     $this->dadicionaisImovel = $adicionaisImovel;
    //     $this->imagens = $imagens;
    //     $this->capacidadeMaxima = $capacidadeMaxima;
    //     $this->descricao = $descricao;
    // }

    /**
     * Get the value of anfitriao
     */
    public function getAnfitriao(): Usuario
    {
        return $this->anfitriao;
    }

    /**
     * Set the value of anfitriao
     *
     * @return  self
     */
    public function setAnfitriao(Usuario $anfitriao)
    {
        $this->anfitriao = $anfitriao->getId();

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
    public function setCep($cep)
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
    public function setRua($rua)
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
    public function setNumero($numero)
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
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getIdCidade()
    {
        return $this->idCidade;
    }

    public function setIdCidade($idCidade)
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
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    public function getIdEstado()
    {
        return $this->idEstado;
    }


    public function setIdEstado($idEstado)
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
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    public function getIdPais()
    {
        return $this->idPais;
    }

    public function setIdPais($idPais)
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
    public function setComplemento($complemento)
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
    public function setDiaria($diaria)
    {
        $this->diaria = $diaria;

        return $this;
    }

    /**
     * Get the value of tipoImovel
     */
    public function getTipoImovel(): TipoImovel
    {
        return $this->tipoImovel;
    }

    /**
     * Set the value of tipoImovel
     *
     * @return  self
     */
    public function setTipoImovel(TipoImovel $tipoImovel)
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
    public function getAdicionaisImovel(): AdicionaisImovel
    {
        return $this->adicionaisImovel;
    }

    /**
     * Set the value of adicionaisImovel
     *
     * @return  self
     */
    public function setAdicionaisImovel(AdicionaisImovel $adicionaisImovel)
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
            $cidade = $this->getCidade();
            $cep = $this->getCep();
            $rua = $this->getRua();
            $numero = $this->getNumero();
            $complemento = $this->getComplemento();
            $diaria = $this->getDiaria();
            $imgPrincipal = $this->getImagens();
            $descricao = $this->getDescricao();
            $capacidade = $this->getCapacidadeMaxima();
            $tipoAcomodacao = $this->getTipoImovel();

            $sql = $conn->prepare('INSERT INTO findinn.acomodacao (id_usuario, id_cidade, cep, rua, numero, complemento, valor_diaria, imagem_principal, descricao, capacidade, id_tipo_acomodacao) VALUES (:usuario,:cidade:,:cep,:rua,:numero,:complemento,:diaria,:imgPrincipal,:descricao,:capacidade,:tipoAcomodacao)');

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

            $sql->execute();

            $lastIdImovel = $conn->lastInsertId();
            $this->setIdImovel($lastIdImovel);
            return $lastIdImovel;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}

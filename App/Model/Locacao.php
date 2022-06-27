<?php


require_once 'ConexaoBD.php';
class Locacao
{

    private $anfitriao;
    private $locatario;
    private $imovel;
    private $diaria;
    private $dataInicioLocacao;
    private $dataFimLocacao;
    private $checkIn;
    private $checkOut;
    private $cancelamento;
    private $multa;

    /**
     * Get the value of anfitriao
     */
    public function getAnfitriao(): Anfitriao
    {
        return $this->anfitriao;
    }

    /**
     * Set the value of anfitriao
     *
     * @return  self
     */
    public function setAnfitriao(Anfitriao $anfitriao)
    {
        $this->anfitriao = $anfitriao;

        return $this;
    }

    /**
     * Get the value of locatario
     */
    public function getLocatario(): Locatario
    {
        return $this->locatario;
    }

    /**
     * Set the value of locatario
     *
     * @return  self
     */
    public function setLocatario(Locatario $locatario)
    {
        $this->locatario = $locatario;

        return $this;
    }

    /**
     * Get the value of imovel
     */
    public function getImovel(): Imovel
    {
        return $this->imovel;
    }

    /**
     * Set the value of imovel
     *
     * @return  self
     */
    public function setImovel(Imovel $imovel)
    {
        $this->imovel = $imovel;

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
     * Get the value of dataInicioLocacao
     */
    public function getDataInicioLocacao()
    {
        return $this->dataInicioLocacao;
    }

    /**
     * Set the value of dataInicioLocacao
     *
     * @return  self
     */
    public function setDataInicioLocacao($dataInicioLocacao)
    {
        $this->dataInicioLocacao = $dataInicioLocacao;

        return $this;
    }

    /**
     * Get the value of dataFimLocacao
     */
    public function getDataFimLocacao()
    {
        return $this->dataFimLocacao;
    }

    /**
     * Set the value of dataFimLocacao
     *
     * @return  self
     */
    public function setDataFimLocacao($dataFimLocacao)
    {
        $this->dataFimLocacao = $dataFimLocacao;

        return $this;
    }

    /**
     * Get the value of checkIn
     */
    public function getCheckIn()
    {
        return $this->checkIn;
    }

    /**
     * Set the value of checkIn
     *
     * @return  self
     */
    public function setCheckIn($checkIn)
    {
        $this->checkIn = $checkIn;

        return $this;
    }

    /**
     * Get the value of checkOut
     */
    public function getCheckOut()
    {
        return $this->checkOut;
    }

    /**
     * Set the value of checkOut
     *
     * @return  self
     */
    public function setCheckOut($checkOut)
    {
        $this->checkOut = $checkOut;

        return $this;
    }

    /**
     * Get the value of cancelamento
     */
    public function getCancelamento()
    {
        return $this->cancelamento;
    }

    /**
     * Set the value of cancelamento
     *
     * @return  self
     */
    public function setCancelamento($cancelamento)
    {
        $this->cancelamento = $cancelamento;

        return $this;
    }

    /**
     * Get the value of multa
     */
    public function getMulta()
    {
        return $this->multa;
    }

    /**
     * Set the value of multa
     *
     * @return  self
     */
    public function setMulta($multa)
    {
        $this->multa = $multa;

        return $this;
    }

    public function reservarImovel(){

        try {
            $conn = ConexaoBD::Conexao();
            $sql = $conn->prepare('INSERT INTO findinn.usuario (nome, cpf, email, senha, telefone, locatario, anfitriao, id_pais) VALUES (:nome, :cpf ,:email, :senha, :telefone, :locatario, :anfitriao, :id_pais)');

            $nome = $this->getnome();
            $cpf = $this->getCpf();
            $email = $this->getEmail();
            $senha = $this->getsenha();
            $telefone = $this->getTel();
            $locatario = 0;
            $anfitriao = 0;
            $id_pais = $this->getpais();

            $sql->bindParam("nome", $nome);
            $sql->bindParam("cpf", $cpf);
            $sql->bindParam("email", $email);
            $sql->bindParam("senha", $senha);
            $sql->bindParam("telefone", $telefone);
            $sql->bindParam("locatario", $locatario);
            $sql->bindParam("anfitriao", $anfitriao);
            $sql->bindParam("id_pais", $id_pais);

            $sql->execute();

            $last_id = $conn->lastInsertId();
            $this->setId($last_id);
            $_SESSION['id'] = $last_id;
            return $last_id;
        } catch (PDOException $e) {
            return $e->getMessage();
        }


    }



}

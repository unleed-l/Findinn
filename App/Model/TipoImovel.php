<?php

namespace App\Model;

require_once 'ConexaoBD.php';

Use PDOException;

class TipoImovel
{

    private $tipo;

    // public function __construct(string $tipo)
    // {
    //     $this->tipo = $tipo;
    // }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function setIdTipo($lastIdTipoImovel)
    {
        $this->lastIdTipoImovel = $lastIdTipoImovel;

        return $this;
    }

    public function getIdTipo()
    {
        return $this->lastIdTipoImovel;
    }
    
    public function inserirTipoImovel()
    {
        try
        {
            $conn = ConexaoBD::Conexao();

            $tipoImovel = $this->getTipo();

            $sql = $conn->prepare('INSERT INTO findinn.tipo_acomodacao (descricao) VALUES (:tipoImovel)');

            $sql->bindParam('tipoImovel', $tipoImovel);

            $sql->execute();

            $lastIdTipoImovel = $conn->lastInsertId();
            $this->setIdTipo($lastIdTipoImovel);

            return $lastIdTipoImovel;

        }catch (PDOException $e)
        {
            return $e->getMessage();
        }
    }
}
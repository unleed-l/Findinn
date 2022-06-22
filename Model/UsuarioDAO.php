<?php
require "ConexaoBD.php";

public function cadUsuario($liv){
       try{
           $minhaConexao = Conexao::getConexao();
           $sql = $minhaConexao->prepare("insert into findinn.usuario (nome, cpf, email, senha, telefone, pais) values (:nome, :cpf, :email, :senha, :telefone, :pais)");
           $sql->bindParam("nome",$nome);
           $sql->bindParam("cpf",$cpf);
           $sql->bindParam("email",$email);
           $sql->bindParam("senha",$senha);
           $sql->bindParam("telefone",$telefone);
           $sql->bindParam("pais",$pais);
           $nome = $liv->getnome();
           $cpf = $liv->getCPF();
           $email = $liv->getEmail();
           $senha = $liv->getsenha();
           $telefone = $liv->getTel();
           $pais = $liv->getpais();
           $sql->execute();
           
           $last_id = $minhaConexao->lastInsertId();
           $liv->setCodigo($last_id);
           echo "Usuario incluido com id=".$last_id;
           }
           return $last_id;
        catch(PDOException $e){
            //return "entrou no catch".$e->getmessage();
            return 0;
        }
}
?>
<?php
require "Model/Usuario.php";
require_once "IControlador.php";

class ControladorNovoUsuario implements IControlador{
   private $usuario;

   public function __construct(){
      $this->usuario = new Usuario();
  }
   
   public function processaRequisicao(){
      //receber os dados do formulario e setar o objeto
      $this->usuario->setnome($_POST['nome']);
      $this->usuario->setCpf($_POST['cpf']);
      $this->usuario->setEmail($_POST['email']);
      $this->usuario->setsenha($_FILES["senha"]);
      $this->usuario->setTel($_FILES["telefone"]);
      $this->usuario->setpais($_FILES["pais"]);
      
      $this->usuario->cadUsuario();
   }
}
   
   
?>
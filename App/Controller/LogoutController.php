<?php

require_once "App/Model/Usuario.php";
require_once "IController.php";
class LogoutController implements IController
{
    public function __construct()
    {
        $this->usuario = new Usuario();
    }
    
    public function Controller()
    {
        $this->usuario->logout();
        require "App/View/Home.php";
    }
}
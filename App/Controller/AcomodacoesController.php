<?php

require "IController.php";

class AcomodacoesController implements IController
{

    public function Controller()
    {
        require "App/View/acomodacoes.php";
    }
}
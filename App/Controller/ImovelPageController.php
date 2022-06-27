<?php

require 'IController.php';

class ImovelPageController implements IController
{
    public function Controller()
    {
        require 'App/View/CadastroAcomodacoes.php';
    }
}
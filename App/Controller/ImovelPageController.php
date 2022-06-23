<?php

require_once 'IController.php';

class ImovelPageController implements IController
{
    public function Controller()
    {
        require_once 'App/View/CadastroAcomodacoes.php';
    }
}
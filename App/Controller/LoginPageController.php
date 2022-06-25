<?php

require_once "IController.php";

class LoginPageController implements IController
{

    public function Controller()
    {
        require "App/View/Login.php";
    }
}

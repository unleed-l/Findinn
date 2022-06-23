<?php

require_once "IController.php";

class UserPageController implements IController
{
    public function Controller()
    {
        require_once "App/View/UserPage.php";
    }
}

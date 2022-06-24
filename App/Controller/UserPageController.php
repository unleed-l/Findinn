<?php

require "IController.php";

class UserPageController implements IController
{
    public function Controller()
    {
        require "App/View/UserPage.php";
    }
}

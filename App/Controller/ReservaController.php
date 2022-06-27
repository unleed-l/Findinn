<?php

require "IController.php";

session_start();
class ReservaController implements IController
{
    public function Controller()
    {

        $_SESSION['idReserva'] = $_POST['Reservar'];

        require "App/View/Reservar.php";
    }
}

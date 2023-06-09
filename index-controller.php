<?php

require_once 'controllerFudbaler.php';
$action=isset($_REQUEST['action'])?$_REQUEST['action']:"";


switch($_SERVER["REQUEST_METHOD"])
{

    case "GET":
        {
            switch($action){

                case "logout":
                    $controller=new controllerFudbaler();
                    $controller->logout();
                    break;
            }
        }
    break;

    case "POST":
        {
            switch($action)
            {
                case "forma":
                    include '../prikaz.php';
                    break;
            }
        }
}


?>

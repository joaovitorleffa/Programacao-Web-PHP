<?php
session_start();
    if(!isset($_GET['c'])) {
        require_once("controllers/MainController.php");
        $Main = new MainController();
        $Main->index();
    } else {
        switch($_REQUEST['c']) {
            case 'm':
                require_once("controllers/MainController.php");
                $Main = new MainController();

                if(!isset($_GET['a'])) {
                    $Main->index();
                } else {
                    switch($_REQUEST['a']) {
                        case 'i': $Main->index(); break;
                        case 'l': $Main->login(); break;
                        case 'sd': $Main->sessionDestroy(); break;
                    }
                }
            break;
            
            case 'u':
                require_once("controllers/UsersController.php");
                $User = new UsersController();

                if(!isset($_GET['a'])) {

                } else {
                    switch($_REQUEST['a']) {
                        case 'vl': $User->validateLogin();
                    }
                }
            break;

            case 'cl':
                require_once("controllers/ClientsController.php");
                $Clients = new ClientsController();
                if(!isset($_GET['a'])) {
                    $Clients->index();
                } else {
                    switch($_REQUEST['a']) {
                        case 'lc': $Clients->listClients();
                        case 'fa': $Clients->formRegister(); break;
                        case 'ad': $Clients->registerClients(); break;
                        case 'cg': $Clients->formChange($_GET['id']); break;
                        case 'alterar': $Clients->changeData() ; break;
                        case 'dl': $Clients->deleteData($_GET['id']); break;
                    }
                }
            break;
        }
    }
?>
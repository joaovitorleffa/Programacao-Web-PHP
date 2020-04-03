<?php
    class ClientsController {
        public function index() {
            $this->listClients();
        }

        public function formRegister() {
            require_once("views/templates/header.php");
            require_once("views/clients/formRegister.php");
            require_once("views/templates/footer.php");
        }

        public function registerClient() {
            $client = array(
                "nome" => $_POST['nome'],
                "login" => $_POST['login'],
                "sexo" => $_POST['sexo'],
                "ta" => $_POST['textarea']
            );
            require_once('views/templates/header.php');
            require_once('views/clients/registerClient.php');
            require_once('views/templates/footer.php');
        }

        public function listClients() {
            require_once('models/ClientsModel.php');
            $client = new ClientsModel();
            $client->listClients();
            $result = $client->getConsult();

            $arrayClients = array();

            while($row = $result->fetch_assoc()) {
                array_push($arrayClients, $row);
            }

            require_once('views/templates/header.php');
            require_once('views/listClients.php');
            require_once('views/templates/footer.php');
        }
    }
?>
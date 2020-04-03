<?php
    class ClientsController {
        var $ClientModel;

        public function __construct() {
            if(!isset($_SESSION["login"])) {
                header("Location: index.php?c=m&a=l");
            }

            require_once("models/ClientsModel.php");
            $this->ClientModel = new ClientsModel();
        }

        public function index() {
            $this->listClients();
        }

        public function formRegister() {
            require_once("views/templates/header.php");
            require_once("views/templates/nav.php");
            require_once("views/clients/addClients.php");
            require_once("views/templates/footer.php");
        }

        public function registerClients() {
            $arrayClient["name"] = $_POST["name"];
            $arrayClient["email"] = $_POST["email"];
            $arrayClient["tel"] = $_POST["tel"];
            $arrayClient["address"] = $_POST["address"];

            $this->ClientModel->addNewClients($arrayClient);
            $this->listClients();
        }


        public function formChange($id) {
            $this->ClientModel->listClientSelected($id);
            $result =  $this->ClientModel->getConsult();

            if ($arrayClient = $result->fetch_assoc()){
                require_once("views/templates/header.php");
                require_once("views/templates/nav.php");
                require_once("views/clients/changeClients.php");
                require_once("views/templates/footer.php");
            };
        }

        public function changeData() {
            $arrayClient["id_user"] =  $_POST["id"];
            $arrayClient["name"] = $_POST["name"];
            $arrayClient["email"] = $_POST["email"];
            $arrayClient["tel"] = $_POST["tel"];
            $arrayClient["address"] = $_POST["address"];

            $this->ClientModel->changeClients($arrayClient);
            $this->listClients();
        }

        public function deleteData($id) {
            $this->ClientModel->deleteClients($id);
            $this->listClients();
        }

        public function listClients() {
            $this->ClientModel->listClients();
            $result = $this->ClientModel->getConsult();

            $arrayClients = array();

            while($row = $result->fetch_assoc()) {
                array_push($arrayClients, $row);
            }

            require_once('views/templates/header.php');
            require_once('views/templates/nav.php');
            require_once('views/clients/listClients.php');
            require_once('views/templates/footer.php');
        }
    }
?>
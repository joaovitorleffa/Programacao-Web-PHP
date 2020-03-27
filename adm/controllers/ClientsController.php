<?php
    class ClientsController {
        public function listClients() {
            require_once('models/ClientsModel.php');
            $client = new ClientsModel();
            $client -> listClients();
            $result = $client -> getConsult();

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
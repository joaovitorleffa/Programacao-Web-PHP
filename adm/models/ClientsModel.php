<?php
    class ClientsModel {
        var $result;
        public function listClients() {
            require_once("db/ConnectionClass.php");
            $Oconn = new ConnectClass();
            $Oconn->openConnection();
            $conn = $Oconn->getConnection();
            $sql = 'SELECT * FROM clientes';
            $this->result = $conn->query($sql);
        }

        public function getConsult() {
            return $this->result;
        }
    }
?>
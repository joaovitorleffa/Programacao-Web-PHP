<?php

    class ClientsModel {
        var $result;
        public function listClients() {
            require_once("db/connectionClass.php");
            $Oconn = new ConnectClass();
            $Oconn -> openConnection();
            $conn = $Oconn -> getConnection();
            $sql = 'SELECT * FROM clientes';
            $this -> resultado = $conn -> query($sql);
        }

        public function getConsult() {
            return $this -> resultado;
        }
         
    }
?>
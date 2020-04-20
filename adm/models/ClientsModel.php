<?php
    class ClientsModel {
        var $result;
        var $conn;

        public function __construct()
        {
            require_once("db/ConnectionClass.php");
            $Oconn = new ConnectClass();
            $Oconn->openConnection();
            $this->conn = $Oconn->getConnection();
        }

        public function addNewClients($arrayClient) {
            $sql = "INSERT INTO clientes (nome, email, telefone, endereco)
                    VALUES ('".$arrayClient['name']."','".$arrayClient['email']."','".
                    $arrayClient['tel']."','".$arrayClient['address']."');";
            $this->conn->query($sql);
            $this->result = $this->conn->insert_id;
        }

        public function changeClients($arrayClient) {
            $sql = "UPDATE clientes SET nome='".$arrayClient['name']."', email='".$arrayClient
            ['email']."', telefone='".$arrayClient['tel']."', endereco='".$arrayClient['address']."'
            WHERE id_cliente=".$arrayClient['id_user'].";";
            $this->conn->query($sql);
        }

        public function deleteClients($id) {
            $sql = "DELETE FROM clientes WHERE id_cliente='".$id."';";
            $this->conn->query($sql); 
        }

        public function listClientSelected($id_cliente) {
            $sql = "SELECT * FROM clientes WHERE id_cliente = '".$id_cliente."';";
            $this->result = $this->conn->query($sql);
        }

        public function listClients() {
            $sql = 'SELECT * FROM clientes ORDER BY id_cliente';
            $this->result = $this->conn->query($sql);
        }

        public function getConsult() {
            return $this->result;
        }
    }
?>
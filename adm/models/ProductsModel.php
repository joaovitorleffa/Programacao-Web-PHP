<?php 
    class ProductsModel {
        var $result;
        var $conn;

        public function __construct() 
        {
            require_once("db/ConnectionClass.php");
            $Oconn = new ConnectClass();
            $Oconn->openConnection();
            $this->conn = $Oconn->getConnection();
        }

        public function addNewProducts($arrayProduct) {
            $sql = "INSERT INTO produtos (nome, descricao, valor)
                    VALUES ('".$arrayProduct['name']."','".$arrayProduct['description']."','".
                    $arrayProduct['value']."');";
            $this->conn->query($sql);
        }

        public function changeProducts($arrayProduct) {
            $sql = "UPDATE produtos SET nome='".$arrayProduct['name']."', descricao='".$arrayProduct
            ['description']."', valor='".$arrayProduct['value']."'
            WHERE id_produto=".$arrayProduct['id_product'].";";
            $this->conn->query($sql);
        }

        public function deleteProducts($id) {
            $sql = "DELETE FROM produtos WHERE id_produto='".$id."';";
            $this->conn->query($sql); 
        }

        public function listProductSelected($id_Product) {
            $sql = "SELECT * FROM produtos WHERE id_produto = '".$id_Product."';";
            $this->result = $this->conn->query($sql);
        }

        public function listProducts() {
            $sql = 'SELECT * FROM produtos ORDER BY id_produto';
            $this->result = $this->conn->query($sql);
        }

        public function getConsult() {
            return $this->result;
        }
    }
?>
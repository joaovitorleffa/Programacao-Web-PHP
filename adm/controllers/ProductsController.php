<?php
    class ProductsController {
        var $ProductModel;

        public function __construct() {
            if(!isset($_SESSION["login"])) {
                header("Location: index.php?c=m&a=l");
            }

            require_once("models/ProductsModel.php");
            $this->ProductModel = new ProductsModel();
        }

        public function index() {
            $this->listProducts();
        }

        public function formRegisterProduct() {
            require_once("views/templates/header.php");
            require_once("views/templates/nav.php");
            require_once("views/products/addProducts.php");
            require_once("views/templates/footer.php");
        }

        public function registerProduct() {
            $arrayProduct["name"] = $_POST["name"];
            $arrayProduct["description"] = $_POST["description"];
            $arrayProduct["value"] = $_POST["value"];

            $this->ProductModel->addNewProducts($arrayProduct);
            $this->listProducts();
        }

        public function formChangeProduct($id) {
            $this->ProductModel->listProductSelected($id);
            $result = $this->ProductModel->getConsult();
        
            if ($arrayProduct = $result->fetch_assoc()) {
                require_once("views/templates/header.php");
                require_once("views/templates/nav.php");
                require_once("views/products/changeProducts.php");
                require_once("views/templates/footer.php");
            }
        }

        public function changeData() {
            $arrayProduct["id_product"] = $_POST["id"];
            $arrayProduct["name"] = $_POST["name"];
            $arrayProduct["description"] = $_POST["description"];
            $arrayProduct["value"] = $_POST["value"];

            $this->ProductModel->changeProducts($arrayProduct);
            $this->listProducts();
        }

        public function deleteData($id) {
            $this->ProductModel->deleteProducts($id);
            $this->listProducts();
        }

        public function listProducts() {
            $this->ProductModel->listProducts();
            $result = $this->ProductModel->getConsult();

            $arrayProducts = array();

            while($row = $result->fetch_assoc()) {
                array_push($arrayProducts, $row);
            }

            require_once('views/templates/header.php');
            require_once('views/templates/nav.php');
            require_once('views/products/listProducts.php');
            require_once('views/templates/footer.php');
        }
    }
?>
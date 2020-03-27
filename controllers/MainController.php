<?php
    class MainController {
        function index() {
            require_once('views/templates/header.php');
            require_once('views/home.php');
            require_once('views/templates/footer.php');
        }
        function products() {
            require_once('views/templates/header.php');
            require_once('views/products.php');
            require_once('views/templates/footer.php');
        }
        function about() {
            require_once('views/templates/header.php');
            require_once('views/about.php');
            require_once('views/templates/footer.php');
        }
        function contact() {
            require_once('views/templates/header.php');
            require_once('views/contact.php');
            require_once('views/templates/footer.php');
        }
    }
?>
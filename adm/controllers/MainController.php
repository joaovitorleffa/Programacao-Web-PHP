<?php
    class MainController {
        public function index() {
            if (!isset($_SESSION['login'])) {
                header("Location: index.php?c=m&a=l"); //se não estiver logado apresenta tela de login
            } else {
                require_once('views/templates/header.php');
                require_once('views/templates/nav.php');
                require_once('views/home.php');
                require_once('views/templates/footer.php');
            }
        }

        public function login() {
            require_once('views/user/login.php');
        }

        public function sessionDestroy() {
            session_destroy(); //destroi a seção
            header("Location: index.php?c=m&a=l"); //ao sair da seção retorna a tela de login
        }
    }   
?>


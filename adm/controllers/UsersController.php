<?php
    class UsersController {
        public function validateLogin() {
            $login = $_POST['login'];
            require("models/UsersModel.php");
            $user = new UsersModel();
            $user->consultUser($login);
            $result = $user->getQuery();

            if ($row = $result->fetch_assoc()) {
                if ($row['password'] == $_POST['password']) {
                    $_SESSION['id_user'] = $row['id_user'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['login'] = $row['user'];
                    header("Location: index.php?c=m&a=i");
                } else {
                    echo "senha incorreta";
                }
            } else {
                echo "usuário não existe";
            }
        }
    }
?>
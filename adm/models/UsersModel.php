<?php
    class UsersModel {
        var $result;

        public function consultUser($login) {
            require_once("db/connectionClass.php");
            $Oconn = new connectClass();
            $Oconn->openConnection();
            $sql = "SELECT * FROM users WHERE user='".$login."'";
            $conn = $Oconn->getConnection();
            $this->result = $conn->query($sql);
        }

        public function getQuery() {
            return $this->result;
        }
    }
?>
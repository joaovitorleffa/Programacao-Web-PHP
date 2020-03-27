<?php
    class ConnectClass {
        var $conn;

        function openConnection() {
            $host = 'localhost';
            $db = 'lpw_exemplo';
            $user = 'root';
            $password = '';
            $this -> conn = new mysqli($host, $user, $password, $db, "3308"); 
        }
    
        function getConnection() {
            return $this -> conn;
        }
    }
?>
<?php

    class Dbh{



        protected $hostname, $dbname, $username, $password, $conn;



        function __construct() {

            $this->hostname = "localhost";

            $this->dbname = "albhkbkp_adatabases";

            $this->username = "albhkbkp_root";

            $this->password = "21qw21epoli123";

            try {

        

                $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);

                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {

                echo 'Error: ' . $e->getMessage();

            }

        }

    }

?>




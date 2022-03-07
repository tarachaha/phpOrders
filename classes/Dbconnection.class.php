<?php
class Dbconnection {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "rota";

    protected function connect() {
        //Create connection
        $connection = new mysqli($this->servername, $this->username, $this->password, $this->dbName);

        //Check connection
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        //for debbuging
        echo "connected succesfully";
        return $connection;
    }
}
?>
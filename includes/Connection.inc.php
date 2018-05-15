<?php


class Connection {
    private $servername;
    private $username;
    private $password;
    private $database;

    protected function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "oopblog";

        //mysqli connection
        $con = new mysqli($this->servername, $this->username , 
        $this->password, $this->database );
        
        return $con;
    
    }
}
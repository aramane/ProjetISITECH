<?php

class Database {
   
    private $host = "localhost";
    private $dbName = "location";
    private $user = "root";
    private $pass = "";

    private $dbh;
    private $error;

    public function __construct()
    {
        $dsn = "mysql:host=".$this->host.";dbname=".$this->dbName;

        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass);
        }
        //catch any errors
        catch (PDOException $e){
            $this->error = $e->getMessage();
        }
    }
    
    public function setPDO()
    {
        return $this->dbh;
    }
}

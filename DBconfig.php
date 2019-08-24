<?php


class DBconfig
{

    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_database = "playerdatabase";

    protected $connection;

    public function __construct(){
        if(!isset($this->connection)){
            $this->connection = new mysqli($this->_host,$this->_username,$this->_password,$this->_database);
            if(!$this->connection){
                echo "Connection Problem!";
                exit;
            }
        }

        return $this->connection;
    }
}